<?php
namespace Bitrix24\CRM;
use Bitrix24\Bitrix24Entity;

class PersonType extends Bitrix24Entity
{
    /**
     * Get list of person type items.
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_persontype_list.php
     * @param array $order - order of task items
     * @param array $filter - filter array
     * @return array
     */
    public function getList($order = array(), $filter = array())
    {
        $fullResult = $this->client->call(
            'crm.persontype.list',
            array(
                'order' => $order,
                'filter'=> $filter,
            )
        );
        return $fullResult;
    }

    /**
     * get list of person type fields with description
     * @link http://dev.1c-bitrix.ru/rest_help/crm/invoice/crm_persontype_fields.php
     * @return array
     */
    public function fields()
    {
        $fullResult = $this->client->call(
            'crm.persontype.fields'
        );
        return $fullResult;
    }
}
