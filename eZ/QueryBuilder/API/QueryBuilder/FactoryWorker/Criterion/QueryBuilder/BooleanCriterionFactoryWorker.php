<?php
/**
 * File containing the ${NAME} class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder;

/**
 * Documentation override of the base criterion
 */
interface BooleanCriterionFactoryWorker
{
    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder
     */
    public function isTrue();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder
     */
    public function isFalse();
}
