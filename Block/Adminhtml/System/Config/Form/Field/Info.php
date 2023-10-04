<?php
/**
 * Copyright © Codepeak AB All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Codepeak\Core\Block\Adminhtml\System\Config\Form\Field;

use Magento\Backend\Block\Template;
use Magento\Framework\Data\Form\Element\Renderer\RendererInterface;
use Magento\Framework\Data\Form\Element\AbstractElement;

class Info extends Template implements RendererInterface
{
    /**
     * @var string
     */
    protected $_template = 'about.phtml';

    /**
     * @param AbstractElement $element
     *
     * @return string
     */
    public function render(AbstractElement $element)
    {
        return $this->toHtml();
    }
}