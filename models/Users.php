<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "User".
 *
 * @property integer $id
 * @property string $name
 * @property string $gender
 * @property string $birth_date
 * @property string $email
 * @property string $login
 * @property string $password
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'User';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'gender', 'birth_date', 'email', 'login', 'password'], 'required'],
            [['birth_date'], 'safe'],
            [['name', 'email'], 'string', 'max' => 50],
            [['gender'], 'string', 'max' => 2],
            [['login', 'password'], 'string', 'max' => 40],
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
            'gender' => 'Gender',
            'birth_date' => 'Birth Date',
            'email' => 'Email',
            'login' => 'Login',
            'password' => 'Password',
        ];
    }
}
