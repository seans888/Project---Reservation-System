<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $id
 * @property string $name
 * @property string $contact_number
 * @property string $address
 * @property string $birthday
 * @property string $email
 *
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
            [['id'], 'required'],
            [['id'], 'integer'],
            [['birthday'], 'safe'],
            [['name', 'address', 'email'], 'string', 'max' => 50],
            [['contact_number'], 'string', 'max' => 15],
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
            'contact_number' => 'Contact Number',
            'address' => 'Address',
            'birthday' => 'Birthday',
            'email' => 'Email',
        ];
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
