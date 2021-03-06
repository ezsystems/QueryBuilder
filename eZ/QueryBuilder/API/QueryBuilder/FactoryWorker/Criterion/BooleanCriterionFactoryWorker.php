<?php
/**
 * File containing the ${NAME} class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion;

interface BooleanCriterionFactoryWorker extends CriterionFactoryWorker
{
    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\CriterionBuilder
     */
    public function isTrue();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\CriterionBuilder
     */
    public function isFalse();
}
