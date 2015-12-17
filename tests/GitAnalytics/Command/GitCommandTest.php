<?php

namespace Tests\GitAnalytics\Command;

use GitAnalytics\Command\CommandInterface;
use GitAnalytics\Command\Git\GitLogCommand;
use GitAnalytics\Command\GitCommand;

final class GitCommandTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GitCommand
     */
    private $git;

    public function setUp()
    {
        $this->git = new GitCommand();
    }

    public function testGetLog()
    {
        $this->assertInstanceOf(CommandInterface::class, $this->git->getLog());
        $this->assertInstanceOf(GitLogCommand::class, $this->git->getLog());
    }

    public function testExecute()
    {
        $this->setExpectedException(\InvalidArgumentException::class);
        $this->git->execute();
    }
}
