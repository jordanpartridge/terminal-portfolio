<?php

namespace JordanPartridge\TerminalPortfolio\Commands;

use Illuminate\Console\Command;

class TerminalPortfolioCommand extends Command
{
    public $signature = 'terminal-portfolio';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
