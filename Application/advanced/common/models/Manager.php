<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "manager".
 *
 * @property integer $id
 * @property integer $admin_id
 * @property string $username
 * @property string $access_date
 *
 * @property Employee[] $employees
 */
class Manager extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'manager';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_id'], 'integer'],
            [['access_date'], 'safe'],
            [['username'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'admin_id' => 'Admin ID',
            'username' => 'Username',
            'access_date' => 'Access Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Employee::className(), ['manager_id' => 'id']);
    }
}
