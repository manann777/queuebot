<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userinfo".
 *
 * @property string $userId
 * @property string $userName
 * @property string $userIdline
 * @property string $userComment
 * @property integer $userStage
 *
 * @property Queuetable[] $queuetables
 */
class Userinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userName', 'userIdline', 'userStage'], 'required'],
            [['userStage'], 'integer'],
            [['userName'], 'string', 'max' => 50],
            [['userIdline'], 'string', 'max' => 40],
            [['userComment'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userId' => 'เลขประจำผู้ใช้',
            'userName' => 'ชื่อผู้ใช้',
            'userIdline' => 'useridline',
            'userComment' => 'หมายเหตุ',
            'userStage' => 'stage',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQueuetables()
    {
        return $this->hasMany(Queuetable::className(), ['userId' => 'userId']);
    }
}
