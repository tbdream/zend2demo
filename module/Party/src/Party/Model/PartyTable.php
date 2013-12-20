<?php
namespace Party\Model;

class PartyTable
{
	public $id ;
	public $user_name ;
	public $user_phone ;
	public $user_qq ;
	public $user_call ;
	public $user_email ;
	public $user_province ;
	public $user_city ;
	public $user_group ;
	public $freetime_begin ;
	public $freetime_end ;
	public $content ;
	public $submit_time ;
	public $submit_ip ;
	protected $inputFilter;

	public function exchangeArray($data)
	{
		$this->id     = (!empty($data['id'])) ? $data['id'] : null;
		$this->user_name = (!empty($data['user_name'])) ? $data['user_name'] : null;
		$this->user_phone = (!empty($data['user_phone'])) ? $data['user_phone'] : null;
		$this->user_call = (!empty($data['user_call'])) ? $data['user_call'] : null;
		$this->user_email = (!empty($data['user_email'])) ? $data['user_email'] : null;
		$this->user_province = (!empty($data['user_province'])) ? $data['user_province'] : null;
		$this->user_city = (!empty($data['user_city'])) ? $data['user_city'] : null;
		$this->user_group = (!empty($data['user_group'])) ? $data['user_group'] : null;
		$this->freetime_begin = (!empty($data['freetime_begin'])) ? $data['freetime_begin'] : null;
		$this->freetime_end = (!empty($data['freetime_end'])) ? $data['freetime_end'] : null;
		$this->content = (!empty($data['content'])) ? $data['content'] : null;
		$this->submit_time = (!empty($data['submit_time'])) ? $data['submit_time'] : null;
		$this->submit_ip = (!empty($data['submit_ip'])) ? $data['submit_ip'] : null;

	}
}