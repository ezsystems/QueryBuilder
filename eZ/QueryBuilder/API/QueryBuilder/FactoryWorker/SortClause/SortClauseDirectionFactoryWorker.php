<?php
/**
 * File containing the ${NAME} class.
 *
 * @copyright Copyright (C) 2014 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
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
