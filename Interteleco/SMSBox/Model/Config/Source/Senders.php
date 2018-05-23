<?php

namespace Interteleco\SMSBox\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;
use \Interteleco\SMSBox\Helper\Data as Helper;

class Senders implements ArrayInterface
{
    /**
     * @var Helper
     */
    protected $information;
    /**
     * @var Helper
     */
    protected $helper;
    /**
     * @param Helper $helper
     */
    public function __construct(Helper $helper)
    {
        $this->helper = $helper;
        $this->information = $this->helper->getInformation();
    }

    public function toOptionArray()
    {
        $arr = $this->toArray();
        $ret = [];
        foreach ($arr as $key => $value) {
            $ret[] = ['value' => $key,'label' => $value];
        }
        return $ret;
    }

    public function toArray()
    {
        return $this->information['senders'];
    }
}
