<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\PageBundle\Storage;

use WellCommerce\Bundle\PageBundle\Entity\Page;

/**
 * Class PageStorage
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class PageStorage implements PageStorageInterface
{
    /**
     * @var Page
     */
    protected $currentPage;
    
    /**
     * {@inheritdoc}
     */
    public function setCurrentPage(Page $page)
    {
        $this->currentPage = $page;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getCurrentPage(): Page
    {
        return $this->currentPage;
    }
    
    /**
     * {@inheritdoc}
     */
    public function hasCurrentPage(): bool
    {
        return $this->currentPage instanceof Page;
    }
}
