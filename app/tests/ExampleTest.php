<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		//$crawler = $this->client->request('GET', '/');
		//$this->assertTrue($this->client->getResponse()->isOk());

		/*/-------------login--------------
		$response = $this->call('POST','/user/login',array('account' => '997833949@qq.com', 'password' => 'zhangzhiqiang', 'remember' => 'checked'));
		$this->assertEquals('Login success', $response->getContent());
		//----------------------------------*/

		/*-------------regist-------------
		$response = $this->call('POST','/user/register',array('account' => '997833949@gmail.com', 'username' => 'vampire', 'password' => 'zhangzhiqiang', 'confirmpassword' => 'zhangzhiqiang'));
		$this->assertEquals('regist success',$response->getContent());
		//----------------------------------*/

		/*------------registPre----------
		$response = $this->action('POST', 'UserController@registPre', array('account' => 'jiamianqishizzq@gmail.com'));
		$this->assertEquals('testing success',$response->getContent());
		//----------------------------------*/

		//--------------OrdersentController---------
		$response = $this->call('get', '/SentenceOrder');
		$this->assertEquals('success', $response->getContent());
		//----------------------------------------------*/
	}

}
