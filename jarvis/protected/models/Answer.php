<?php

class Answer extends CActiveRecord

{

	public $acontent;
	public $anum;
	public $qnum;
	public $auser;
	public $alike;
	public $atime;
	public $isPicked;


	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function tableName()
    {
        return 'answer';
    }	
}