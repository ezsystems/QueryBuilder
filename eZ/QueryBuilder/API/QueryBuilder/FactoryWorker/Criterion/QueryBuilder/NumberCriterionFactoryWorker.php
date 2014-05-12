<?php
/**
 * File containing the ${NAME} class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder;

interface NumberCriterionFactoryWorker extends CriterionFactoryWorker
{
    /**
     * @param $value
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder
     */
    public function eq( $value );

    /**
     * @param $value
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder
     */
    public function gt( $value );

    /**
     * @param $value
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder
     */
    public function gte( $value );

    /**
     * @param $value
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder
     */
    public function lt( $value );

    /**
     * @param $value
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder
     */
    public function lte( $value );

    /**
     * @param $value
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder
     */
    public function between( $minValue, $maxValue );

    /**
     * @return self
     */
    public function not();
}
