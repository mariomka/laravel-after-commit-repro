<?php

declare(strict_types=1);

namespace App;

use Illuminate\Support\Facades\DB;

class AfterCommitAction
{
    public $exectuted = false;

    public function handle()
    {
        DB::transaction(function () {
            // Do something with the DB but it's not
            // necessary to test this behaviour.

            DB::afterCommit(function () {
                $this->exectuted = true;
            });
        });
    }
}
