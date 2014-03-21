<?php
/**
 * File containing the CriterionValueBuilder class.
 *
 * @copyright Copyright (C) 2014 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
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
