<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property string $contact_number
 * @property string $address
 * @property string $email
 *
 * @property Billingstatement[] $billingstatements
 * @property CustomerHasReservation[] $customerHasReservations
 * @property EmployeeAssistCustomer[] $employeeAssistCustomers
 * @property Service[] $services
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['last_name', 'first_name', 'middle_name'], 'string', 'max' => 20],
            [['contact_number'], 'string', 'max' => 15],
            [['address', 'email'], 'string', 'max' => 50],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBillingstatements()
    {
        return $this->hasMany(Billingstatement::className(), ['customer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerHasReservations()
    {
        return $this->hasMany(CustomerHasReservation::className(), ['customer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployeeAssistCustomers()
    {
        return $this->hasMany(EmployeeAssistCustomer::className(), ['customer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['customer_id' => 'id']);
    }
}
