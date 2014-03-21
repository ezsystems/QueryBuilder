<?php
/**
 * File containing the CriterionBuilder class.
 *
 * @copyright Copyright (C) 2014 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\API\QueryBuilder\Builder;

/**
 * @method CriterionBuilder or(CriterionBuilder $criterionBuilder) Start a LogicalOr criterion.
 * @method CriterionBuilder and(CriterionBuilder $criterionBuilder) Start a LogicalAnd criterion.
 */
interface CriterionBuilder extends LogicalCriterionBuilder
{
    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\IdCriterionFactoryWorker
     */
    public function contentTypeGroupId();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\IdCriterionFactoryWorker
     */
    public function contentTypeId();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\IdCriterionFactoryWorker
     */
    public function contentId();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\CriterionFactoryWorker
     */
    public function depth();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\CriterionFactoryWorker
     */
    public function language();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\IdentifierCriterionFactoryWorker
     */
    public function contentTypeIdentifier();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\IdentifierCriterionFactoryWorker
     */
    public function sectionIdentifier();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\IdCriterionFactoryWorker
     */
    public function locationRemoteId();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\IdCriterionFactoryWorker
     */
    public function locationId();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\IdCriterionFactoryWorker
     */
    public function parentLocationId();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\IdCriterionFactoryWorker
     */
    public function sectionId();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\TextCriterionFactoryWorker
     */
    public function fullText();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\DateCriterionFactoryWorker
     */
    public function wasModified();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\DateCriterionFactoryWorker
     */
    public function wasCreated();

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\TextCriterionFactoryWorker
     */
    public function authorField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\FileValueBuilder
     */
    public function binaryFileField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\BooleanCriterionFactoryWorker
     */
    public function checkboxField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\TextCriterionFactoryWorker
     */
    public function countryField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\DateCriterionFactoryWorker
     */
    public function dateField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\DateCriterionFactoryWorker
     */
    public function dateAndTimeField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\TextCriterionFactoryWorker
     */
    public function emailAddressField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\NumberCriterionFactoryWorker
     */
    public function floatField( $fieldIdentifier );

    public function imageField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\NumberCriterionFactoryWorker
     */
    public function integerField( $fieldIdentifier );

    public function keywordField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\MapLocationDistanceCriterionFactoryWorker
     */
    public function mapLocationField( $fieldIdentifier );

    public function mediaField( $fieldIdentifier );

    public function pageField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\NumberCriterionFactoryWorker
     */
    public function priceField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\RatingCriterionFactoryWorker
     */
    public function ratingField( $fieldIdentifier );

    public function relationField( $fieldIdentifier );

    public function relationListField( $fieldIdentifier );

    public function richTextField( $fieldIdentifier );

    public function selectionField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\TextCriterionFactoryWorker
     */
    public function textBlockField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\TextCriterionFactoryWorker
     */
    public function textLineField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\DateCriterionFactoryWorker
     */
    public function timeField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\TextCriterionFactoryWorker
     */
    public function urlField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\TextCriterionFactoryWorker
     */
    public function userField( $fieldIdentifier );

    /**
     * @return \eZ\Publish\QueryBuilder\API\QueryBuilder\FactoryWorker\Criterion\CriterionBuilder\TextCriterionFactoryWorker
     */
    public function xmlTextField( $fieldIdentifier );
}
