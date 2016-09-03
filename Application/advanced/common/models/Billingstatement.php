<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "billingstatement".
 *
 * @property integer $id
 * @property string $mode_of_payment
 * @property string $amount
 * @property string $date_of_payment
 * @property string $status
 * @property integer $employee_id
 * @property integer $customer_id
 *
 * @property Customer $customer
 * @property Employee $employee
 * @property Reservation[] $reservations
 * @property Room[] $rooms
 * @property Service[] $services
 */
class Billingstatement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'billingstatement';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mode_of_payment', 'amount', 'date_of_payment', 'status', 'employee_id', 'customer_id'], 'required'],
            [['mode_of_payment', 'status'], 'string'],
            [['amount'], 'number'],
            [['date_of_payment'], 'safe'],
            [['employee_id', 'customer_id'], 'integer'],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'id']],
            [['employee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['employee_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mode_of_payment' => 'Mode Of Payment',
            'amount' => 'Amount',
            'date_of_payment' => 'Date Of Payment',
            'status' => 'Status',
            'employee_id' => 'Employee ID',
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
    public function getEmployee()
    {
        return $this->hasOne(Employee::className(), ['id' => 'employee_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReservations()
    {
        return $this->hasMany(Reservation::className(), ['billingstatement_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRooms()
    {
        return $this->hasMany(Room::className(), ['billing statement_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['billingStatement_id' => 'id']);
    }
}
