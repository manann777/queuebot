<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "queueinfo".
 *
 * @property integer $queueId
 * @property integer $queueNumber
 * @property integer $orderId
 * @property integer $orderQty
 * @property double $orderPricesum
 * @property string $queueComment
 */
class Queueinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'queueinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['queueId', 'queueNumber', 'orderId', 'orderQty', 'orderPricesum'], 'required'],
            [['queueId', 'queueNumber', 'orderId', 'orderQty'], 'integer'],
            [['orderPricesum'], 'number'],
            [['queueComment'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'queueId' => 'เลขคิว',
            'queueNumber' => 'ลำดับคิวในแต่ละวัน',
            'orderId' => 'เลขรายการอาหาร',
            'orderQty' => 'จำนวนอาหาร',
            'orderPricesum' => 'ราคารวมแต่ละออเดอร์',
            'queueComment' => 'หมายเหตุ',
        ];
    }
}
