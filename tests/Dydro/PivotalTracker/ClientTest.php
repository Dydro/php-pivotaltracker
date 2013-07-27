<?php
/**
 * PHP-PivotalTracker - An API wrapper for Pivotal Tracker
 *
 * @author Troy McCabe <troy@dydro.com>
 * @copyright 2013 Dydro LLC. All rights reserved.
 * @license BSD 3-Clause License
 * @link http://github.com/dydro/php-pivotaltracker
 * @package Dydro\PivotalTracker\Test
 */

namespace Dydro\PivotalTracker\Test;

/**
 * Test class for the main client
 *
 * @package Dydro\PivotalTracker\Test
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    protected $client;

    public function setUp()
    {
        $this->client = new Client();
    }
    /**
     * Tests logging in via basic authentication
     */
    public function testLogin()
    {

    }
}