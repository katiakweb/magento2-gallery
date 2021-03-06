<?php

namespace DR\Gallery\Test\Integration\Controller\Adminhtml\Gallery;

use Magento\TestFramework\TestCase\AbstractBackendController;

/**
 * @magentoAppArea     adminhtml
 */
class EditTest extends AbstractBackendController
{
    /**
     * The resource used to authorize action
     *
     * @var string
     */
    protected $resource = 'DR_Gallery::gallery_gallery';

    /**
     * The uri at which to access the controller
     *
     * @var string
     */
    protected $uri = 'backend/gallery/gallery/edit';
}