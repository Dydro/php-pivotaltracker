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
 * The {CLASS} entity
 *
 * @package Dydro\PivotalTracker\Entity
 */
class Membership
{
    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $person;

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
    protected $id;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $wantsCommentNotificationEmails;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $role;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $projectId;
}