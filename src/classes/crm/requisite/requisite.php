<?php

namespace Bitrix24\CRM\Requisite;

use Bitrix24\Bitrix24Entity;

class Requisite extends Bitrix24Entity
{
    /**
     * Get list of lead items.
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_invoice_list.php
     * @param array $order - order of task items
     * @param array $filter - filter array
     * @param array $select - array of collumns to select
     * @param integer $start - entity number to start from (usually returned in 'next' field of previous 'crm.invoice.list' API call)
     * @return array
     */
    public function getList($order = array(), $filter = array(), $select = array(), $start = 0)
    {
        $fullResult = $this->client->call(
            'crm.requisite.list',
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
            'crm.requisite.get',
            array('id' => $id)
        );
        return $fullResult;
    }

    /**
     * delete invoice by id
     * @var $id integer invoice identifier
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_invoice_delete.php
     * @return array
     */
    public function delete($id)
    {
        $fullResult = $this->client->call(
            'crm.requisite.delete',
            array('id' => $id)
        );
        return $fullResult;
    }

    /**
     * Add a new invoice to CRM
     * @param array $fields array of fields
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_invoice_add.php
     * @return array
     */
    public function add($fields = array())
    {
        $fullResult = $this->client->call(
            'crm.requisite.add',
            array('fields' => $fields)
        );
        return $fullResult;
    }

    /**
     * update invoice by id
     * @var $fields array invoice fields to update
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_invoice_update.php
     * @return array
     */
    public function update($id, $fields)
    {
        $fullResult = $this->client->call(
            'crm.requisite.update',
            array(
                'id' => $id,
                'fields' => $fields,
            )
        );
        return $fullResult;
    }

    /**
     * get list of invoice fields with description
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_invoice_fields.php
     * @return array
     */
    public function fields()
    {
        $fullResult = $this->client->call(
            'crm.requisite.fields'
        );
        return $fullResult;
    }

    /**
     * Get list of lead items.
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_invoice_list.php
     * @param array $order - order of task items
     * @param array $filter - filter array
     * @param array $select - array of collumns to select
     * @param integer $start - entity number to start from (usually returned in 'next' field of previous 'crm.invoice.list' API call)
     * @return array
     */
    public function bankdetailGetList($order = array(), $filter = array(), $select = array(), $start = 0)
    {
        $fullResult = $this->client->call(
            'crm.requisite.bankdetail.list',
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
    public function bankdetailGet($id)
    {
        $fullResult = $this->client->call(
            'crm.requisite.bankdetail.get',
            array('id' => $id)
        );
        return $fullResult;
    }

    /**
     * delete invoice by id
     * @var $id integer invoice identifier
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_invoice_delete.php
     * @return array
     */
    public function bankdetailDelete($id)
    {
        $fullResult = $this->client->call(
            'crm.requisite.bankdetail.delete',
            array('id' => $id)
        );
        return $fullResult;
    }

    /**
     * Add a new invoice to CRM
     * @param array $fields array of fields
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_invoice_add.php
     * @return array
     */
    public function bankdetailAdd($fields = array())
    {
        $fullResult = $this->client->call(
            'crm.requisite.bankdetail.add',
            array('fields' => $fields)
        );
        return $fullResult;
    }

    /**
     * update invoice by id
     * @var $id integer invoice identifier
     * @var $fields array invoice fields to update
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_invoice_update.php
     * @return array
     */
    public function bankdetailUpdate($id, $fields)
    {
        $fullResult = $this->client->call(
            'crm.requisite.bankdetail.update',
            array(
                'id' => $id,
                'fields' => $fields
            )
        );
        return $fullResult;
    }

    /**
     * get list of invoice fields with description
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_invoice_fields.php
     * @return array
     */
    public function bankdetailFields()
    {
        $fullResult = $this->client->call(
            'crm.requisite.bankdetail.fields'
        );
        return $fullResult;
    }

    /**
     * Get list of lead items.
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_invoice_list.php
     * @param array $order - order of task items
     * @param array $filter - filter array
     * @param array $select - array of collumns to select
     * @param integer $start - entity number to start from (usually returned in 'next' field of previous 'crm.invoice.list' API call)
     * @return array
     */
    public function presetGetList($order = array(), $filter = array(), $select = array(), $start = 0)
    {
        $fullResult = $this->client->call(
            'crm.requisite.preset.list',
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
    public function presetGet($id)
    {
        $fullResult = $this->client->call(
            'crm.requisite.preset.get',
            array('id' => $id)
        );
        return $fullResult;
    }

    /**
     * delete invoice by id
     * @var $id integer invoice identifier
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_invoice_delete.php
     * @return array
     */
    public function presetDelete($id)
    {
        $fullResult = $this->client->call(
            'crm.requisite.preset.delete',
            array('id' => $id)
        );
        return $fullResult;
    }

    /**
     * Add a new invoice to CRM
     * @param array $fields array of fields
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_invoice_add.php
     * @return array
     */
    public function presetAdd($fields = array())
    {
        $fullResult = $this->client->call(
            'crm.requisite.preset.add',
            array('fields' => $fields)
        );
        return $fullResult;
    }

    /**
     * update invoice by id
     * @var $id integer invoice identifier
     * @var $fields array invoice fields to update
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_invoice_update.php
     * @return array
     */
    public function presetUpdate($id, $fields)
    {
        $fullResult = $this->client->call(
            'crm.requisite.preset.update',
            array(
                'id' => $id,
                'fields' => $fields
            )
        );
        return $fullResult;
    }

    /**
     * get list of invoice fields with description
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_invoice_fields.php
     * @return array
     */
    public function presetFields()
    {
        $fullResult = $this->client->call(
            'crm.requisite.preset.fields'
        );
        return $fullResult;
    }

    /**
     * get list of invoice fields with description
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_invoice_fields.php
     * @return array
     */
    public function presetCountries()
    {
        $fullResult = $this->client->call(
            'crm.requisite.preset.countries'
        );
        return $fullResult;
    }
}
