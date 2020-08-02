<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CardController
 */
class CardControllerTest extends TestCase
{
    /**
     * @test
     */
    public function index_displays_view()
    {
        $response = $this->get(route('card.index'));

        $response->assertOk();
        $response->assertViewIs('card.index');
    }
}
