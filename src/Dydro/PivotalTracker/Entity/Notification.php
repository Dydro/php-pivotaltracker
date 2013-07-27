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
class Notification
{
    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $action;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $resourceType;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $notification;

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
    protected $performer;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $message;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $project;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $story;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $createdAt;
}