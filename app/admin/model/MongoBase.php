<?php



namespace app\admin\model;


use think\Model;

class MongoBase extends Model
{

    // 设置当前模型连接的数据库
    protected $connection = 'mongo';
}