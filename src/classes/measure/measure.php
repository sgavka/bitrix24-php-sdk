<?php
namespace Bitrix24\Measure;
use Bitrix24\Bitrix24Entity;
use Bitrix24\Exceptions\Bitrix24Exception;
use Bitrix24\Presets\Event\Event as EventType;

/**
 * Class Measure
 * @package Bitrix24\Measure
 */
class Measure extends Bitrix24Entity
{
    /**
     * Get list of fields
     * @link http://dev.1c-bitrix.ru/rest_help/crm/measure/crm_measure_fields.php
     * @throws Bitrix24Exception
     * @return array
     */
    public function fields()
    {
        $result = $this->client->call('crm.measure.fields');
        return $result;
    }

    /**
     * Get measures
     * @link http://dev.1c-bitrix.ru/rest_help/crm/measure/crm_measure_get.php
     * @param $id
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
     * Create measure
     * @link http://dev.1c-bitrix.ru/rest_help/crm/measure/crm_measure_add.php
     * @param $fields
     * @return array
     */
    public function add($fields)
    {
        $result = $this->client->call('crm.measure.add', array(
            'fields' => $fields,
        ));
        return $result;
    }

    /**
     * Update measure
     * @link http://dev.1c-bitrix.ru/rest_help/crm/measure/crm_measure_update.php
     * @param $id - required
     * @param array $fields
     * @return array
     */
    public function update($id, $fields)
    {
        $result = $this->client->call('crm.measure.update', array(
            'id' => $id,
            'fields' => $fields,
        ));
        return $result;
    }

    /**
     * Delete measure
     * @param $id integer
     * @throws Bitrix24Exception
     * @return array
     * @link http://dev.1c-bitrix.ru/rest_help/crm/measure/crm_measure_delete.php
     */
    public function delete($id)
    {
        $result = $this->client->call('crm.measure.delete', array('id' => $id));
        return $result;
    }

    /**
     * Get list of measures
     * @param array $order
     * @param array $filter
     * @param array $select
     * @return array
     * @link http://dev.1c-bitrix.ru/rest_help/crm/measure/crm_measure_list.php
     */
    public function getList($order, $filter, $select)
    {
        $result = $this->client->call('crm.measure.list', array(
            'order' => $order,
            'filter' => $filter,
            'select' => $select,
        ));
        return $result;
    }
}