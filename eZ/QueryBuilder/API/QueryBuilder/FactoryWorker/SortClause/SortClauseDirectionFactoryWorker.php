<?php
/**
 * File containing the ${NAME} class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\SortClause;

interface SortClauseDirectionFactoryWorker
{
    /**
     * Sort in ascending order
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\SortClauseBuilder()
     */
    public function descending();

    /**
     * Sort in ascending order
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\SortClauseBuilder()
     */
    public function ascending();

    /**
     * Sort in ascending order
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\SortClauseBuilder()
     */
    public function desc();

    /**
     * Sort in ascending order
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\SortClauseBuilder()
     */
    public function asc();
}
