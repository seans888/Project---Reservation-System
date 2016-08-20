<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property integer $id
 * @property string $name
 * @property string $cost
 * @property string $service_offered
 * @property string $type_of_service
 * @property integer $employee_id
 * @property integer $customer_id
 * @property integer $billing statement_id
 *
 * @property Customer $customer
 * @property Employee $employee
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
            [['id', 'employee_id', 'customer_id', 'billing statement_id'], 'required'],
            [['id', 'employee_id', 'customer_id', 'billing statement_id'], 'integer'],
            [['name'], 'string', 'max' => 30],
            [['cost', 'service_offered', 'type_of_service'], 'string', 'max' => 45],
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
            'name' => 'Name',
            'cost' => 'Cost',
            'service_offered' => 'Service Offered',
            'type_of_service' => 'Type Of Service',
            'employee_id' => 'Employee ID',
            'customer_id' => 'Customer ID',
            'billing statement_id' => 'Billing Statement ID',
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
}
