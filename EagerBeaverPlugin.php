<?php
/**
 * Eager Beaver plugin for Craft CMS
 *
 * Allows you to eager load elements from auto-injected Entry elements on demand from your templates.
 *
 * @author    nystudio107
 * @copyright Copyright (c) 2017 nystudio107
 * @link      https://nystudio107.com/
 * @package   EagerBeaver
 * @since     1.0.0
 */

namespace Craft;

class EagerBeaverPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Eager Beaver');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Allows you to eager load elements from auto-injected Entry elements on demand from your templates.');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/nystudio107/eagerbeaver/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/nystudio107/eagerbeaver/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.1';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'nystudio107';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'https://nystudio107.com/';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     * @return SeomaticTwigExtension
     */
    public function addTwigExtension()
    {
        Craft::import('plugins.eagerbeaver.twigextensions.EagerBeaverTwigExtension');

        return new EagerBeaverTwigExtension();
    }

}