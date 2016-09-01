<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property integer $id
 * @property string $type
 * @property string $rate
 * @property integer $capacity
 * @property string $availability
 * @property integer $billing statement_id
 *
 * @property ReservationHasRoom[] $reservationHasRooms
 * @property Billingstatement $billingStatement
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
            [['capacity', 'billing statement_id'], 'integer'],
            [['billing statement_id'], 'required'],
            [['type', 'availability'], 'string', 'max' => 45],
            [['rate'], 'string', 'max' => 20],
            [['billing statement_id'], 'exist', 'skipOnError' => true, 'targetClass' => Billingstatement::className(), 'targetAttribute' => ['billing statement_id' => 'id']],
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
            'billing statement_id' => 'Billing Statement ID',
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
    public function getBillingStatement()
    {
        return $this->hasOne(Billingstatement::className(), ['id' => 'billing statement_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['room_id' => 'id']);
    }
}
