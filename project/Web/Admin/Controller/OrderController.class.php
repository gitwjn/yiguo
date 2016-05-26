<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends CommonController {
	//显示订单列表
    public function index(){
        //创建对象
        $order = M('order');

       //获取每页显示的数量
       $num = !empty($_GET['num']) ? $_GET['num'] : 2;

        //获取关键字
        if(!empty($_GET['keyword'])){
            //有关键字
            $where = "name like '%".$_GET['keyword']."%'";
        }else{
            $where = "";
        }

        // 查询满足要求的总记录数
        $count = $order->where($where)->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,$num);
        //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;
        // lover = 0;
         //执行查询
        $orders = $order->where($where)->limit($limit)->select();
        var_dump($orders);
        // 分页显示输出
        $pages = $Page->show();
      
        //分配变量
        $this->assign('orders',$orders);
        $this->assign('pages',$pages);
        //解析模板
        $this->display();
    }
}