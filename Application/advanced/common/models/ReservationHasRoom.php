<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "reservation_has_room".
 *
 * @property integer $id
 * @property string $reservation_start_date
 * @property string $reservation_end_date
 * @property integer $reservation_id
 * @property integer $room_id
 *
 * @property Reservation $reservation
 * @property Room $room
 */
class ReservationHasRoom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reservation_has_room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reservation_start_date', 'reservation_end_date'], 'safe'],
            [['reservation_id', 'room_id'], 'required'],
            [['reservation_id', 'room_id'], 'integer'],
            [['reservation_id'], 'exist', 'skipOnError' => true, 'targetClass' => Reservation::className(), 'targetAttribute' => ['reservation_id' => 'id']],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['room_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'reservation_start_date' => 'Reservation Start Date',
            'reservation_end_date' => 'Reservation End Date',
            'reservation_id' => 'Reservation ID',
            'room_id' => 'Room ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservation()
    {
        return $this->hasOne(Reservation::className(), ['id' => 'reservation_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }
}
