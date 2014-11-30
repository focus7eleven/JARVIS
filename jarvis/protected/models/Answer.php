<?php

class Answer entends CActiveRecord

{

	public $acontent;
	public $anum;
	public $auser;
	public $like;


	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function tableName()
    {
        return 'answer';
    }	
}