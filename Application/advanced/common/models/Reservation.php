<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "reservation".
 *
 * @property integer $id
 * @property string $reservation_date
 * @property string $check_in
 * @property string $check_out
 * @property string $rooms
 * @property string $adults
 * @property string $kids
 * @property integer $billingstatement_id
 *
 * @property CustomerHasReservation[] $customerHasReservations
 * @property Billingstatement $billingstatement
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
            [['reservation_date', 'check_in', 'check_out'], 'safe'],
            [['billingstatement_id'], 'required'],
            [['billingstatement_id'], 'integer'],
            [['rooms'], 'string', 'max' => 10],
            [['adults', 'kids'], 'string', 'max' => 50],
            [['billingstatement_id'], 'exist', 'skipOnError' => true, 'targetClass' => Billingstatement::className(), 'targetAttribute' => ['billingstatement_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'reservation_date' => 'Reservation Date',
            'check_in' => 'Check In',
            'check_out' => 'Check Out',
            'rooms' => 'Rooms',
            'adults' => 'Adults',
            'kids' => 'Kids',
            'billingstatement_id' => 'Billingstatement ID',
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
    public function getBillingstatement()
    {
        return $this->hasOne(Billingstatement::className(), ['id' => 'billingstatement_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservationHasRooms()
    {
        return $this->hasMany(ReservationHasRoom::className(), ['reservation_id' => 'id']);
    }
}
