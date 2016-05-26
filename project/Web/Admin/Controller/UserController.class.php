<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController {
    	//显示用户列表
    public function index(){

    	$user=M('user');
    	// var_dump($_GET);

    	 //获取每页显示的数量
       $num = !empty($_GET['num']) ? $_GET['num'] : 10;

        //获取关键字
        if(!empty($_GET['keyword'])){
            //有关键字
            $where = "username like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }


        // 查询满足要求的总记录数
        $count = $user->where($where)->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,$num);
        //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;

         //执行查询
        $res = $user->join('left join userinfo on user.id = userinfo.uid')->where($where)->limit($limit)->select();
        // var_dump($res);

        // 分页显示输出
        $pages = $Page->show();

    	// var_dump($res);
    	foreach ($res as $k => $v) {
  
    	$res[$k]['hobby']= str_replace(array('0','1','2'),array('篮球','台球','足球'),$v['hobby']);
    	}

    	$this->assign('res',$res);
    	$this->assign('pages',$pages);
    	$this->display();
    }
    //显示用户添加页面
    public function add(){
    	// echo '用户添加';

    	$this->display();
    }
    //处理用户的数据添加
    public function insert(){
    	// var_dump($_POST);

    	//创建表对象
    	$user=M('user');
    	// var_dump($user);

    	
    	 //处理图片
        if($_FILES['pic']['error'] == 0){
            $upload = new \Think\Upload();// 实例化上传类    
            $upload->maxSize   =     3145728 ;// 设置附件上传大小    
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
            $upload->rootPath  =       './Public';
            $upload->savePath  =      '/Uploads/'; // 设置附件上传目录   
            // 上传文件      	
            $info   =   $upload->upload();    
            if(!$info) {// 上传错误提示错误信息       
                $this->error($upload->getError());    
            }else{// 上传成功        
                // $this->success('上传成功！'); 
                $str =  ltrim($upload->rootPath,'.').$info['pic']['savepath'].$info['pic']['savename'];
                $_POST['pic'] = $str;
            }
        }

        //创建数据
        $user->create();
        //添加数据
        $id=$user->add();
        //创建附表
        $userinfo =M('userinfo');
        //处理uid
        $_POST['uid']=$id; 

        //处理hobby字段
        if(!empty($_POST['hobby'])){
            $_POST['hobby']=implode(',',$_POST['hobby']);
        }

    	
        //创建附表数据
        $userinfo->create();
        //执行添加
    	if($userinfo->add()){
    		$this->success('添加成功',U('Admin/User/index'),3);
    	}else{
    		$this->error('添加失败');
    	}
    }
    public function save(){
    	echo $id=I('get.id');
    	//创建表
    	$user=M('user');
        $infoo = $user->join('left join userinfo on user.id = userinfo.uid')->select($id);
    	// echo $user->_sql();die;
        $info =$infoo[0];
    	// var_dump($info);die;

    	//设置爱好字段
    	$hobby=explode(',',$info['hobby']);
    	// var_dump($hobby);die;
    	//分配变量
    	$this->assign('info',$info);
    	$this->assign('hobby',$hobby);

    	//解析模版
    	$this->display();
    }
    public function update(){
    	$user = M('user');
        // 处理hobby字段
        if(!empty($_POST['hobby'])){
            $_POST['hobby']=implode(',',$_POST['hobby']);
        }
         //处理图片
        if($_FILES['pic']['error'] == 0){
            $upload = new \Think\Upload();// 实例化上传类    
            $upload->maxSize   =     3145728 ;// 设置附件上传大小    
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
            $upload->rootPath  =       './Public';
            $upload->savePath  =      '/Uploads/'; // 设置附件上传目录   
            // 上传文件     
            $info   =   $upload->upload();    
            if(!$info) {// 上传错误提示错误信息       
                $this->error($upload->getError());    
            }else{// 上传成功        
                // $this->success('上传成功！'); 
                $str =  ltrim($upload->rootPath,'.').$info['pic']['savepath'].$info['pic']['savename'];
                $_POST['pic'] = $str;
            }

            //获取原来图片的;路径
            $res = $user->find($_POST['id']);
            $pic = $res['pic'];
            // var_dump($pic);
            //删除图片
            unlink('.'.$pic);
        }
    	// var_dump($_POST);die;

        
        $user->create();
        $res= $user->save();
        $userinfo =M('userinfo');
        $uid = $_POST['id'];
        $data['hobby'] = $_POST['hobby'];
        $data['sex'] = $_POST['sex'];
        if(empty($_POST['pic'])){
        $data['pic'] = $_POST['pic1'];
        }else{
        $data['pic'] = $_POST['pic'];
        }
        $data['intro'] = $_POST['intro'];
        $userinfo->create();
        $res= $userinfo->where('uid = '.$uid)->save($data);
        // echo $userinfo->_sql();die;
    	// var_dump($res);
    	 if($res){
             //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('修改成功', U('Admin/User/index'),3);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('修改失败');
       }

    }
    public function ajaxdel(){
        // var_dump($_GET);
        //创建表对象
        $user = M('user');
        $userinfo = M('userinfo');
        //获取id
        $id = $_GET['id'];
        //执行删除
        $res = $user->delete($id);
        $res = $userinfo->where('uid = '.$id)->delete();

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function ajaxedit(){
    	$user=M('user');
    	$res =$user->save($_POST);

    	if($res){
    		echo 1;
    	}else{
    		echo 0;
    	}

    }
}