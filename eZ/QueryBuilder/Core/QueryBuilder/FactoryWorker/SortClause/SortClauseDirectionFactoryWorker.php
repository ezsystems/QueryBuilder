<?php
/**
 * File containing the SortClauseDirectionBuilder class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\Core\QueryBuilder\FactoryWorker\SortClause;

use eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\SortClause\SortClauseDirectionFactoryWorker as SortClauseDirectionFactoryWorkerInterface;
use eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\SortClauseBuilder;
use eZ\Publish\API\Repository\Values\Content\Query;
use eZ\Publish\QueryBuilder\Core\QueryBuilder;
use eZ\Publish\QueryBuilder\Core\QueryBuilder\SortClauseFactory;

/**
 * SortClause worker that sets the sorting direction
 */
class SortClauseDirectionFactoryWorker implements SortClauseDirectionFactoryWorkerInterface
{
    /** @var \eZ\Publish\QueryBuilder\Core\QueryBuilder\SortClauseFactory */
    private $sortClauseFactory;

    /** @var \eZ\Publish\QueryBuilder\Core\QueryBuilder\SortClauseBuilder */
    private $sortClauseBuilder;

    public function __construct( SortClauseBuilder $sortClauseBuilder, SortClauseFactory $sortClauseFactory )
    {
        $this->sortClauseFactory = $sortClauseFactory;
        $this->sortClauseBuilder = $sortClauseBuilder;
    }

    public function desc()
    {
        return $this->descending();
    }

    public function asc()
    {
        return $this->ascending();
    }

    public function ascending()
    {
        return $this->finish( Query::SORT_ASC );
    }

    public function descending()
    {
        return $this->finish( Query::SORT_DESC );
    }

    private function finish( $direction )
    {
        $this->sortClauseFactory->setDirection( $direction );
        $this->sortClauseBuilder->addSortClause( $this->sortClauseFactory->create() );
        return $this->sortClauseBuilder;
    }
}
