<?php

namespace User\Model;

use Zend\Db\TableGateway\TableGateway;

class UserTable
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

    public function getCollect_info($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }

    public function saveCollect_info(Collect_info $Collect_info)
    {
        $data = array(
            'artist' => $Collect_info->artist,
            'title'  => $Collect_info->title,
        );

        $id = (int)$Collect_info->id;
        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getCollect_info($id)) {
                $this->tableGateway->update($data, array('id' => $id));
            } else {
                throw new \Exception('Form id does not exist');
            }
        }
    }

    public function deleteCollect_info($id)
    {
        $this->tableGateway->delete(array('id' => $id));
    }
}