<?php
class AdminModel extends Db_Base{

    protected $_name = 'admin';
    protected $_primary = 'id';     
    protected $_db;
    private $_table = "admin";

    /*
     *用户登录判断
     *@param $username,$password
     *return $user_info | false 
     */
    public function login_sign($username,$password)
    {
        $this->sql = "SELECT * FROM `$this->_table` WHERE `username`='{$username}' AND `password`='{$password}'";
        return $this->_db->getRow($this->sql);
    }

    /*
     *所有用户信息显示
     *
     */
    public function show_admins()
    {
        $this->sql = "SELECT * FROM `{$this->_table}` WHERE `is_del`='0'";
        return $this->_db->getAll($this->sql);
    }

    /*
     *添加新用户
     *
     */
    public function insert_admin($data)
    {
        $data['password'] = md5($data['password']);
        $this->_db->insert($this->_table,$data);
        return $this->_db->lastId();
    }

    /*
     *删除用户
     *
     */
    public function del_admin($id){
        $this->sql = "DELETE  FROM `{$this->_table}` WHERE `id`='{$id}'";
        return $this->_db->execute($this->sql);
    }

    /*
     *获取用户信息
     *
     */
    public function get_info($id)
    {   
        $this->sql = "SELECT * FROM `{$this->_table}` WHERE `id`='{$id}'";
        return $this->_db->getRow($this->sql);
    }
    
    /*
     *修改用户信息
     *
     */
    public function update_admin($data,$id)
    {
      $this->where = " `id`='{$id}'";
      return $this->_db->update($this->_table,$data,$this->where);      
    }
}
