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
 * @property integer $cafeId
 * @property string $queueLocation
 * @property string $queueStage
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
}
