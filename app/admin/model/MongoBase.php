<?php



namespace app\admin\model;


use think\Model\MongoModel;

class MongoBase extends MongoModel
{

    // 设置当前模型连接的数据库
    protected $connection = 'mongo';
}