<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "reservation".
 *
 * @property integer $id
 * @property string $check_in
 * @property string $check_out
 * @property string $type_of_room
 * @property string $adults
 * @property string $kids
 *
 * @property CustomerHasReservation[] $customerHasReservations
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
            [['check_in', 'check_out'], 'safe'],
            [['type_of_room'], 'string', 'max' => 45],
            [['adults', 'kids'], 'string', 'max' => 50],
<<<<<<< HEAD
          /*  [['billingstatement_id'], 'exist', 'skipOnError' => true, 'targetClass' => Billingstatement::className(), 'targetAttribute' => ['billingstatement_id' => 'id']],*/
=======
>>>>>>> origin/master
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'check_in' => 'Check In',
            'check_out' => 'Check Out',
<<<<<<< HEAD
            'rooms' => 'Room Type',
            'adults' => 'Adults',
            'kids' => 'Kids',
            //'billingstatement_id' => 'Billingstatement ID',
=======
            'type_of_room' => 'Type Of Room',
            'adults' => 'Adults',
            'kids' => 'Kids',
>>>>>>> origin/master
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
<<<<<<< HEAD
   /* public function getBillingstatement()
    {
        return $this->hasOne(Billingstatement::className(), ['id' => 'billingstatement_id']);
    }*/

    /**
     * @return \yii\db\ActiveQuery
     */
=======
>>>>>>> origin/master
    public function getReservationHasRooms()
    {
        return $this->hasMany(ReservationHasRoom::className(), ['reservation_id' => 'id']);
    }
}
