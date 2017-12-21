<?php

namespace Bitrix24\Sale;
use Bitrix24\Bitrix24Entity;

// todo: update this class
class PaySystem extends Bitrix24Entity
{
	/**
	 * Add a new pay system
	 * @param array $fields - array of fields
	 * @link http://dev.1c-bitrix.ru/rest_help/crm/rest_activity/crm_activity_add.php
	 * @return array
	 */
	public function add($fields = array())
	{
		$fullResult = $this->client->call(
			'crm.paysystem.add',
			array('fields' => $fields)
		);
		return $fullResult;
	}

	/**
	 * delete activity by id
	 * @param integer $entityId - activity identifier
	 * @link http://dev.1c-bitrix.ru/rest_help/crm/rest_activity/crm_activity_delete.php
	 * @return array
	 */
	public function delete($entityId)
	{
		$fullResult = $this->client->call(
			'crm.paysystem.delete',
			array('id' => $entityId)
		);
		return $fullResult;
	}

	/**
	 * Get list of activity items.
	 * @link http://dev.1c-bitrix.ru/rest_help/crm/rest_activity/crm_activity_list.php
	 * @param array $order - sort order of items
	 * @param array $filter - filter array
	 * @param array $select - array of columns to select
	 * @param integer $start - entity number to start from (usually returned in 'next' field of previous 'crm.activity.list' API call)
	 * @return array
	 */
	public function getList()
	{
		$fullResult = $this->client->call('crm.paysystem.list');
		return $fullResult;
	}

	/**
	 * update activity by id
	 * @param $entityId integer - activity identifier
	 * @param $fields array - activity fields to update
	 * @link http://dev.1c-bitrix.ru/rest_help/crm/rest_activity/crm_activity_update.php
	 * @return array
	 */
	public function update($entityId, $fields)
	{
		$fullResult = $this->client->call(
			'crm.paysystem.update',
			array(
				'id' => $entityId,
				'fields' => $fields
			)
		);
		return $fullResult;
	}
}

