<?php
declare (strict_types = 1);

namespace app\model;

use think\Model;

/**
 * @property int $id
 * @property string $create_time 安装时间
 * @property string $key 键
 * @property string $update_time 更新时间
 * @property string $value 值
 * @mixin \think\Model
 */
class Config extends Model
{
    //
    public static function all()
    {
        $configs = Config::select();
        return $configs;
    }

    public static function getByKey($key)
    {
        $model = Config::where('key', $key)->cache(60)->findOrEmpty();
        return $model;
    }
}
