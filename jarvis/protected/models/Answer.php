<?php

class Answer extends CActiveRecord

{

	public $acontent;
	public $anum;
	public $auser;
	public $alike;
	public $atime;


	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function tableName()
    {
        return 'answer';
    }	
}