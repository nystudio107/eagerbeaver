<?php
/**
 * Eager Beaver plugin for Craft CMS
 *
 * Eager Beaver Twig Extension
 *
 * @author    nystudio107
 * @copyright Copyright (c) 2017 nystudio107
 * @link      https://nystudio107.com/
 * @package   EagerBeaver
 * @since     1.0.0
 */

namespace Craft;

use Twig_Extension;

class EagerBeaverTwigExtension extends \Twig_Extension
{
    /**
     * @return string The extension name
     */
    public function getName()
    {
        return 'EagerBeaver';
    }


    /**
     * @return array
     */
    public function getFunctions()
    {
        return [
            'eagerLoadElements' => new \Twig_Function_Method($this, 'eagerLoadElements'),
        ];
    }

    /**
     * Eager-loads additional elements onto a given set of elements.
     *
     * @param BaseElementModel[] $elements The root element models that should be updated with the eager-loaded elements
     * @param string|array       $with     Dot-delimited paths of the elements that should be eager-loaded into the root elements
     *
     * @return void
     */
    public function eagerLoadElements($elements, $with)
    {
        craft()->eagerBeaver->eagerLoadElements($elements, $with);
    }
}
