<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cafedetail".
 *
 * @property string $cafeId
 * @property string $cafeName
 * @property string $cafeDetail
 * @property string $cafeTime
 * @property string $cafeComment
 *
 * @property Ordercommand[] $ordercommands
 * @property Queuetable[] $queuetables
 */
class Cafedetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cafedetail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cafeName', 'cafeDetail', 'cafeTime'], 'required'],
            [['cafeDetail', 'cafeTime', 'cafeComment'], 'string'],
            [['cafeName'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cafeId' => 'เลขประจำร้าน',
            'cafeName' => 'ชื่อร้าน',
            'cafeDetail' => 'รายละเอียด',
            'cafeTime' => 'เวลาเปิดปิดjson',
            'cafeComment' => 'หมายเหตุ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrdercommands()
    {
        return $this->hasMany(Ordercommand::className(), ['cafeId' => 'cafeId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQueuetables()
    {
        return $this->hasMany(Queuetable::className(), ['cafeId' => 'cafeId']);
    }
}
