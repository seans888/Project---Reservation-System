<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property integer $id
 * @property string $name
 * @property string $cost
 * @property integer $employee_id
 * @property integer $customer_id
 * @property integer $billingStatement_id
 * @property integer $room_id
 *
 * @property Billingstatement $billingStatement
 * @property Customer $customer
 * @property Employee $employee
 * @property Room $room
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'customer_id', 'billingStatement_id', 'room_id'], 'required'],
            [['employee_id', 'customer_id', 'billingStatement_id', 'room_id'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['cost'], 'string', 'max' => 45],
            [['billingStatement_id'], 'exist', 'skipOnError' => true, 'targetClass' => Billingstatement::className(), 'targetAttribute' => ['billingStatement_id' => 'id']],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'id']],
            [['employee_id'], 'exist', 'skipOnError' => true, 'targetClass' => Employee::className(), 'targetAttribute' => ['employee_id' => 'id']],
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
            'name' => 'Name',
            'cost' => 'Cost',
            'employee_id' => 'Employee ID',
            'customer_id' => 'Customer ID',
            'billingStatement_id' => 'Billing Statement ID',
            'room_id' => 'Room ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBillingStatement()
    {
        return $this->hasOne(Billingstatement::className(), ['id' => 'billingStatement_id']);
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
    public function getRoom()
    {
        return $this->hasOne(Room::className(), ['id' => 'room_id']);
    }
}
