<?php
/**
 * File containing the ${NAME} class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\API;

use eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\CriterionBuilder;

/**
 * Fluent query building object.
 *
 * Can be used to :
 * - add metadata criteria, using the various methods available on the class: contentId, contentTypeIdentifier...
 * - add field criteria, using the field() method.
 * - set sorting criteria, using the sortBy() method.
 *
 * <code>
 * $queryBuilder
 *     ->contentTypeIdentifier()->in( 'article' )
 *     ->sectionId( 4 )
 *     ->checkBoxField( 'vip' )->isTrue()
 *     ->sortBy()->contentName()->ascending();
 * $query = $queryBuilder->getQuery();
 * </code>
 *
 * @method \eZ\Publish\QueryBuilder\API\QueryBuilder or(\eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\CriterionBuilder $criterionBuilder) Start a LogicalOr criterion.
 * @method \eZ\Publish\QueryBuilder\API\QueryBuilder and(\eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\CriterionBuilder $criterionBuilder) Start a LogicalAnd criterion.
 */
interface QueryBuilder extends CriterionBuilder
{
    /**
     * @return \eZ\Publish\API\Repository\Values\Content\Query
     */
    public function getQuery();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\SortClauseBuilder
     */
    public function sortBy();

    /**
     * Creates a new criterion builder. Must be used within logical expressions
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\Builder\CriterionBuilder
     */
    public function expr();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\IdCriterionFactoryWorker
     */
    public function contentTypeGroupId();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\IdCriterionFactoryWorker
     */
    public function contentTypeId();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\IdCriterionFactoryWorker
     */
    public function contentId();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\CriterionFactoryWorker
     */
    public function depth();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\CriterionFactoryWorker
     */
    public function language();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\IdentifierCriterionFactoryWorker
     */
    public function contentTypeIdentifier();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\IdentifierCriterionFactoryWorker
     */
    public function sectionIdentifier();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\IdCriterionFactoryWorker
     */
    public function locationRemoteId();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\IdCriterionFactoryWorker
     */
    public function locationId();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\IdCriterionFactoryWorker
     */
    public function parentLocationId();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\IdCriterionFactoryWorker
     */
    public function sectionId();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\TextCriterionFactoryWorker
     */
    public function fullText();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\DateCriterionFactoryWorker
     */
    public function wasModified();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\DateCriterionFactoryWorker
     */
    public function wasCreated();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\TextCriterionFactoryWorker
     */
    public function authorField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\FileValueBuilder
     */
    public function binaryFileField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\BooleanCriterionFactoryWorker
     */
    public function checkboxField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\TextCriterionFactoryWorker
     */
    public function countryField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\DateCriterionFactoryWorker
     */
    public function dateField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\DateCriterionFactoryWorker
     */
    public function dateAndTimeField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\TextCriterionFactoryWorker
     */
    public function emailAddressField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\NumberCriterionFactoryWorker
     */
    public function floatField( $fieldIdentifier );

    public function imageField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\NumberCriterionFactoryWorker
     */
    public function integerField( $fieldIdentifier );

    public function keywordField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\MapLocationDistanceCriterionFactoryWorker
     */
    public function mapLocationField( $fieldIdentifier );

    public function mediaField( $fieldIdentifier );

    public function pageField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\NumberCriterionFactoryWorker
     */
    public function priceField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\RatingCriterionFactoryWorker
     */
    public function ratingField( $fieldIdentifier );

    public function relationField( $fieldIdentifier );

    public function relationListField( $fieldIdentifier );

    public function richTextField( $fieldIdentifier );

    public function selectionField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\TextCriterionFactoryWorker
     */
    public function textBlockField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\TextCriterionFactoryWorker
     */
    public function textLineField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\DateCriterionFactoryWorker
     */
    public function timeField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\TextCriterionFactoryWorker
     */
    public function urlField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\TextCriterionFactoryWorker
     */
    public function userField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\QueryBuilder\TextCriterionFactoryWorker
     */
    public function xmlTextField( $fieldIdentifier );
}
