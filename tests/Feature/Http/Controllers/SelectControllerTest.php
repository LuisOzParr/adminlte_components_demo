<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\SelectController
 */
class SelectControllerTest extends TestCase
{
    /**
     * @test
     */
    public function index_displays_view()
    {
        $response = $this->get(route('select.index'));

        $response->assertOk();
        $response->assertViewIs('from.select');
    }
}
