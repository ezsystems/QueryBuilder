<?php
/**
 * File containing the SortClauseBuilder class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\Core\QueryBuilder;

use eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\SortClauseBuilder as SortClauseBuilderInterface;
use eZ\Publish\QueryBuilder\API\QueryBuilder;
use eZ\Publish\API\Repository\Values\Content\Query;
use eZ\Publish\QueryBuilder\Core\QueryBuilder\FactoryWorker\SortClause\SortClauseDirectionFactoryWorker;

class SortClauseBuilder implements SortClauseBuilderInterface
{
    /** @var \eZ\Publish\QueryBuilder\Core\QueryBuilder */
    protected $queryBuilder;

    protected function startSortClauseFactoryWork( $sortClauseClass )
    {
        return new SortClauseDirectionFactoryWorker(
            $this,
            new SortClauseFactory( $sortClauseClass )
        );
    }

    public function addSortClause( Query\SortClause $sortClause )
    {
        $this->queryBuilder->addSortClause( $sortClause );
    }

    public function __construct( QueryBuilder $queryBuilder )
    {
        $this->queryBuilder = $queryBuilder;
    }

    public function contentId()
    {
        return $this->startSortClauseFactoryWork( 'eZ\Publish\API\Repository\Values\Content\Query\SortClause\ContentId' );
    }

    public function contentName()
    {
        return $this->startSortClauseFactoryWork( 'eZ\Publish\API\Repository\Values\Content\Query\SortClause\ContentName' );
    }

    public function dateModified()
    {
        return $this->startSortClauseFactoryWork( 'eZ\Publish\API\Repository\Values\Content\Query\SortClause\DateModified' );
    }

    public function datePublished()
    {
        return $this->startSortClauseFactoryWork( 'eZ\Publish\API\Repository\Values\Content\Query\SortClause\DatePublished' );
    }

    public function field()
    {
        return $this->startSortClauseFactoryWork( 'eZ\Publish\API\Repository\Values\Content\Query\SortClause\Field' );
    }

    public function locationDepth()
    {
        return $this->startSortClauseFactoryWork( 'eZ\Publish\API\Repository\Values\Content\Query\SortClause\LocationDepth' );
    }

    public function locationPath()
    {
        return $this->startSortClauseFactoryWork( 'eZ\Publish\API\Repository\Values\Content\Query\SortClause\LocationPath' );
    }

    public function locationPathString()
    {
        return $this->startSortClauseFactoryWork( 'eZ\Publish\API\Repository\Values\Content\Query\SortClause\LocationPathString' );
    }

    public function locationPriority()
    {
        return $this->startSortClauseFactoryWork( 'eZ\Publish\API\Repository\Values\Content\Query\SortClause\LocationPriority' );
    }

    public function mapLocationDistance()
    {
        return $this->startSortClauseFactoryWork( 'eZ\Publish\API\Repository\Values\Content\Query\SortClause\MapLocationDistance' );
    }

    public function sectionIdentifier()
    {
        return $this->startSortClauseFactoryWork( 'eZ\Publish\API\Repository\Values\Content\Query\SortClause\SectionIdentifier' );
    }

    public function sectionName()
    {
        return $this->startSortClauseFactoryWork( 'eZ\Publish\API\Repository\Values\Content\Query\SortClause\SectionName' );
    }

    public function getQuery()
    {
        return $this->queryBuilder->getQuery();
    }
}
