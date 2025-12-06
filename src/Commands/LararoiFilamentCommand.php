<?php

namespace AichaDigital\LararoiFilament\Commands;

use Illuminate\Console\Command;

class LararoiFilamentCommand extends Command
{
    public $signature = 'lararoi-filament';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
