<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "field".
 *
 * @property string $id
 * @property string $zd_name
 * @property string $zd_type
 * @property integer $status
 * @property string $yz
 * @property string $xz
 * @property string $zd_val
 */
class Field extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'field';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['zd_name', 'zd_type', 'yz', 'xz', 'zd_val'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'zd_name' => 'Zd Name',
            'zd_type' => 'Zd Type',
            'status' => 'Status',
            'yz' => 'Yz',
            'xz' => 'Xz',
            'zd_val' => 'Zd Val',
        ];
    }
}
