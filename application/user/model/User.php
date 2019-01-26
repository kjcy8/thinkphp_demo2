<?php

namespace app\user\model;

use think\Model;

class User extends Model
{
    // 定义表名
    protected $table = 'users';

    // 定义运行操作的字段, 入库时过滤掉危险字段
    protected $field = ['name', 'email', 'password', 'avator'];
    
    // 自定时间戳字段名
    protected $createTime = 'created_at';
    protected $updateTime = 'updated_at';

    // 密码加密
    public function setPasswordAttr($value)
    {
        return password_hash($value, PASSWORD_DEFAULT);
    }

    // email 转小写
    public function setEmailAttr($value)
    {
        return strtolower($value);
    }
}
