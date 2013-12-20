<?php
namespace User\Form;

use Zend\Form\Form;

class PartyForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('User');
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'id',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'user_name',
            'type' => 'Text',
            'options' => array(
                'label' => '姓名',
            ),
        ));
        $this->add(array(
            'name' => 'user_phone',
            'type' => 'Text',
            'options' => array(
                'label' => '电话',
            ),
        ));
        $this->add(array(
        		'name' => 'user_phone',
        		'type' => 'Text',
        		'options' => array(
        				'label' => '电话',
        		),
        ));
        $this->add(array(
        		'name' => 'user_call',
        		'type' => 'Text',
        		'options' => array(
        				'label' => '备用电话',
        		),
        ));
        $this->add(array(
        		'name' => 'user_email',
        		'type' => 'Text',
        		'options' => array(
        				'label' => '邮箱',
        		),
        ));
        $this->add(array(
        		'name' => 'user_province',
        		'type' => 'Text',
        		'options' => array(
        				'label' => '省',
        		),
        ));
        $this->add(array(
        		'name' => 'user_city',
        		'type' => 'Text',
        		'options' => array(
        				'label' => '市',
        		),
        ));
        $this->add(array(
        		'name' => 'freetime_begin',
        		'type' => 'Text',
        		'options' => array(
        				'label' => '开始时间',
        		),
        ));
        $this->add(array(
        		'name' => 'freetime_end',
        		'type' => 'Text',
        		'options' => array(
        				'label' => '结束时间',
        		),
        ));
        $this->add(array(
        		'name' => 'content',
        		'type' => 'Text',
        		'options' => array(
        				'label' => '备注',
        		),
        ));
        $this->add(array(
        		'name' => 'freetime_end',
        		'type' => 'Text',
        		'options' => array(
        				'label' => '结束时间',
        		),
        ));
        $this->add(array(
        		'name' => 'submit_time',
        		'type' => 'Text',
        		'options' => array(
        				'label' => '提交时间',
        		),
        ));
        $this->add(array(
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        ));
    }
}