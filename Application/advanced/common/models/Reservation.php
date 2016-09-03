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
 * @property string $type_of_room
 * @property string $number_of_adults
 * @property string $number_of_kids
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
            [['reservation_date', 'check_in', 'check_out', 'type_of_room', 'number_of_adults', 'number_of_kids', 'billingstatement_id'], 'required'],
            [['reservation_date', 'check_in', 'check_out'], 'safe'],
            [['type_of_room', 'number_of_adults', 'number_of_kids'], 'string'],
            [['billingstatement_id'], 'integer'],
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
            'type_of_room' => 'Type Of Room',
            'number_of_adults' => 'Number Of Adults',
            'number_of_kids' => 'Number Of Kids',
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
