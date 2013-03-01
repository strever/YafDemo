<?php
class LoginModel extends Zend_Db_Adapter_Abstract {
    protected $_name = 'admin';
    protected $_primary = 'id';     //表的主键
    protected $_db;
}
