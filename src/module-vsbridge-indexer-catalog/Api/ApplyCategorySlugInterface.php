<?php
/**
 * @package  Divante\VsbridgeIndexerCatalog
 * @author Agata Firlejczyk <afirlejczyk@divante.pl>
 * @copyright 2019 Divante Sp. z o.o.
 * @license See LICENSE_DIVANTE.txt for license details.
 */

namespace Divante\VsbridgeIndexerCatalog\Api;

/**
 * Interface ApplyCategorySlugInterface
 */
interface ApplyCategorySlugInterface
{
    /**
     * @param array $category
     *
     * @return array
     */
    public function execute(array $category);
}
