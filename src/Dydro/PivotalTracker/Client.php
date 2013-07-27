<?php
/**
 * PHP-PivotalTracker - An API wrapper for Pivotal Tracker
 *
 * @author Troy McCabe <troy@dydro.com>
 * @copyright 2013 Dydro LLC. All rights reserved.
 * @license BSD 3-Clause License
 * @link http://github.com/dydro/php-pivotaltracker
 * @package Dydro\PivotalTracker
 */

namespace Dydro\PivotalTracker;

use Guzzle\Http\Client as HttpClient;

/**
 * The core API client
 *
 * @package Dydro\PivotalTracker
 */
class Client
{
    /**
     * The HTTPClient used for requests
     *
     * @var Client The HTTPClient used for requests
     */
    protected $httpClient;

    /**
     * Create the client for the API
     */
    public function __construct()
    {
        $this->httpClient = new HttpClient();
    }


}