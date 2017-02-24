<?php

namespace Bitrix24\CRM\Requisite;

use Bitrix24\Bitrix24Entity;

class Address extends Bitrix24Entity
{
    /**
     * Get list of address items.
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_address_list.php
     * @param array $order - order
     * @param array $filter - filter array
     * @param array $select - array of collumns to select
     * @param integer $start - entity number to start from (usually returned in 'next' field of previous 'crm.invoice.list' API call)
     * @return array
     */
    public function getList($order = array(), $filter = array(), $select = array(), $start = 0)
    {
        $fullResult = $this->client->call(
            'crm.address.list',
            array(
                'order' => $order,
                'filter'=> $filter,
                'select'=> $select,
                'start'	=> $start
            )
        );
        return $fullResult;
    }

    /**
     * get invoice by id
     * @var $id integer invoice identifier
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_invoice_get.php
     * @return array
     */
    public function get($id)
    {
        $fullResult = $this->client->call(
            'crm.address.get',
            array('id' => $id)
        );
        return $fullResult;
    }

    /**
     * delete address by id
     * @var array $fields address identifier
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_address_delete.php
     * @return array
     */
    public function delete($fields)
    {
        $fullResult = $this->client->call(
            'crm.address.delete',
            array('fields' => $fields)
        );
        return $fullResult;
    }

    /**
     * Add a new address for requisite
     * @param array $fields array of fields
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_address_add.php
     * @return array
     */
    public function add($fields = array())
    {
        $fullResult = $this->client->call(
            'crm.address.add',
            array('fields' => $fields)
        );
        return $fullResult;
    }

    /**
     * Update address
     * @var array $fields invoice fields to update
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_address_update.php
     * @return array
     */
    public function update($fields)
    {
        $fullResult = $this->client->call(
            'crm.address.update',
            array(
                'fields' => $fields
            )
        );
        return $fullResult;
    }

    /**
     * Get list of address fields with description
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_address_fields.php
     * @return array
     */
    public function fields()
    {
        $fullResult = $this->client->call(
            'crm.address.fields'
        );
        return $fullResult;
    }
}
