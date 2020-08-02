<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\InputController
 */
class InputControllerTest extends TestCase
{
    /**
     * @test
     */
    public function index_displays_view()
    {
        $response = $this->get(route('input.index'));

        $response->assertOk();
        $response->assertViewIs('from.input');
    }
}
