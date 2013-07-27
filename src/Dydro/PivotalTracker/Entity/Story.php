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
 * The story model
 */
class Story
{
    const STATE_ACCEPTED = "accepted";

    const STATE_DELIVERED = "delivered";

    const STATE_FINISHED = "finished";

    const STATE_REJECTED = "rejected";

    const STATE_STARTED = "started";

    const STATE_UNSCHEDULED = "unscheduled";

    const STATE_UNSTARTED = "unstarted";

    const TYPE_BUG = "bug";

    const TYPE_CHORE = "chore";

    const TYPE_FEATURE = "feature";

    const TYPE_RELEASE = "release";

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $updatedAt;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $labels;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $currentState;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $storyType;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $estimate;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $description;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $url;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $ownedById;

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
    protected $name;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $projectId;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $requestedById;

    /**
     * {SHORTDESC}
     *
     * @var {TYPE}
     */
    protected $createdAt;
}