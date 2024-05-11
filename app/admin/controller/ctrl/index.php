<?php

// +----------------------------------------------------------------------
// | EasyAdmin
// +----------------------------------------------------------------------
// | PHP交流群: 763822524
// +----------------------------------------------------------------------
// | 开源协议  https://mit-license.org 
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zhongshaofa/EasyAdmin
// +----------------------------------------------------------------------

namespace app\admin\controller\ctrl;



use app\admin\model\Group;
use app\admin\model\Attribute;
use app\admin\model\Ctrl;
use app\admin\service\TriggerService;
use app\common\constants\AdminConstant;
use app\common\controller\AdminController;
use EasyAdmin\annotation\ControllerAnnotation;
use EasyAdmin\annotation\NodeAnotation;
use think\App;
use think\facade\Db;
use think\facade\Env;
use MongoDB\BSON\UTCDateTime;
/**
 * Class Admin
 * @package app\admin\controller\system
 * @ControllerAnnotation(title="管理员管理")
 */
class Index extends AdminController
{

    use \app\admin\traits\Curd;

    protected $sort = [
        'sort' => 'desc',
        'id'   => 'desc',
    ];

    public function __construct(App $app)
    {
        parent::__construct($app);
        $this->model = new Ctrl();
        $this->assign('auth_list', $this->model->getAuthList());
    }

    /**
     * @NodeAnotation(title="列表")
     */
    public function index()
    {
        $mongoData = $this->model->select();
        print_r( $mongoData );die();
    }


}
