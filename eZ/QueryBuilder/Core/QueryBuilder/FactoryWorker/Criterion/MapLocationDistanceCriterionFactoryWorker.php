<?php
/**
 * File containing the ${NAME} class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\Core\QueryBuilder\FactoryWorker\Criterion;
use eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\MapLocationDistanceCriterionFactoryWorker as MapLocationDistanceCriterionFactoryWorkerInterface;

class MapLocationDistanceCriterionFactoryWorker extends CriterionFactoryWorker implements MapLocationDistanceCriterionFactoryWorkerInterface
{
    public function distance( $referenceLatitude, $referenceLongitude )
    {
        $this->criterionFactory->addValue( $referenceLatitude );
        $this->criterionFactory->addValue( $referenceLongitude );
        return new NumberCriterionFactoryWorker( $this->criterionFactory, $this->builder );
    }
}
