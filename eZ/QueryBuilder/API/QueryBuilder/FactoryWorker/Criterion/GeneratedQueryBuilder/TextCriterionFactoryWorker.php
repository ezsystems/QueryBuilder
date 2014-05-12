<?php
/**
 * File containing the ${NAME} class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\GeneratedQueryBuilder;

interface TextCriterionFactoryWorker extends CriterionFactoryWorker
{
    /**
     * Text must contain $value
     * @param string $value Value the text must contain
     * @return \eZ\Publish\API\Repository\GeneratedQueryBuilder
     */
    public function contains( $value );

    /**
     * Flexible match with a like operator and wildcards (using %)
     * @param string $value
     * @return \eZ\Publish\API\Repository\GeneratedQueryBuilder
     */
    public function like( $value );

    /**
     * @param string $value Value the text must end with
     * @return \eZ\Publish\API\Repository\GeneratedQueryBuilder
     */
    public function endsWith( $value );

    /**
     * @param string $value Value the text must begin with
     * @return \eZ\Publish\API\Repository\GeneratedQueryBuilder
     */
    public function beginsWith( $value );

    /**
     * @param $regexp
     * @return \eZ\Publish\API\Repository\GeneratedQueryBuilder
     */
    public function matches( $regexp );

    /**
     * @return self
     */
    public function not();
}
