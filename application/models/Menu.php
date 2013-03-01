<?php
class MenuModel extends Db_Base {
    protected $_name = 'menu';
    protected $_primary = 'id';     //表的主键
    protected $_db;
    private   $_table = 'menu';

    /*使用了memcache
    public function ShowAll($cache=true)
    {
      $this->_memcache = Yaf_Registry::get("memcache");
      $this->_mempre = Yaf_Registry::get("mempre");      
      $info = $this->_memcache->get($this->_mempre.'info');
      if(empty($info)||$cache==false){
        $this->_db = $this->getAdapter();
        $select = $this->_db->select();
        $select->from($this->_table)
                   ->where('display = ?','1');
        $info = $this->_db->fetchAll($select);
        $this->_memtimeout = Yaf_Registry::get("memtimeout");
        $this->_memcache->set($this->_mempre.'info',$info,MEMCACHE_COMPRESSED,$this->_memtimeout);
        return $info;  
      }else{
        return $info;
      }
    }
    */

    public function ShowAll($cache=true)
    {
        // $this->_db = $this->getAdapter();
        // $select = $this->_db->select();
        // $select->from($this->_table)
        //            ->where('display = ?','1');
        // $info = $this->_db->fetchAll($select);
        // return $info;
        $this->sql = "select * FROM `{$this->_table}` WHERE `display`='1'";
        return $this->_db->getAll($this->sql);

    }    
}
