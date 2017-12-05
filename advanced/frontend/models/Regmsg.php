<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "regmsg".
 *
 * @property string $p_id
 * @property string $phone
 * @property string $pwd
 */
class Regmsg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'regmsg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone'], 'string', 'max' => 30],
            [['pwd'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'p_id' => 'P ID',
            'phone' => 'Phone',
            'pwd' => 'Pwd',
        ];
    }
}
