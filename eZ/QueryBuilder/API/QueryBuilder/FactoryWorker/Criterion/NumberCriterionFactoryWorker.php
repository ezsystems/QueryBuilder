<?php
/**
 * File containing the ${NAME} class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion;

interface NumberCriterionFactoryWorker extends CriterionFactoryWorker
{
    /**
     * @param $value
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\CriterionBuilder
     */
    public function eq( $value );

    /**
     * @param $value
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\CriterionBuilder
     */
    public function gt( $value );

    /**
     * @param $value
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\CriterionBuilder
     */
    public function gte( $value );

    /**
     * @param $value
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\CriterionBuilder
     */
    public function lt( $value );

    /**
     * @param $value
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\CriterionBuilder
     */
    public function lte( $value );

    /**
     * @param $value
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\CriterionBuilder
     */
    public function between( $minValue, $maxValue );

    /**
     * @return self
     */
    public function not();
}
