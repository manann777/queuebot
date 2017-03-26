<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ordercommand".
 *
 * @property string $orderId
 * @property string $orderMenu
 * @property double $orderPrice
 * @property string $orderCommand
 * @property string $cafeId
 *
 * @property Cafedetail $cafe
 * @property Queueinfo[] $queueinfos
 */
class Ordercommand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ordercommand';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['orderMenu', 'orderPrice', 'orderCommand', 'cafeId'], 'required'],
            [['orderPrice'], 'number'],
            [['cafeId'], 'integer'],
            [['orderMenu', 'orderCommand'], 'string', 'max' => 100],
            [['cafeId'], 'exist', 'skipOnError' => true, 'targetClass' => Cafedetail::className(), 'targetAttribute' => ['cafeId' => 'cafeId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'orderId' => 'เลขรายการอาหาร',
            'orderMenu' => 'ชื่ออาหาร',
            'orderPrice' => 'ราคาอาหาร',
            'orderCommand' => 'คำสั่ง',
            'cafeId' => 'เลขประจำร้าน',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCafe()
    {
        return $this->hasOne(Cafedetail::className(), ['cafeId' => 'cafeId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQueueinfos()
    {
        return $this->hasMany(Queueinfo::className(), ['orderId' => 'orderId']);
    }
}
