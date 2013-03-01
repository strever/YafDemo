<?php
class Admin_MenuController extends Yaf_Controller_Abstract
{
	private $_layout;
    public function init(){
		$sign = isset($_SESSION['info'])?$_SESSION['info']:"";
		if(empty($sign)){
			header("Location:/admin_login");exit;
		}     	
    	 /*use layout*/
		$this->_layout = Yaf_Registry::get("layout");

    }		
	public function IndexAction()
	{		
		$menu = new MenuModel();
		$this->_view->menus =  $menu->ShowAll(false);
		/*layout*/
        $this->_layout->meta_title = '目录列表';
		$this->_layout->setLayoutFile('layout.phtml');
	}
}