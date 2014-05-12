<?php
/**
 * File containing the ${NAME} class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\GeneratedCriterionBuilder;

interface MapLocationDistanceCriterionFactoryWorker extends CriterionFactoryWorker
{
    /**
     * Text must contain $value
     * @param string $value Value the text must contain
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\GeneratedCriterionBuilder\NumberCriterionFactoryWorker
     */
    public function distance( $referenceLatitude, $referenceLongitude );
}
