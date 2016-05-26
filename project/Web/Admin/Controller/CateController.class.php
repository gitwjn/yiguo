<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends CommonController {
        //显示分类列表
    public function index(){

        $cate=M('cate');
        // var_dump($_GET);

         //获取每页显示的数量
       $num = !empty($_GET['num']) ? $_GET['num'] : 10;

        //获取关键字
        if(!empty($_GET['keyword'])){
            //有关键字
            $where = "name like '%".$_GET['keyword']."%'";
        }else{
            $where = '';
        }


        // 查询满足要求的总记录数
        $count = $cate->where($where)->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $Page = new \Think\Page($count,$num);
        //获取limit参数
        $limit = $Page->firstRow.','.$Page->listRows;

         //执行查询
        $cates = $cate->where($where)->order('concat(path,id) asc')->limit($limit)->select();

        // 分页显示输出
        $pages = $Page->show();

        // 遍历
        foreach ($cates as $k => $v) {
            $c =count(explode(',',$v['path']))-2;
            $cates[$k]['name'] =str_repeat('|----',$c).$v['name'];
        }

        $this->assign('cates',$cates);
        $this->assign('pages',$pages);
        $this->display();
    }
    //显示分类添加页面
    public function add(){
        //创建对象
        $cate = M('cate');
        $cates=$cate->select();
        // var_dump($cates);
        // 分配变量
        $this->assign('cates',$cates);
        $this->display();
    }
    //处理分类的数据添加
    public function insert(){
        // var_dump($_POST);die;

        //创建表对象
        $cate = M('cate');
        //针对path字段进行获取
        //检查是否为顶级分类
        if($_POST['pid'] == 0){
            $_POST['path'] = '0,';
        }else{
            //查找父级分类的信息
            $info = $cate->where('id = '.$_POST['pid'])->find();
            // var_dump($info);
            $_POST['path'] = $info['path'].$info['id'].',';
        }
        // var_dump($_POST);
        
        //创建数据
        $cate->create();

        if($cate->add()){
            $this->success('添加成功',U('Admin/Cate/index'),3);
        }else{
            $this->error('添加失败');
        }
    }
    public function save(){
        
         $id = I('get.id');
        //创建表对象
        $cate = M('cate');
        //获取所有分类
        $cates = $cate->select();
        // var_dump($cates);die;

        //查询当前分类的数据
        $info = $cate->find($id);
        // var_dump($info);die;
    
        //分配变量
        $this->assign('info',$info);
        $this->assign('cates',$cates);

        //解析模板
        $this->display();
    }
    public function update(){
        $cate = M('cate');

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

            //获取原来图片的路径
            $res = $cate->find($_POST['id']);
            $pic = $res['pic'];
            // var_dump($pic);die;
            //删除图片
            unlink('.'.$pic);
        }
         //针对path字段进行获取
        //检查是否为顶级分类
        if($_POST['pid'] == 0){
            $_POST['path'] = '0,';
        }else{
            //查找父级分类的信息
            $info = $cate->where('id = '.$_POST['pid'])->find();
            // var_dump($info);
            $_POST['path'] = $info['path'].$info['id'].',';
        }
        // var_dump($_POST);die;
        

        //创建数据
        $res = $cate->create();
        //执行修改
       $res =  $cate->save();
       // var_dump($res);
        //执行添加
       if($res){
             //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('更新成功', U('Admin/cate/index'),3);
       }else{
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('更新失败');
       }

    }
    public function ajaxdel(){
        // var_dump($_GET);
        //创建表对象
        $cate = M('cate');
        //获取id
        $id = $_GET['id'];
        //执行删除
        $res = $cate->delete($id);

        // 向ajax返回数据
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function ajaxedit(){
        $cate=M('cate');
        $res =$cate->save($_POST);

        if($res){
            echo 1;
        }else{
            echo 0;
        }

    }
}