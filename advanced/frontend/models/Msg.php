<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "msg".
 *
 * @property string $msg_id
 * @property string $content
 * @property integer $u_id
 */
class Msg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'msg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['u_name'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'msg_id' => 'Msg ID',
            'content' => 'Content',
            'u_name' => 'U Name',
        ];
    }
}
