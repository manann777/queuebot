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
}
