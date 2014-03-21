<?php
/**
 * File containing the BaseFieldCriterionBuilder class.
 *
 * @copyright Copyright (C) 2014 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\Core\QueryBuilder;

use eZ\Publish\API\Repository\Values\Content\Query\Criterion;

abstract class BaseFieldCriterionBuilder
{
    /** @var \eZ\Publish\QueryBuilder\Core\QueryBuilder */
    private $queryBuilder;

    /** @var \eZ\Publish\QueryBuilder\Core\QueryBuilder\CriterionFactory */
    private $criterionFactory;

    /** @var CriterionFactoryWorkerRegistry */
    protected $criterionFactoryWorkerRegistry;

    /**
     * @param \eZ\Publish\QueryBuilder\API\QueryBuilder $queryBuilder
     * @param \eZ\Publish\QueryBuilder\Core\QueryBuilder\CriterionFactory $criterionFactory
     * @param CriterionFactoryWorkerRegistry $criterionFactoryWorkerRegistry
     */
    public function __construct( CriterionBuilderInterface $queryBuilder, CriterionFactory $criterionFactory, CriterionFactoryWorkerRegistry $criterionFactoryWorkerRegistry )
    {
        $this->queryBuilder = $queryBuilder;
        $this->criterionFactory = $criterionFactory;
        $this->criterionFactoryWorkerRegistry = $criterionFactoryWorkerRegistry;
    }

    public function addCriterion( Criterion $criterion )
    {
        $this->queryBuilder->addCriterion( $criterion );
    }

    /**
     * Exits from the fields() namespace, and switches to sortBy().
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\SortClauseBuilder
     */
    public function sortBy()
    {
        return $this->queryBuilder->sortBy();
    }

    /**
     * Creates a factory worker of type $id
     *
     * @param string $id id of a value builder from {@see self::$valueBuilders}
     * @param string $criterionClass The FQN of the Criterion class
     * @param string $criterionTarget Optional criterion target
     *
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionFactoryWorker
     * @throws InvalidArgumentException If value builder with this ID is found
     *
     */
    protected function startCriterionFactoryWork( $id, $criterionTarget = null )
    {
        $this->criterionFactory->setTarget( $criterionTarget );
        return $this->criterionFactoryWorkerRegistry->create( $id, $this, $this->criterionFactory );
    }
}
