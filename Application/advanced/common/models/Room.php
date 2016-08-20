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
 * @property integer $billing statement_id
 *
 * @property ReservationHasRoom[] $reservationHasRooms
 * @property BillingStatement $billingStatement
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
            [['id', 'billing statement_id'], 'required'],
            [['id', 'capacity', 'billing statement_id'], 'integer'],
            [['description'], 'string', 'max' => 50],
            [['type', 'availability'], 'string', 'max' => 45],
            [['rate'], 'string', 'max' => 20],
            [['billing statement_id'], 'exist', 'skipOnError' => true, 'targetClass' => BillingStatement::className(), 'targetAttribute' => ['billing statement_id' => 'id']],
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
        return $this->hasOne(BillingStatement::className(), ['id' => 'billing statement_id']);
    }
}
