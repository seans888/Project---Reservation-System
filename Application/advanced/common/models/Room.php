<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property integer $id
 * @property string $type
 * @property string $rate
 * @property string $capacity
 * @property string $availability
 * @property integer $billingstatement_id
 *
 * @property ReservationHasRoom[] $reservationHasRooms
 * @property Billingstatement $billingstatement
 * @property Service[] $services
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'rate', 'capacity', 'availability', 'billingstatement_id'], 'required'],
            [['type', 'capacity', 'availability'], 'string'],
            [['billingstatement_id'], 'integer'],
            [['rate'], 'string', 'max' => 20],
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
            'type' => 'Type',
            'rate' => 'Rate',
            'capacity' => 'Capacity',
            'availability' => 'Availability',
            'billingstatement_id' => 'Billingstatement ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservationHasRooms()
    {
        return $this->hasMany(ReservationHasRoom::className(), ['room_id' => 'id']);
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
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['room_id' => 'id']);
    }
}
