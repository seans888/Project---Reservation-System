<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "online".
 *
 * @property integer $id
 * @property string $actual_access_date
 * @property string $actual_reserve_date
 *
 * @property Reservation[] $reservations
 */
class Online extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'online';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['actual_access_date', 'actual_reserve_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'actual_access_date' => 'Actual Access Date',
            'actual_reserve_date' => 'Actual Reserve Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservations()
    {
        return $this->hasMany(Reservation::className(), ['online_id' => 'id']);
    }
}
