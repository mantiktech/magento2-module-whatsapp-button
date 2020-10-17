<?php


namespace Mantik\WhatsAppButton\Block\WhatsAppButton;


use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Template;
use Mantik\WhatsAppButton\Helper\Config as HelperConfig;

class Button extends Template
{
    const WHATSAPP_SEND_BASE_URL = 'https://api.whatsapp.com/send';

    const WHATSAPP_SEND_PHONE_PARAMETER_KEY = 'phone';

    const WHATSAPP_SEND_MESSAGE_PARAMETER_KEY = 'text';

    protected $helperConfig;

    public function __construct(
        Context $context,
        array $data = [],
        HelperConfig $helperConfig
    )
    {
        $this->helperConfig = $helperConfig;
        parent::__construct($context, $data);
    }

    public function getButtonUrl() {
        $params = [
            self::WHATSAPP_SEND_PHONE_PARAMETER_KEY => $this->getPhoneNumber(),
            self::WHATSAPP_SEND_MESSAGE_PARAMETER_KEY => $this->getMessage(),
        ];

        $url = self::WHATSAPP_SEND_BASE_URL . '?' . http_build_query($params);

        return $url;
    }

    protected function getPhoneNumber() {
        return $this->helperConfig->getPhoneNumber();
    }

    protected function getMessage() {
        return $this->helperConfig->getMessage();
    }

}