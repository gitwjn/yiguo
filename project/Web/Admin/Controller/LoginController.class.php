<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

	public function index(){


		//解析模版
		$this->display();
	}

	public function login(){
		$admin =M('admin_user');

		//接受数据
		$adminname =I('post.adminname');
		$password =I('post.password');

		//查询
		$info =$admin->where('name = "'.$adminname.'" and password= "'.$password.'"')->find();
		// var_dump($info);die;
		if (!empty($info)) {
			session_start();
			$_SESSION['uid'] = $info['id'];
			$_SESSION['boss'] = $info['boss'];
			session('name',$info['name']);
			$this->success('登录成功',U('Admin/Index/index'),3);
		}else{
			$this->error('登录失败','');
		}
	}
}