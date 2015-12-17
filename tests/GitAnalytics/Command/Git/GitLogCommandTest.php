<?php

namespace Tests\GitAnalytics\Command\Git;

use GitAnalytics\Command\GitCommand;

final class GitLogCommandTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \GitAnalytics\Command\Git\GitLogCommand
     */
    private $log;

    public function setUp()
    {
        $this->log = (new GitCommand())->getLog();
    }

    public function testFormat()
    {
        $this->log->format('TEST');
        $output = $this->log->execute();
        $this->assertEquals('TEST', $output);
    }
}
