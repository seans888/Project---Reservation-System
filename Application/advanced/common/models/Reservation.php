<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "reservation".
 *
 * @property integer $id
 * @property string $date_reserved
 * @property integer $number_of_days
 * @property string $down_payment
 * @property string $receipt_number
 * @property integer $online_id
 * @property integer $walkin_id
 *
 * @property CustomerHasReservation[] $customerHasReservations
 * @property Online $online
 * @property Walkin $walkin
 * @property ReservationHasRoom[] $reservationHasRooms
 */
class Reservation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reservation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_reserved'], 'safe'],
            [['number_of_days', 'online_id', 'walkin_id'], 'integer'],
            [['online_id', 'walkin_id'], 'required'],
            [['down_payment', 'receipt_number'], 'string', 'max' => 30],
            [['online_id'], 'exist', 'skipOnError' => true, 'targetClass' => Online::className(), 'targetAttribute' => ['online_id' => 'id']],
            [['walkin_id'], 'exist', 'skipOnError' => true, 'targetClass' => Walkin::className(), 'targetAttribute' => ['walkin_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_reserved' => 'Date Reserved',
            'number_of_days' => 'Number Of Days',
            'down_payment' => 'Down Payment',
            'receipt_number' => 'Receipt Number',
            'online_id' => 'Online ID',
            'walkin_id' => 'Walkin ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerHasReservations()
    {
        return $this->hasMany(CustomerHasReservation::className(), ['reservation_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOnline()
    {
        return $this->hasOne(Online::className(), ['id' => 'online_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWalkin()
    {
        return $this->hasOne(Walkin::className(), ['id' => 'walkin_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservationHasRooms()
    {
        return $this->hasMany(ReservationHasRoom::className(), ['reservation_id' => 'id']);
    }
}
