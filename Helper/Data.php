<?php

namespace Rsc\BetterBlockHints\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    const XML_PATH_BTH_VISIBILITY = 'dev/debug/bettertemplatehints_visibility';

    /**
     * @return bool
     */
    public function isAlwaysVisible()
    {
        return $this->scopeConfig->isSetFlag(self::XML_PATH_BTH_VISIBILITY)
    }
}
