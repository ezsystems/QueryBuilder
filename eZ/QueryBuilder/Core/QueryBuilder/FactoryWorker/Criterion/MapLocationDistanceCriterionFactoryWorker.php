<?php
/**
 * File containing the ${NAME} class.
 *
 * @copyright Copyright (C) 2014 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
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
