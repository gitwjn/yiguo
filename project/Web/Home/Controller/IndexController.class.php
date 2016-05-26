<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//解析模板
        //分类
		$cate = M('cate');
        $cates=$cate->where('pid=0 and display= 1')->select();
        // 分配变量
        //var_dump($cates);
        $this->assign('cates',$cates);

        //子类
        $catex=$cate->where('pid != 0 and display= 1')->select();
        $this->assign('catex',$catex);
        // var_dump($catex);
        // die;
        // 商品前台遍历
       $goods = M('goods');
        $date['lover'] = 0;
        $goodss = $goods->join('left join goods_image on goods.id= goods_image.gid')->where($date)->select();
        // var_dump($goodss);die;
       $this->assign('goodss',$goodss);
        $this->display();
    }
}