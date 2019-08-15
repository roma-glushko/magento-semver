<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Test\Vcs;

/**
 * @api
 */
interface TestRemoveInterface
{
    /**
     * @param array $methodParam
     * @return array
     */
    public function testMethod(array $methodParam);
}