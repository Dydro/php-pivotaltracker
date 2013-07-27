<?php
/**
 * PHP-PivotalTracker - An API wrapper for Pivotal Tracker
 *
 * @author Troy McCabe <troy@dydro.com>
 * @copyright 2013 Dydro LLC. All rights reserved.
 * @license BSD 3-Clause License
 * @link http://github.com/dydro/php-pivotaltracker
 * @package Dydro\PivotalTracker\Entity
 */

namespace Dydro\PivotalTracker\Entity;

/**
 * Created by talirian on 7/26/13.
 */
class Error
{
    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $error;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $kind;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $code;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $generalProblem;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $possibleFix;
}