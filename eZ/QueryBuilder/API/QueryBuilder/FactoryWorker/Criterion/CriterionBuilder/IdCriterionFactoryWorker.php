<?php
/**
 * File containing the ${NAME} class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder;

interface IdCriterionFactoryWorker extends CriterionFactoryWorker
{
    /**
     * @param $value
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\CriterionBuilder
     */
    public function eq( $value );

    /**
     * @param mixed $value,...
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\CriterionBuilder
     */
    public function in( $value );

    /**
     * @return self
     */
    public function not();
}
