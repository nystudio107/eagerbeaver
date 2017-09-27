<?php
/**
 * Eager Beaver plugin for Craft CMS
 *
 * EagerBeaver Service
 *
 * @author    nystudio107
 * @copyright Copyright (c) 2017 nystudio107
 * @link      https://nystudio107.com/
 * @package   EagerBeaver
 * @since     1.0.0
 */

namespace Craft;

class EagerBeaverService extends BaseApplicationComponent
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
        // Bail if there aren't even any elements
        if (!$elements || empty($elements))
        {
            return;
        }

        if (!is_array($elements)) {
            $elements = array($elements);
        }
        // We are assuming all of these elements are of the same type
        /** @var BaseElementModel $element */
        $element = $elements[0];
        /** @var BaseElementType $elementType */
        $elementType = craft()->elements->getElementType($element->elementType);
        craft()->elements->eagerLoadElements($elementType, $elements, $with);
    }
}