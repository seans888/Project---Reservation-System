<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property integer $id
 * @property string $description
 * @property string $type
 * @property string $rate
 * @property integer $capacity
 * @property string $availability
 * @property integer $billingstatement_id
 *
 * @property ReservationHasRoom[] $reservationHasRooms
 * @property Billingstatement $billingStatement
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
            [['capacity', 'billingstatement_id'], 'integer'],
            [['billingstatement_id'], 'required'],
            [['description'], 'string', 'max' => 50],
            [['type', 'availability'], 'string', 'max' => 45],
            [['rate'], 'string', 'max' => 20],
            [['billing statement_id'], 'exist', 'skipOnError' => true, 'targetClass' => Billingstatement::className(), 'targetAttribute' => ['billingstatement_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'type' => 'Type',
            'rate' => 'Rate',
            'capacity' => 'Capacity',
            'availability' => 'Availability',
            'billingstatement_id' => 'Billing Statement ID',
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
        return $this->hasOne(Billingstatement::className(), ['id' => 'billingstatement_id']);
    }
}
