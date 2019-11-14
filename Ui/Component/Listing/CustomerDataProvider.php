<?php
/**
 * @package   SK\UpdatedAt
 * @author    Kishan Savaliya <kishansavaliyakb@gmail.com>
 */
namespace SK\UpdatedAt\Ui\Component\Listing;

class CustomerDataProvider extends \Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult
{
   protected function _initSelect()
   {
      parent::_initSelect();
      $this->getSelect()->joinLeft(
        ['ce' => $this->getTable('customer_entity')],
        'main_table.entity_id = ce.entity_id',
        ['updated_at']
      );
      return $this;
  }
}