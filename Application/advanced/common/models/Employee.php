<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $name
 * @property string $contact_number
 * @property string $rate
 * @property string $hired_date
 * @property string $department
 * @property string $type
 * @property string $position
 * @property string $email
 * @property string $address
 * @property string $birthday
 * @property integer $manager_id
 * @property integer $regular_id
 *
 * @property Manager $manager
 * @property Regular $regular
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
            [['id', 'manager_id', 'regular_id'], 'required'],
            [['id', 'manager_id', 'regular_id'], 'integer'],
            [['hired_date', 'birthday'], 'safe'],
            [['name', 'department', 'position', 'email', 'address'], 'string', 'max' => 50],
            [['contact_number'], 'string', 'max' => 15],
            [['rate'], 'string', 'max' => 20],
            [['type'], 'string', 'max' => 45],
            [['manager_id'], 'exist', 'skipOnError' => true, 'targetClass' => Manager::className(), 'targetAttribute' => ['manager_id' => 'id']],
            [['regular_id'], 'exist', 'skipOnError' => true, 'targetClass' => Regular::className(), 'targetAttribute' => ['regular_id' => 'id']],
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
            'rate' => 'Rate',
            'hired_date' => 'Hired Date',
            'department' => 'Department',
            'type' => 'Type',
            'position' => 'Position',
            'email' => 'Email',
            'address' => 'Address',
            'birthday' => 'Birthday',
            'manager_id' => 'Manager ID',
            'regular_id' => 'Regular ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManager()
    {
        return $this->hasOne(Manager::className(), ['id' => 'manager_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegular()
    {
        return $this->hasOne(Regular::className(), ['id' => 'regular_id']);
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
