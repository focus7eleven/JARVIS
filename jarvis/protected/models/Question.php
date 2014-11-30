<?php

class Question extends CActiveRecord
{	
	public $qname;
	public $qtag;
	public $qcontent;
	public $quser;
	public $qlike;
	public $qnum; 
	public $qpic;
	public $qans;
	public $qtime;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function tableName()
    {
        return 'question';
    }
}