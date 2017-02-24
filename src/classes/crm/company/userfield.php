<?php

namespace Bitrix24\CRM\Company;
use Bitrix24\Bitrix24Entity;

/**
 * Class UserField
 */
class UserField extends Bitrix24Entity
{
	/**
	 * Get list of company fields items.
	 * @link http://dev.1c-bitrix.ru/rest_help/crm/company/crm_company_userfield_list.php
	 * @param array $order - order of task items
	 * @param array $filter - filter array
	 * @return array
	 */
	public function getList($order = array(), $filter = array())
	{
		$fullResult = $this->client->call(
			'crm.company.userfield.list',
			array(
				'order' => $order,
				'filter'=> $filter
			)
		);
		return $fullResult;
	}

	/**
	 * Get item userfield
	 * @link http://dev.1c-bitrix.ru/rest_help/crm/company/crm_company_userfield_get.php
	 * @param integer $userfieldId - company userfield id
	 * @return array
	 */
	public function get($userfieldId)
	{
		$fullResult = $this->client->call(
			'crm.company.userfield.get',
			array('id' => $userfieldId)
		);
		return $fullResult;
	}

	/**
	 * Delete userfield
	 * @link http://dev.1c-bitrix.ru/rest_help/crm/company/crm_company_userfield_delete.php
	 * @param integer $userfieldId - company userfield id
	 * @return array
	 */
	public function delete($userfieldId)
	{
		$fullResult = $this->client->call(
			'crm.company.userfield.delete',
			array('id' => $userfieldId)
		);
		return $fullResult;
	}

	/**
	 * Add a new userfield to company
	 * @param array $fields array of fields
	 * @link http://dev.1c-bitrix.ru/rest_help/crm/company/crm_company_userfield_add.php
	 * @return array
	 */
	public function add($fields = array())
	{
		$fullResult = $this->client->call(
			'crm.company.userfield.add',
			array('fields' => $fields)
		);
		return $fullResult;
	}

    /**
     * Update userfield of company
     * @param $id
     * @param array $fields array of fields
     * @return array
     * @link http://dev.1c-bitrix.ru/rest_help/crm/company/crm_company_userfield_update.php
     */
    public function update($id, $fields = array())
    {
        $fullResult = $this->client->call(
            'crm.company.userfield.update',
            array(
                'id' => $id,
                'fields' => $fields,
            )
        );
        return $fullResult;
    }
}
