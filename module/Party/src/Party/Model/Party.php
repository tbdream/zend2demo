<?php
namespace Party\Model;

use Zend\Db\TableGateway\TableGateway;

class Party
{
	protected $tableGateway;
	
	public function __construct(TableGateway $tableGateway)
	{
		$this->tableGateway = $tableGateway;
		
	}
	
	public function fetchAll()
	{
		$resultSet = $this->tableGateway->select();
		return $resultSet;
	}
	
	public function getParty($id)
	{
		$id  = (int) $id;
		$rowset = $this->tableGateway->select(array('id' => $id));
		$row = $rowset->current();
		if (!$row) {
			throw new \Exception("Could not find row $id");
		}
	}
	
	public function saveParty(PartyTable $PartyTable)
	{
		$data = array(
			user_name  =>$PartyTable->user_name,
			user_phone =>$PartyTable->user_phone,
			user_qq    =>$PartyTable->user_qq,
			user_call  =>$PartyTable->user_call,
			user_email =>$PartyTable->user_email,
			user_province =>$PartyTable->user_province,
			user_city =>$PartyTable->user_city,
			user_group =>$PartyTable->user_group,
			freetime_begin =>$PartyTable->freetime_begin,
			freetime_end =>$PartyTable->freetime_end,
			content =>$PartyTable->content,
			submit_time =>$PartyTable->submit_ip,
			submit_ip =>$PartyTable->submit_time,
		);
		$id = (int)$PartyTable->id;
		if ($id == 0) {
			$this->tableGateway->insert($data);
		}else {
			if ($this->getParty($id)) {
				$this->tableGateway->update($data, array('id' => $id));
			} else {
				throw new \Exception('Form id does not exist');
			}		
		}		
	}
	
	public function deleteParty($id)
	{
		$this->tableGateway->delete(array('id' => $id));
	}
}