<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CalloutController
 */
class CalloutControllerTest extends TestCase
{
    /**
     * @test
     */
    public function index_displays_view()
    {
        $response = $this->get(route('callout.index'));

        $response->assertOk();
        $response->assertViewIs('callout.index');
    }
}
