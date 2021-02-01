<?php

namespace ModelChangesHistory\Facades;

use Illuminate\Support\Facades\Facade;

/** @mixin \ModelChangesHistory\Services\ChangesHistoryService */
class ChangesHistory extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'changesHistory';
    }
}
