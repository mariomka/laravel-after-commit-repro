<?php

namespace Tests;

use App\AfterCommitAction;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AfterCommitWithoutRefreshDatabaseTest extends TestCase
{
    /** @test */
    public function testAfterCommitWithRefreshDatabase()
    {
        $action = new AfterCommitAction();
        $action->handle();

        $this->assertTrue($action->exectuted);
    }
}
