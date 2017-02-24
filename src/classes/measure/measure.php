<?php
namespace Bitrix24\Measure;
use Bitrix24\Bitrix24Entity;
use Bitrix24\Bitrix24Exception;
use Bitrix24\Presets\Event\Event as EventType;

/**
 * Class Event
 * @package Bitrix24\Event
 */
class Measure extends Bitrix24Entity
{
    /**
     * Get list of fields entity Department
     * @link http://dev.1c-bitrix.ru/rest_help/departments/department_fields.php
     * @throws Bitrix24Exception
     * @return array
     */
    public function fields()
    {
        $result = $this->client->call('crm.measure.fields');
        return $result['result'];
    }

    /**
     * Get filtered list of departments
     * @link http://dev.1c-bitrix.ru/rest_help/departments/department_get.php
     * @param $sort
     * @param $order
     * @param $filter
     * @throws Bitrix24Exception
     * @return array
     */
    public function get($id)
    {
        $result = $this->client->call('crm.measure.get', array(
            'id' => $id,
        ));
        return $result;
    }

    /**
     * Create department. Works with user, who has rights for modify company structure
     * @link http://dev.1c-bitrix.ru/rest_help/departments/department_add.php
     * @param $name
     * @param $sort
     * @param $parent
     * @param $head
     * @throws Bitrix24Exception
     * @return integer
     */
    public function add($fields)
    {
        $result = $this->client->call('crm.measure.add', array(
            'fields' => $fields,
        ));
        return $result['result'];
    }

    /**
     * Update department. Works with user, who has rights for modify company structure
     * @link http://dev.1c-bitrix.ru/rest_help/departments/department_update.php
     * @param $id - required
     * @param $name - required
     * @param $sort
     * @param $parent
     * @param $head
     * @throws Bitrix24Exception
     * @return boolean
     */
    public function update($id, $fields)
    {
        $result = $this->client->call('crm.measure.update', array(
            'id' => $id,
            'fields' => $fields,
        ));
        return $result['result'];
    }

    /**
     * Delete department. Works with user, who has rights for modify company structure
     * @param $id integer
     * @throws Bitrix24Exception
     * @return boolean
     */
    public function delete($id)
    {
        $result = $this->client->call('crm.measure.delete', array('id' => $id));
        return $result['result'];
    }

    public function getList($order, $filter, $select)
    {
        $result = $this->client->call('crm.measure.list', array(
            'order' => $order,
            'filter' => $filter,
            'select' => $select,
        ));
        return $result['result'];
    }
}