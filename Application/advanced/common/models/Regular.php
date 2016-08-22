<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "regular".
 *
 * @property integer $id
 * @property string $salary
 * @property string $status
 * @property string $classification
 * @property string $nature_of_service
 *
 * @property Employee[] $employees
 */
class Regular extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'regular';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['salary'], 'number'],
            [['status'], 'string', 'max' => 50],
            [['classification'], 'string', 'max' => 45],
            [['nature_of_service'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'salary' => 'Salary',
            'status' => 'Status',
            'classification' => 'Classification',
            'nature_of_service' => 'Nature Of Service',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Employee::className(), ['regular_id' => 'id']);
    }
}
