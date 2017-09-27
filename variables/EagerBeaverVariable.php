<?php
/**
 * Eager Beaver plugin for Craft CMS
 *
 * Eager Beaver Variable
 *
 * @author    nystudio107
 * @copyright Copyright (c) 2017 nystudio107
 * @link      https://nystudio107.com/
 * @package   EagerBeaver
 * @since     1.0.0
 */

namespace Craft;

class EagerBeaverVariable
{
    /**
     * Eager-loads additional elements onto a given set of elements.
     *
     * @param BaseElementModel[] $elements    The root element models that should be updated with the eager-loaded elements
     * @param string|array       $with        Dot-delimited paths of the elements that should be eager-loaded into the root elements
     *
     * @return void
     */
    public function eagerLoadElements($elements, $with)
    {
    craft()->eagerBeaver->eagerLoadElements($elements, $with);
    }
}