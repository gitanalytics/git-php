<?php

namespace GitAnalytics\Command\Git;

use GitAnalytics\Command\CommandInterface;
use Symfony\Component\Process\ProcessBuilder;

final class GitLogCommand implements CommandInterface
{
    /**
     * @var ProcessBuilder
     */
    private $git;

    /**
     * @param ProcessBuilder $git
     */
    public function __construct(ProcessBuilder $git)
    {
        $this->git = $git->add('log');
    }

    /**
     * @param string $format
     */
    public function format($format)
    {
        $this->git->add('--pretty=format:'.(string) $format);
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        $process = $this->git->getProcess();
        $process->run();

        return $process->getOutput();
    }
}
