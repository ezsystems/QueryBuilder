<?php
/**
 * File containing the CriterionValueBuilder class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\Core\QueryBuilder\FactoryWorker\Criterion;

use DateTime;
use eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\BooleanCriterionFactoryWorker as BooleanCriterionFactoryWorkerInterface;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion\Operator;

/**
 * Sets the operator + value for a criterion, and returns the query builder with the added criterion
 */
class BooleanCriterionFactoryWorker extends CriterionFactoryWorker implements BooleanCriterionFactoryWorkerInterface
{
    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder
     */
    public function isTrue()
    {
        return $this->addCriterion( true, Operator::EQ );
    }

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder
     */
    public function isFalse()
    {
        return $this->addCriterion( false, Operator::EQ );
    }
}
