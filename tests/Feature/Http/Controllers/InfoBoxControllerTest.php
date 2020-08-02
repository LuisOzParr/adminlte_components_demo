<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\InfoBoxController
 */
class InfoBoxControllerTest extends TestCase
{
    /**
     * @test
     */
    public function index_displays_view()
    {
        $response = $this->get(route('info-box.index'));

        $response->assertOk();
        $response->assertViewIs('infobox.index');
    }
}
