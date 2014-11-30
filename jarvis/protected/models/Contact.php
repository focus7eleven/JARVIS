<?php

class Contact extends CActiveRecord
{
	public $username;

	public $password;

	public $head;

	public $qNum;

	public $aNum;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function tableName()
    {
        return 'user';
    }

    public function attributeLabels()
    {
        return array(
            'username' => 'Username',
            'password' => 'Password',
            'head' => 'Portrait',
            'qNum' => 'Questions',
            'aNum' => 'Answers'
        );
    }

    /**
     * Checks if the given password is correct.
     * @param string the password to be validated
     * @return boolean whether the password is valid
     */
    public function validatePassword($password)
    {
        return $password==$this->password;
        //return CPasswordHelper::verifyPassword($password,$this->password);
    }
}