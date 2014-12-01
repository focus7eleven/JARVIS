<?php

class QuestionLike extends CActiveRecord
{	
	public $qname;
	public $qliker;
	public $qtime;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function tableName()
    {
        return 'questionlike';
    }
}