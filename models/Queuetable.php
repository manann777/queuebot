<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "queuetable".
 *
 * @property integer $queueId
 * @property integer $queueNumber
 * @property string $userId
 * @property string $queueDatetime
 * @property string $cafeId
 * @property string $queueLocation
 * @property string $queueStage
 *
 * @property Userinfo $user
 * @property Cafedetail $cafe
 */
class Queuetable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'queuetable';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['queueNumber', 'userId', 'queueDatetime', 'cafeId', 'queueStage'], 'required'],
            [['queueNumber', 'userId', 'cafeId'], 'integer'],
            [['queueDatetime'], 'safe'],
            [['queueStage'], 'string'],
            [['queueLocation'], 'string', 'max' => 100],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => Userinfo::className(), 'targetAttribute' => ['userId' => 'userId']],
            [['cafeId'], 'exist', 'skipOnError' => true, 'targetClass' => Cafedetail::className(), 'targetAttribute' => ['cafeId' => 'cafeId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'queueId' => 'เลขคิว',
            'queueNumber' => 'ลำดับคิว',
            'userId' => 'เลขผู้ใช้',
            'queueDatetime' => 'เวลาในคิว',
            'cafeId' => 'เลขร้าน',
            'queueLocation' => 'โต๊ะหรือจุดจ่าย',
            'queueStage' => 'ลำดับ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Userinfo::className(), ['userId' => 'userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCafe()
    {
        return $this->hasOne(Cafedetail::className(), ['cafeId' => 'cafeId']);
    }
}
