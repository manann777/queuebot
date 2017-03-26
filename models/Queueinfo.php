<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "queueinfo".
 *
 * @property integer $queueId
 * @property integer $queueNumber
 * @property string $orderId
 * @property integer $orderQty
 * @property double $orderPricesum
 * @property string $queueComment
 *
 * @property Ordercommand $order
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
            [['orderId'], 'exist', 'skipOnError' => true, 'targetClass' => Ordercommand::className(), 'targetAttribute' => ['orderId' => 'orderId']],
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Ordercommand::className(), ['orderId' => 'orderId']);
    }
}
