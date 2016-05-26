<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends CommonController {

	public function CreateVcode(){
		$Verify = new \Think\Verify();
		$Verify->entry();
	}


}