<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends CommonController {

	public function index(){
		$user=M('admin_user');
    	// var_dump($_GET);

    	 //获取每页显示的数量
       $num = !empty($_GET['num']) ? $_GET['num'] : 5;

        //获取关键字
        if(!empty($_GET['keyword'])){
            //有关键字
            $where = "name like '%".$_GET['keyword']."%'";
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
         
        $res = $user->join('left join think_auth_group_access on admin_user.id = think_auth_group_access.uid')->join('inner join think_auth_group on think_auth_group_access.group_id = think_auth_group.id')->where($where)->limit($limit)->select();
        // var_dump($res);
        // die;
        // 分页显示输出
        $pages = $Page->show();

        $this->assign('res',$res);
    	$this->assign('pages',$pages);
		//解析模版
		$this->display();
	}
	    //显示管理员添加页面
    public function add(){

        $group=M('think_auth_group');

        $res=$group->select();
        //遍历
        $this->assign('res',$res);

    	$this->display();
    }
    //处理用户的数据添加
    public function insert(){
        //创建表对象
        $user=M('admin_user');
        $user->create();
        $uid=$user->add();
        $group_id=$_POST['group_id'];
        //创建附表数据
        $addgroup['uid']=$uid;
        $addgroup['group_id']=$group_id;
        $group=M('think_auth_group_access');
        //执行添加
    	if($group->add($addgroup)){
    		$this->success('添加成功',U('Admin/Admin/index'),3);
    	}else{
    		$this->error('添加失败');
    	}	
    }
    public function save(){
    	$id=I('get.id');
        	//创建表
    	$user=M('admin_user');
    	$info =$user->join('left join think_auth_group_access on admin_user.id = think_auth_group_access.uid')->where('id ="'.$id.'"')->select();
        $info =$info[0];
        $group=M('think_auth_group');

        $oup =$group->select();
           	//分配变量
        $this->assign('info',$info);
    	$this->assign('oup',$oup);
    	//解析模版
    	$this->display();
    }
    public function update(){
        // var_dump($_POST);
    	$user = M('admin_user');
        $uid=$_POST['id'];
        // var_dump($uid);die;
    	//创建数据
       $user->create();
        //执行修改
    	$ress= $user->save();
        
        $group=M('think_auth_group_access');
        $data['group_id'] = $_POST['group_id'];
         $group->create();
        //执行修改
            $ress= $group->where('uid ='.$uid)->save($data);
    	 if($ress){
             //设置成功后跳转页面的地址，
             //默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('修改成功', U('Admin/Admin/index'),3);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('修改失败');
       }

    }
    public function ajaxdel(){
        // var_dump($_GET);
        //创建表对象
        $user = M('admin_user');
        $access = M('think_auth_group_access');
        //获取id
        $id = $_GET['id'];
        //执行删除
        $res = $user->delete($id);
        $res = $access->where('uid ='.$id)->delete();

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }

}