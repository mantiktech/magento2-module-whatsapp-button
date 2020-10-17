<?php

namespace Mantik\WhatsAppButton\Helper;

use Magento\Framework\App\Helper\Context;

class Config extends \Magento\Framework\App\Helper\AbstractHelper
{
    const XML_PATH_CONFIG_STATUS = 'whatsappbutton/general/status';
    const XML_PATH_CONFIG_PHONE_NUMBER = 'whatsappbutton/general/phone_number';
    const XML_PATH_CONFIG_MESSAGE = 'whatsappbutton/general/message';

    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function getStatus()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_CONFIG_STATUS,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getPhoneNumber()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_CONFIG_PHONE_NUMBER,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getMessage()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_CONFIG_MESSAGE,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}