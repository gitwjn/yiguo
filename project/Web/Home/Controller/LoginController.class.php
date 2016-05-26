<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
    	//解析模板
    	$this->display();
    }
    public function login(){
    	// var_dump($_POST);
    	$user = M('user');

		//接受数据
		$username = I('post.username');
		$password = I('post.password');

		//查询
		$info = $user->where('username = "'.$username.'" and password = "'.$password.'"')->find();
		// echo $user->_sql();
		// var_dump($info);
		//检测用户是否存在
		if(!empty($info)){
			session_start();
			$_SESSION['Home']['id'] = $info['id'];
			$_SESSION['Home']['username'] = $info['username'];
			redirect(U('Home/Index/index'));
		}else{
			$this->error('登录失败','',3);
		}
    }
    //注销用户
    public function loginout(){

    	session('Home',null);
    	redirect(U('Home/Index/index'));
    }
    public function loginup(){
    	$this->display();
    }
    public function insert(){
    	//创建表对象
        $user = M('user');
        // var_dump($user);

        //创建数据
        $user->create();
        //添加数据
        $id=$user->add();
        //创建附表
        $userinfo =M('userinfo');
        //处理uid
        $_POST['uid']=$id;
        //创建附表数据
        $userinfo->create(); 
        //执行添加
       if($userinfo->add()){
             //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('注册成功', U('Home/Login/index'),3);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('注册失败');
       }
    }
    public function Email(){
    	$yzm=mt_rand(100000, 999999);
    	$email = $_GET['email'];
		// sendMail('13701383017@139.com','来自星星的川哥','您的验证码为:5211314');
		sendMail($email,'易果生鲜网邮箱验证','您的验证码为:'.$yzm);
		echo $yzm;

	}
    public function usname(){
        $user = M('user');
        //接受数据
        $username = $_GET['username'];
        //查询
        $info = $user->where('username = "'.$username.'"')->find();
        // echo $user->_sql();
        // var_dump($info);
        //检测用户是否存在
        if(!empty($info)){
            echo '1';
        }else{
            echo '0';
        }

    }
}