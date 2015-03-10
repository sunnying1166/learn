<?php

class UserController extends BaseController{

	public function login(){
		/*
		@account
		@password
		*/
		if(Input::has('account') && (Input::has('password'))){
			Log::info(Input::all());
			if(Auth::attempt(array('account' => Input::get('account'), 'password' => Input::get('password')), Input::get('remember') == 'on' ? true : false)){
				if(Auth::check()){
					Log::info(Input::get('account').':login '.Auth::user());
				}
				return Redirect::to('/index');
				return Response::make("Login success");
			}else{
				return Response::make("account or password is wrong");
			}
		}else{
			return Response::make('parameter loss');
		}
	}

	public function logout(){
		Auth::logout();
		if(!Auth::check()){
			return Redirect::to('/index');
		}
		return Redirect::to('/index');
	}

	public function generateEmailLink($account){
		$host = "http://localhost";
		$port = 8000;
		if(App::environment('testing')){
			$host = "http://localhost";
		}
		$encodeStr = str_shuffle("ABCDEFGHIGKLMNOPQRSTUVWXYZzbcdefghigklmnopqrstuvwxyz1234567890987654321");
		Cache::put($account, $encodeStr ,1440);
		$return = $host.":".$port.'/user/fromEmail?account='.$account.'&encrypt='.$encodeStr;
		Log::info("link -> ".$return);
		return $return;

	}

	public function completeRegister(){
		/*
		@account
		@encrypt		
		*/
		Log::info(Input::all());
		$registerMsg = Input::all();
		if(Cache::get($registerMsg['account']) == $registerMsg['encrypt']){
			return View::make('completeReg')->with('account', $registerMsg['account']);
		}else{
			Log::info($registerMsg['account']."failed the registerion");
			return Response::make('link is invalid');
		}
	}


	public function registPre(){
		/*
		@account
		*/
		if(Input::has('account')){
			//正则表达式验证邮箱
			//发送注册邮件
			Log::info(App::environment());
			if (App::environment('local') || App::environment('production')){
    		// 当前为 local 运行环境
				Log::info('local environment');
				Mail::send('emails.register', array('link' => $this->generateEmailLink(Input::get('account'))), function($message)
				{
	    			$message->to(Input::get('account'), '小八哥新用户')->subject('Welcome to regist the learnchinese !');
				});
				return Redirect::back()->with('msg','success');
			}else if(App::environment('testing')){
				Mail::send('emails.register', array('link' => $this->generateEmailLink(Input::get('account'))), function($message)
				{
	    			$message->to(Input::get('account'), '小八哥新用户')->subject('Welcome to regist the learnchinese !');
				});
				return Response::make("testing success");
			}
			
		}else{
			return Response::make('fail');
		}
	}

	public function register(){
		//缺少对CSRF的保护
		/*
		@acccount
		@password
		@confirmpassword
		@username
		*/
		$account = Input::get('account');
		Log::info(User::where('account', '=', $account)->first());
		if(User::where('account', '=', $account)){
			if(Input::has('username') && Input::has('password') && Input::has('confirmpassword')){
				if(Input::get('password') == Input::get('confirmpassword')){
					$password = Input::get('password');
					$user = User::create(array('account' => $account, 'password' => Hash::make($password), 'logtimes' => 5,'regtime' => DB::raw('now()')));
					Log::info('user created ->'.$user);
					if($user->save()){
						if(Auth::check()){
							Log::warn('already login');
							Log::info('the old loginded user is->'.Auth::user());
							Auth::logout();
							Log::warn('already logout');
						}else if(Auth::attempt(array('account' => $account, 'password' => $password))){
							Log::warning('the new login is->'.Auth::user());
							return Response::make('regist success');
						}else{
							return Response::make('regist success manual login in');
						}
					}else{
						Response::make('register failed');
					}
				}else{
					return Response::make('two password different');
				}
			}else{
				return Response::make('parameter loss');
			}
		}else{
			Log::info('the account registered');
			return Response::make('account occupied');
		}
		
	}

	/*
	*@gender
	*@phoaddr
	*@grade 
	*/
	public function ComleteInfo(){
		$gender = Input::get('gender');
		$grade = Input::get('grade');
		if($gender != "" && $grade != ""){
			$user = Auth::user();
			$user->gender = $gender;
			$user->ugrade = $grade;
		}
		if(Input::hasFile('phoaddr')){
			Input::file('phoaddr')->move('/image/avatar',Auth::id());
		}
		return View::make('hello')->with('msg','CompleteInfo');
	}
}