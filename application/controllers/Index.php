<?php
class IndexController extends Yaf_Controller_Abstract {

    private $_layout;

    public function init(){
         //使用layout页面布局
         $this->_layout = Yaf_Registry::get('layout');
    }
    /*首页展示*/
    public function indexAction() {
        /*layout*/
        $this->_layout->meta_title = '留言板';
        $this->_layout->setLayoutFile('layout.phtml');
    }
    /*信息插入*/
    public function insertmessageAction(){
    	$name = ($_POST['name'])?htmlspecialchars($_POST['name']):"";
    	$content = ($_POST['content'])?htmlspecialchars($_POST['content']):"";
    	


    	exit;
    }
}
