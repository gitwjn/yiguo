<?php
namespace Home\Controller;
use Think\Controller;
class XpzqController extends Controller {
    public function index(){

    	$cate = M('cate');
        $cates=$cate->where('pid=0 and display= 1')->select();
        // 分配变量
        $this->assign('cates',$cates);
    	//解析模板
    	$this->display();
    	

    }
}