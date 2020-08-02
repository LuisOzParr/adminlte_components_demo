<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\DropdownController
 */
class DropdownControllerTest extends TestCase
{
    /**
     * @test
     */
    public function index_displays_view()
    {
        $response = $this->get(route('dropdown.index'));

        $response->assertOk();
        $response->assertViewIs('dropdown.index');
    }
}
