<?php
/**
 * File containing the ValueBuilder class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\Core\QueryBuilder\FactoryWorker\Criterion;

use Exception;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\CriterionBuilder;
use eZ\Publish\QueryBuilder\Core\QueryBuilder\CriterionFactory;
use eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionFactoryWorker as CriterionFactoryWorkerInterface;

abstract class CriterionFactoryWorker implements CriterionFactoryWorkerInterface
{
    /** @var \eZ\Publish\QueryBuilder\Core\QueryBuilder */
    protected $queryBuilder;

    /** @var \eZ\Publish\QueryBuilder\Core\QueryBuilder\CriterionFactory */
    protected $criterionFactory;

    /**
     * @param \eZ\Publish\QueryBuilder\Core\QueryBuilder\CriterionFactory $criterionFactory
     * @param \eZ\Publish\QueryBuilder\Core\QueryBuilder\CriterionBuilderInterface $builder
     */
    public function __construct( CriterionFactory $criterionFactory, CriterionBuilder $builder )
    {
        $this->criterionFactory = $criterionFactory;
        $this->builder = $builder;
    }

    /**
     * Adds the calling criterion with $operator and $value to the query, and returns the builder
     * @param mixed $value
     * @param mixed $operator
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder
     */
    protected function addCriterion( $value, $operator )
    {
        $this->criterionFactory->addValue( $value );
        $this->criterionFactory->setOperator( $operator );
        $this->builder->addCriterion(
            $this->criterionFactory->create()
        );
        return $this->builder;
    }

    public function not()
    {
        throw new Exception( "Not implemented" );
        // return $this->queryBuilder;
    }
}
