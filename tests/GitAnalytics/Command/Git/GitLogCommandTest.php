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
        $this->log->format('%ad');
        $output = $this->log->execute();
        $this->assertTrue(1 === preg_match('/^(\w{3}\s){2}\d{2}\s(\d{2}(\:|\s)){3}\d{4}\s\-\d{4}$/im', $output));
    }
}
