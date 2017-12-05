<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usermsg".
 *
 * @property string $u_id
 * @property string $u_name
 * @property string $u_sr
 * @property string $u_dz
 * @property integer $p_id
 */
class Usermsg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usermsg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['p_id'], 'integer'],
            [['u_name', 'u_sr'], 'string', 'max' => 30],
            [['u_dz'], 'string', 'max' => 40],
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
            'u_sr' => 'U Sr',
            'u_dz' => 'U Dz',
            'p_id' => 'P ID',
        ];
    }
}
