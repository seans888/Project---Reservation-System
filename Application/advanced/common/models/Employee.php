<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property string $contact_number
 * @property string $address
 * @property string $email
 * @property string $hired_date
 * @property string $rate
 * @property string $type
 * @property string $department
 * @property string $position
 *
 * @property Billingstatement[] $billingstatements
 * @property EmployeeAssistCustomer[] $employeeAssistCustomers
 * @property Service[] $services
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['last_name', 'first_name', 'address', 'email', 'hired_date', 'rate', 'type', 'position'], 'required'],
            [['hired_date'], 'safe'],
            [['type', 'position'], 'string'],
            [['last_name', 'first_name', 'middle_name', 'rate'], 'string', 'max' => 20],
            [['contact_number'], 'string', 'max' => 15],
            [['address', 'email', 'department'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'last_name' => 'Last Name',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'contact_number' => 'Contact Number',
            'address' => 'Address',
            'email' => 'Email',
            'hired_date' => 'Hired Date',
            'rate' => 'Rate',
            'type' => 'Type',
            'department' => 'Department',
            'position' => 'Position',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBillingstatements()
    {
        return $this->hasMany(Billingstatement::className(), ['employee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployeeAssistCustomers()
    {
        return $this->hasMany(EmployeeAssistCustomer::className(), ['employee_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['employee_id' => 'id']);
    }
}
