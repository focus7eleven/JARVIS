<?php

class QuestionForm extends CFormModel
{
	public $qname;
	public $qtag;
	public $qcontent;
	public $qpic;

    public function rules()
    {
        return array(
            array('qname','required','message'=>'标题不能为空'),
            array('qtag','required','message'=>'标签不能为空'),
            array('qcontent','required','message'=>'问题描述不能为空'),
            array('qpic','file',
            'allowEmpty'=>true,'maxSize'=>1024*1024*10, // 10MB
			'tooLarge'=>'上传文件超过 10MB，无法上传。',
			'types'=>'jpg,gif,png,jpeg',
			'message'=>'图片格式不支持'),
        );
    }
}