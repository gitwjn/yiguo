<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends CommonController {
	//显示商品列表
    public function index(){
        //创建对象
        $goods = M('goods');
        $cate = M('cate');

       //获取每页显示的数量
       $num = !empty($_GET['num']) ? $_GET['num'] : 2;


        //获取关键字
        if(!empty($_GET['keyword'])){
            //有关键字
            $where = "lover = 0 AND title like '%".$_GET['keyword']."%'";
        }else{
            $where = "lover = 0";
        }

        // 查询满足要求的总记录数
        $count = $goods->join('left join goods_image on goods.id= goods_image.gid')->where($where)->select();
        // echo $goods->_sql();
        $count = count($count);
        // die;
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,$num);
        //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;
        // lover = 0;
         //执行查询
        $goodss = $goods->join('left join goods_image on goods.id= goods_image.gid')->where($where)->limit($limit)->select();
        // var_dump($goodss);
        // 分页显示输出
        $pages = $Page->show();
      
        foreach ($goodss as $k => $v) {
          
        $goodss[$k]['content']= htmlspecialchars_decode($goodss[$k]['content']);
        }

        //执行查询
        $cates = $cate->order('concat(path,id) asc')->select();

        //遍历
        foreach ($cates as $k => $v) {
            //获取要添加|---个数
            $c = count(explode(',',$v['path']))-2;
            $cates[$k]['name'] = str_repeat('|----',$c).$v['name'];
        }

        //分配变量
        $this->assign('goodss',$goodss);
        $this->assign('cates',$cates);
        $this->assign('pages',$pages);
    	//解析模板
    	$this->display();
    }

    //显示商品的添加页面
    public function add(){
        
        //创建对象
        $cate = M('cate');
        $goods = M('goods');
        //查询所有分类

       //查询所有分类

        $res = $goods->find(4);
        // var_dump($res);
        // echo '<hr>';
        // echo $res['content'];

         //执行查询
        $cates = $cate->order('concat(path,id) asc')->select();

        //遍历
        foreach ($cates as $k => $v) {
            //获取要添加|---个数
            $c = count(explode(',',$v['path']))-2;
            $cates[$k]['name'] = str_repeat('|----',$c).$v['name'];

        }
        //分配变量
        $this->assign('cates',$cates);
        $this->assign('res',$res);


        //解析模板
        $this->display();
    }

    //处理商品的数据添加
    public function insert(){
        Uploads('pic');
        // var_dump($_POST);
        // die;
        //创建表对象
        // $goods = M('goods');
        // var_dump($_POST);die;
        $goods = D('goods');
        //创建数据
        if(!$goods->create()){
            //获取错误信息
            $info = $goods->getError();
            $this->error($info);
        }  
        $id=$goods->add();
        $goods_image = M('goods_image');

        $_POST['gid'] = $id;

        $goods_image->create();
        // var_dump($_POST);die;

        //执行添加
       if($goods_image->add()){
             //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('新增成功', U('Admin/goods/index'),3);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('新增失败');
       }

    }
    //商品的修改
    public function save(){
        $id = I('get.id');
        //创建表对象
        $goods = M('goods');

        //查询当前商品的数据
        $res =$goods->join('left join goods_image on goods.id = goods_image.gid and goods.id='.$id)->where('goods.id='.$id)->select();
        // var_dump($res);

        $info = $res[0];  
        $info['content']= htmlspecialchars_decode($info['content']);
        $cate = M('cate');

        //执行查询
        $cates = $cate->order('concat(path,id) asc')->select();

        //遍历
        foreach ($cates as $k => $v) {
            //获取要添加|---个数
            $c = count(explode(',',$v['path']))-2;
            $cates[$k]['name'] = str_repeat('|----',$c).$v['name'];

        }
        // var_dump($info);
        //分配变量
        $this->assign('info',$info);
        $this->assign('cates',$cates);
        $this ->assign('gid',$gid);
        //解析模板
        $this->display();
    }

    //商品图片的是否封面
    public function img(){
        $id = $_GET['gid'];
        $goods =M('goods');
        $gres = $goods->select($id);
        $title =$gres[0]['title'];
        $goodimg =M('goods_image');
        $res = $goodimg->where("gid = '".$id."'")->select();
        $gid = $res[0]['gid'];
        //分配变量
        $this->assign('res',$res);
        $this->assign('gid',$gid);
        $this->assign('title',$title);

        //解析模板
        $this->display();
    }

    //处理商品的图片添加
    public function imginsert(){
        // var_dump($_POST);die;
        $id =$_POST['gid'];
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
        //创建表对象
        $goodsimg = M('goods_image');
        $res = $goodsimg->create();
        $res = $goodsimg->add();
        if($res){
        // var_dump(get_defined_constants(true));
        header('Location:'.__CONTROLLER__.'/img/gid/'.$id);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('添加失败');
       }

    }
    public function imgswfm(){
        var_dump($_GET);
        $goodsimg = M('goods_image');
        $gid = $_GET['gid'];
        $id = $_GET['id'];
        $res = $goodsimg->where('gid='.$gid)->select();
        //创建数据
        $ress = $goodsimg->create();
        //执行修改
        $data['lover'] = 1;
        $date['lover'] = 0;

       $ress =  $goodsimg->where(array('gid'=>$gid))->save($data);
       $ress =  $goodsimg->where(array('id'=>$id))->save($date);
        if($ress){
        // var_dump(get_defined_constants(true));
        header('Location:'.__CONTROLLER__.'/img/gid/'.$gid);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('更新失败');
       }
    }

    //执行修改
    public function update(){
     
         //创建数据表对象
        
        $goods = M('goods');

        //创建数据
        $res = $goods->create();
        //执行修改
        $res =  $goods->save(); 
        //执行添加
       if($res){
             //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('更新成功', U('Admin/goods/index'),3);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('更新失败');
       }
    }
public function ajaxdel(){
        // var_dump($_GET);die;
        //创建表对象
        $goodsimg = M('goods_image');
        //获取id
        $id = $_GET['id'];
        // var_dump($id);
        // die;
        //执行删除
        $res = $goodsimg->where('id = "'.$id.'"')->delete();
        // echo $goodsimg->_sql();
        // die;
        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
}