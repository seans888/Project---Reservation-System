<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "billingstatement".
 *
 * @property integer $id
 * @property string $mode_of_payment
 * @property string $amount
 * @property integer $number
 * @property string $date
 * @property string $status
 * @property integer $employee_id
 * @property integer $customer_id
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
            [['id', 'employee_id', 'customer_id'], 'required'],
            [['id', 'number', 'employee_id', 'customer_id'], 'integer'],
            [['amount'], 'number'],
            [['date'], 'safe'],
            [['mode_of_payment'], 'string', 'max' => 20],
            [['status'], 'string', 'max' => 45],
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
            'number' => 'Number',
            'date' => 'Date',
            'status' => 'Status',
            'employee_id' => 'Employee ID',
            'customer_id' => 'Customer ID',
        ];
    }
}
