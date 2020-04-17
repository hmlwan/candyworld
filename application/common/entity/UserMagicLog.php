<?php
namespace app\common\entity;

use think\Db;
use think\Model;

class UserMagicLog extends Model
{
    protected $table = 'user_magic_log';

    public $autoWriteTimestamp = false;

    const TYPE_SYSTEM = 1; //后台充值
    const TYPE_PRODUCT = 2; //购买魔盒
    const TYPE_ORDER = 3; //交易市场
    const TYPE_REWARD = 4; //直推奖励
    const TYPE_INCOME = 5; //魔盒收益
    const TYPE_SHARE = 6; //联盟分红

    public function getType($type)
    {
        switch ($type) {
            case self::TYPE_SYSTEM:
                return '来自平台';
            case self::TYPE_PRODUCT:
                return '购买晶盒';
            case self::TYPE_ORDER:
                return '交易市场';
            case self::TYPE_REWARD:
                return '直推奖励';
            case self::TYPE_INCOME;
                return '晶盒收益';
            case self::TYPE_SHARE;
                return '联盟分红';

        }
    }


    public static function addInfo($userId, $remark, $magic, $old, $new, $type = self::TYPE_SYSTEM)
    {
        $entity = new self();

        $entity->user_id = $userId;
        $entity->remark = $remark;
        $entity->magic = $magic;
        $entity->old = $old;
        $entity->new = $new;
        $entity->create_time = time();
        $entity->types = $type;

        return $entity->save();
    }

    /**
     * @param User $user
     * @param $data
     * @param int $type 1:添加 -1:减少
     * @return bool
     */
    public function changeUserMagic(\app\common\entity\User $user, $data, $type = 1)
    {
        Db::startTrans();
        try {

            $old = $user->magic;
            if ($type == 1) {
                $user->magic = bcadd($old, $data['magic'], 8);
                $magic = $data['magic'];
            }

            if ($type == -1) {
                $user->magic = bcsub($old, $data['magic'], 8);
                $magic = -1 * $data['magic'];
            }

            if ($user->save() === false) {
                throw new \Exception('保存失败');
            }

            $result = self::addInfo($user->getId(), $data['remark'], $magic, $old, $user->magic, $data['type']);

            if (!$result) {
                throw new \Exception('保存失败');
            }

            Db::commit();

            return true;
        } catch (\Exception $e) {
            Db::rollBack();

            return false;
        }
    }

    //查询账单
    public function magicloglist($type = '', $userId = '', $page = 1, $limit = 20)
    {
        $offset = ($page - 1) * $limit;
        $query = self::where('user_id', $userId)->field('*');
        if ($type == 1) {
            $query->where("magic", "GT", 0);
        } else {
            $query->where("magic", "LT", 0);
        }

        $list = $query->order("create_time desc")->limit($offset, $limit)->select();

        foreach ($list as $key => &$value) {
            $value['types'] = self::getType($value['types']);
        }

        return $list;
    }
}