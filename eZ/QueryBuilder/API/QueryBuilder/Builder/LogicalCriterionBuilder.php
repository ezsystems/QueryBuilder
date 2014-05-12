<?php
/**
 * File containing the LogicalCriterionBuilder class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\API\QueryBuilder\Builder;
use eZ\Publish\QueryBuilder\API\QueryBuilder;

/**
 * Provides logical operators on a query
 *
 * @method QueryBuilder or() Start a LogicalOr criterion. Terminate with {@see endOr()}.
 * @method QueryBuilder and() Start a LogicalAnd criterion. Terminate with {@see endAnd()}.
 */
interface LogicalCriterionBuilder
{
}
