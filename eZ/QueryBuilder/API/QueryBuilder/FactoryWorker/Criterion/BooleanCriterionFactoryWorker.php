<?php
/**
 * File containing the ${NAME} class.
 *
 * @copyright Copyright (C) 2014 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion;

interface BooleanCriterionFactoryWorker extends CriterionFactoryWorker
{
    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\CriterionBuilder
     */
    public function isTrue();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\CriterionBuilder
     */
    public function isFalse();
}
