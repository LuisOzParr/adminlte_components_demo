<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ModalController
 */
class ModalControllerTest extends TestCase
{
    /**
     * @test
     */
    public function index_displays_view()
    {
        $response = $this->get(route('modal.index'));

        $response->assertOk();
        $response->assertViewIs('modal.index');
    }
}
