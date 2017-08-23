<?Php

namespace Thangck\Eshoper\Block;

class HeaderTop extends \Magento\Framework\View\Element\Template
{
    protected function _beforeToHtml()
    {
        $config = $this->_scopeConfig;
        $phone = $config->getValue('general/store_information/phone');
        $email = $config->getValue('trans_email/ident_general/email');

        $this->setData('store_phone', $phone);
        $this->setData('store_email', $email);
    }
}
