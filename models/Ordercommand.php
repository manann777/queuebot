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
}
