<?php

namespace GitAnalytics\Command;

use GitAnalytics\Command\Git\GitLogCommand;
use Symfony\Component\Process\ProcessBuilder;

final class GitCommand implements CommandInterface
{
    /**
     * @var ProcessBuilder
     */
    private $builder;

    public function __construct()
    {
        $this->builder = new ProcessBuilder(['git']);
    }

    /**
     * @return GitLogCommand
     */
    public function getLog()
    {
        return new GitLogCommand($this->builder);
    }

    /**
     * @throws \InvalidArgumentException
     */
    public function execute()
    {
        throw new \InvalidArgumentException();
    }
}
