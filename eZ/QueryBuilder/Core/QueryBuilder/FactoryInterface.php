<?php
/**
 * File containing the FactoryInterface class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */
namespace eZ\Publish\QueryBuilder\Core\QueryBuilder;


/**
 * A factory is meant to instanciate an object configured on local properties:
 *
 * <code>
 * $thingFactory->setProperty( 'x' );
 * $thing = $thingFactory->create()
 * </code>
 */
interface FactoryInterface
{
    /**
     * @return mixed Creates an instance of the class handled by the factory
     */
    public function create();
}
