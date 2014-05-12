<?php
/**
 * File containing the BaseQueryBuilder class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\Core\QueryBuilder;

use eZ\Publish\Core\Base\Exceptions\InvalidArgumentType;
use eZ\Publish\API\Repository\Values\Content\Query;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use eZ\Publish\Core\Base\Exceptions\InvalidArgumentException;

abstract class BaseQueryBuilder extends BaseCriterionBuilder
{
    /** @var Query */
    private $query;

    /** @var Query\SortClause[] */
    private $sortClauseArray = array();

    /** @var \eZ\Publish\QueryBuilder\Core\QueryBuilder\CriterionBuilder */
    protected $criterionBuilder;

    public function __construct( CriterionFactoryWorkerRegistry $criterionFactoryWorkerRegistry )
    {
        $this->criterionFactoryWorkerRegistry = $criterionFactoryWorkerRegistry;
        $this->query = new Query;

        // $this should always point to the implementor, that implements the right interface
        $this->criterionBuilder = new CriterionBuilder( $this->criterionFactoryWorkerRegistry, $this );
    }

    public function getQuery()
    {
        if ( count( $this->criterionArray ) == 1 && ( $this->criterionArray[0] instanceof Criterion\LogicalAnd || $this->criterionArray[0] instanceof Criterion\LogicalOr ) )
            $this->query->filter = $this->criterionArray[0];
        else
            $this->query->filter = new Criterion\LogicalAnd( $this->criterionArray );
        $this->query->sortClauses = $this->sortClauseArray;
        return $this->query;
    }

    public function addSortClause( Query\SortClause $sortClause )
    {
        $this->sortClauseArray[] = $sortClause;
    }

    public function sortBy()
    {
        return new SortClauseBuilder( $this );
    }

    public function expr()
    {
        return new CriterionBuilder( $this->criterionFactoryWorkerRegistry );
    }
}
