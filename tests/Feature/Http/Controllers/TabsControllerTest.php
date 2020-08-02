<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\TabsController
 */
class TabsControllerTest extends TestCase
{
    /**
     * @test
     */
    public function index_displays_view()
    {
        $response = $this->get(route('tab.index'));

        $response->assertOk();
        $response->assertViewIs('tabs.index');
    }
}
