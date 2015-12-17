<?php

namespace GitAnalytics\Command;

/**
 * Command interface
 */
interface CommandInterface
{
    /**
     * @return string|null
     */
    public function execute();
}
