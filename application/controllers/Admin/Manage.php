<?php
class Admin_ManageController extends Yaf_Controller_Abstract
{
	private $_layout;
	public function init(){
    	 /*use layout*/
		 $this->_layout = Yaf_Registry::get("layout");
	}

	public function IndexAction()
	{
		$sign = isset($_SESSION['info'])?$_SESSION['info']:"";
		if(empty($sign)){
			header("Location:../admin_login");exit;
		}else{
			$this->_view->info = $sign;
		}
	    /*layout*/
        $this->_layout->meta_title = '系统后台';
		$this->_layout->setLayoutFile('layout.phtml');
	}
}
