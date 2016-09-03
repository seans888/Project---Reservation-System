<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "customer_has_reservation".
 *
 * @property integer $id
 * @property string $date_of_arrival
 * @property string $date_of_departure
 * @property string $desired_room_type
 * @property string $requests
 * @property integer $reservation_id
 * @property integer $customer_id
 *
 * @property Customer $customer
 * @property Reservation $reservation
 */
class CustomerHasReservation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer_has_reservation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_of_arrival', 'date_of_departure', 'desired_room_type', 'reservation_id', 'customer_id'], 'required'],
            [['date_of_arrival', 'date_of_departure'], 'safe'],
            [['reservation_id', 'customer_id'], 'integer'],
            [['desired_room_type'], 'string', 'max' => 20],
            [['requests'], 'string', 'max' => 50],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'id']],
            [['reservation_id'], 'exist', 'skipOnError' => true, 'targetClass' => Reservation::className(), 'targetAttribute' => ['reservation_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_of_arrival' => 'Date Of Arrival',
            'date_of_departure' => 'Date Of Departure',
            'desired_room_type' => 'Desired Room Type',
            'requests' => 'Requests',
            'reservation_id' => 'Reservation ID',
            'customer_id' => 'Customer ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservation()
    {
        return $this->hasOne(Reservation::className(), ['id' => 'reservation_id']);
    }
}
