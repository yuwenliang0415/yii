<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property string $u_id
 * @property string $u_name
 * @property string $u_pwd
 * @property string $price
 * @property string $send_lw
 * @property string $js_lw
 * @property integer $follow
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['follow'], 'integer'],
            [['u_name'], 'string', 'max' => 30],
            [['u_pwd'], 'string', 'max' => 32],
            [['send_lw', 'js_lw'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'u_id' => 'U ID',
            'u_name' => 'U Name',
            'u_pwd' => 'U Pwd',
            'price' => 'Price',
            'send_lw' => 'Send Lw',
            'js_lw' => 'Js Lw',
            'follow' => 'Follow',
        ];
    }
}
