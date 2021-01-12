<?php

namespace Tests;

use App\AfterCommitAction;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AfterCommitWithRefreshDatabaseTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function testAfterCommitWithRefreshDatabase()
    {
        $action = new AfterCommitAction();
        $action->handle();

        $this->assertTrue($action->exectuted);
    }
}
