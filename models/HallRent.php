<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hall_rent".
 *
 * @property int $id
 * @property string $customer_name
 * @property string $email
 * @property string $phone_number
 * @property string $preferences
 * @property string $application_date
 */
class HallRent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hall_rent';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_name', 'email', 'phone_number', 'application_date'], 'required'],
            [['preferences'], 'string'],
            [['application_date'], 'safe'],
            [['customer_name', 'email'], 'string', 'max' => 255],
			['phone_number', 'string', 'length' => [5, 20]],
			['email', 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_name' => 'Ваше имя',
            'email' => 'Email',
            'phone_number' => 'Телефон',
            'preferences' => 'Предпочтения',
            'application_date' => 'Дата подачи заявки',
        ];
    }
}
