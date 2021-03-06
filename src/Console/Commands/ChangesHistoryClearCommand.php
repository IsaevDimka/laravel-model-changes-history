<?php

namespace ModelChangesHistory\Console\Commands;

use ModelChangesHistory\Facades\HistoryStorage;
use Illuminate\Console\Command;

class ChangesHistoryClearCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'changes-history:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear changes history for all models.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        HistoryStorage::deleteHistoryChanges();
    }
}
