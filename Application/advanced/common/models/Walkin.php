<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "walkin".
 *
 * @property integer $id
 * @property string $actual_time_in
 * @property string $actual_time_reserve
 *
 * @property Reservation[] $reservations
 */
class Walkin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'walkin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['actual_time_in', 'actual_time_reserve'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'actual_time_in' => 'Actual Time In',
            'actual_time_reserve' => 'Actual Time Reserve',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservations()
    {
        return $this->hasMany(Reservation::className(), ['walk-in_id' => 'id']);
    }
}
