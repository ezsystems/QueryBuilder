<?php
/**
 * File containing the ${NAME} class.
 *
 * @copyright Copyright (C) 2014 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\API\QueryBuilder\Builder;

interface SortClauseBuilder
{
    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\SortClause\SortClauseDirectionFactoryWorker
     */
    public function contentName();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\SortClause\SortClauseDirectionFactoryWorker
     */
    public function locationPriority();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\SortClause\SortClauseDirectionFactoryWorker
     */
    public function dateModified();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\SortClause\SortClauseDirectionFactoryWorker
     */
    public function sectionIdentifier();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\SortClause\SortClauseDirectionFactoryWorker
     */
    public function locationPathString();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\SortClause\SortClauseDirectionFactoryWorker
     */
    public function mapLocationDistance();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\SortClause\SortClauseDirectionFactoryWorker
     */
    public function locationPath();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\SortClause\SortClauseDirectionFactoryWorker
     */
    public function field();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\SortClause\SortClauseDirectionFactoryWorker
     */
    public function datePublished();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\SortClause\SortClauseDirectionFactoryWorker
     */
    public function sectionName();

    /**
     * @return \eZ\Publish\API\Repository\Values\Content\Query
     */
    public function getQuery();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\SortClause\SortClauseDirectionFactoryWorker
     */
    public function locationDepth();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\SortClause\SortClauseDirectionFactoryWorker
     */
    public function contentId();
}
