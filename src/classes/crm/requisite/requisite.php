<?php

namespace Bitrix24\CRM\Requisite;

use Bitrix24\Bitrix24Entity;

class Requisite extends Bitrix24Entity
{
    /**
     * Get list of requisite.
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_requisite_list.php
     * @param array $order - order of task items
     * @param array $filter - filter array
     * @param array $select - array of collumns to select
     * @return array
     */
    public function getList($order = array(), $filter = array(), $select = array())
    {
        $fullResult = $this->client->call(
            'crm.requisite.list',
            array(
                'order' => $order,
                'filter'=> $filter,
                'select'=> $select
            )
        );
        return $fullResult;
    }

    /**
     * get requisite by id
     * @var $id integer requisite identifier
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_requisite_get.php
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
     * @var $id integer requisite identifier
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_requisite_delete.php
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
     * Add a new requisite
     * @param array $fields array of fields
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_requisite_add.php
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
     * Update requisite by id
     * @var $fields array requisite fields to update
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
     * Get list of requisite fields with description
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_requisite_fields.php
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
     * Get list of bank details.
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_requisite_bankdetail_list.php
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
     * Get bank detail by id
     * @var $id integer invoice identifier
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_requisite_bankdetail_get.php
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
     * delete bank detail by id
     * @var $id integer bank detail identifier
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_requisite_bankdetail_delete.php
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
     * Add a new bank detail
     * @param array $fields array of fields
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_requisite_bankdetail_add.php
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
     * Update bank detail by id
     * @var $id integer bank detail identifier
     * @var $fields array bank detail fields to update
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_requisite_bankdetail_update.php
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
     * Get list of bank detail fields with description
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_requisite_bankdetail_fields.php
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
     * Get list of presets.
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_requisite_preset_list.php
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
     * Get preset by id
     * @var $id integer preset identifier
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_requisite_preset_get.php
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
     * Delete preset by id
     * @var $id integer invoice identifier
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_requisite_preset_delete.php
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
     * Add a new preset
     * @param array $fields array of fields
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_requisite_preset_add.php
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
     * Update preset by id
     * @var $id integer preset identifier
     * @var $fields array preset fields to update
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_requisite_preset_update.php
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
     * Get list of presets fields with description
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_requisite_preset_fields.php
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
     * Get list of preset countries
     * @link http://dev.1c-bitrix.ru/rest_help/crm/requisite/methods/crm_requisite_preset_countries.php
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
