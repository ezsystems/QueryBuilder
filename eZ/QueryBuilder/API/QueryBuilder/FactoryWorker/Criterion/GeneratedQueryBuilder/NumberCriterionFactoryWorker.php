<?php
/**
 * File containing the ${NAME} class.
 *
 * @copyright Copyright (C) 2014 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\GeneratedQueryBuilder;

interface NumberCriterionFactoryWorker extends CriterionFactoryWorker
{
    /**
     * @param $value
     * @return \eZ\Publish\API\Repository\GeneratedQueryBuilder
     */
    public function eq( $value );

    /**
     * @param $value
     * @return \eZ\Publish\API\Repository\GeneratedQueryBuilder
     */
    public function gt( $value );

    /**
     * @param $value
     * @return \eZ\Publish\API\Repository\GeneratedQueryBuilder
     */
    public function gte( $value );

    /**
     * @param $value
     * @return \eZ\Publish\API\Repository\GeneratedQueryBuilder
     */
    public function lt( $value );

    /**
     * @param $value
     * @return \eZ\Publish\API\Repository\GeneratedQueryBuilder
     */
    public function lte( $value );

    /**
     * @param $value
     * @return \eZ\Publish\API\Repository\GeneratedQueryBuilder
     */
    public function between( $minValue, $maxValue );

    /**
     * @return self
     */
    public function not();
}
