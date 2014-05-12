<?php
/**
 * File containing the CriterionValueBuilder class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\Core\QueryBuilder\FactoryWorker\Criterion;

use eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\TextCriterionFactoryWorker as TextCriterionFactoryWorkerInterface;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion;

class TextCriterionFactoryWorker extends CriterionFactoryWorker implements TextCriterionFactoryWorkerInterface
{
    public function endsWith( $value )
    {
        return $this->addCriterion( "%$value", Criterion\Operator::LIKE );
    }

    public function beginsWith( $value )
    {
        return $this->addCriterion( "$value%", Criterion\Operator::LIKE );
    }

    public function contains( $value )
    {
        return $this->addCriterion( $value, Criterion\Operator::CONTAINS, $value );
    }

    public function like( $value )
    {
        return $this->addCriterion( $value, Criterion\Operator::LIKE, $value );
    }

    public function matches( $regexp )
    {
        throw new \Exception( "@todo not implemented (might not be at all, depends if operator can be supported)" );
    }
}
