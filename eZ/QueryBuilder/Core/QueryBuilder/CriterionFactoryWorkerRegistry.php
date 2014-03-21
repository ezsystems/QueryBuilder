<?php
/**
 * File containing the ValueBuilderFactory class.
 *
 * @copyright Copyright (C) 2014 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\Core\QueryBuilder;

use eZ\Publish\QueryBuilder\API\QueryBuilder;
use eZ\Publish\Core\Base\Exceptions\InvalidArgumentException;
use eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\CriterionBuilder;

/**
 * Instanciates value FactoryWorker objects
 */
class CriterionFactoryWorkerRegistry
{
    /**
     * Map of criterion factory worker id => criterion factory worker class
     * @var string[string]
     */
    protected static $criterionFactoryWorkers = array(
        'date' => 'eZ\Publish\QueryBuilder\Core\QueryBuilder\FactoryWorker\Criterion\DateCriterionFactoryWorker',
        'identifier' => 'eZ\Publish\QueryBuilder\Core\QueryBuilder\FactoryWorker\Criterion\IdentifierCriterionFactoryWorker',
        'id' => 'eZ\Publish\QueryBuilder\Core\QueryBuilder\FactoryWorker\Criterion\IdCriterionFactoryWorker',
        'text' => 'eZ\Publish\QueryBuilder\Core\QueryBuilder\FactoryWorker\Criterion\TextCriterionFactoryWorker',
        'bool' => 'eZ\Publish\QueryBuilder\Core\QueryBuilder\FactoryWorker\Criterion\BooleanCriterionFactoryWorker',
        'number' => 'eZ\Publish\QueryBuilder\Core\QueryBuilder\FactoryWorker\Criterion\NumberCriterionFactoryWorker',
        'map_location' => 'eZ\Publish\QueryBuilder\Core\QueryBuilder\FactoryWorker\Criterion\MapLocationDistanceCriterionFactoryWorker'
    );

    /**
     * Creates a new ValueBuilder of type $valueBuilderClass object
     *
     * @param string $factoryWorkerId id of a value builder from {@see self::$valueBuilders}
     * @param CriterionBuilderInterface $queryBuilder The query builder that handles the whole building process
     * @param CriterionFactory $criterionFactory
     *
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionFactoryWorker
     */
    public function create( $factoryWorkerId, CriterionBuilder $queryBuilder, CriterionFactory $criterionFactory )
    {
        $workerClass = $this->getClass( $factoryWorkerId );
        return new $workerClass( $criterionFactory, $queryBuilder );
    }

    /**
     * Returns a Worker FQN based on its ID
     * @param string $criterionFactoryWorkerId
     * @return string Value builder FQN
     * @throws InvalidArgumentException If no matching value builder is found in {@see self::$valueBuilders}
     */
    protected function getClass( $criterionFactoryWorkerId )
    {
        if ( !isset( self::$criterionFactoryWorkers[$criterionFactoryWorkerId] ) )
        {
            throw new InvalidArgumentException( "CriterionFactoryWorker id $criterionFactoryWorkerId", "Unknown value builder id" );
        }

        return self::$criterionFactoryWorkers[$criterionFactoryWorkerId];
    }
}
