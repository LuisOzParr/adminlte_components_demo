<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\TextareaController
 */
class TextareaControllerTest extends TestCase
{
    /**
     * @test
     */
    public function index_displays_view()
    {
        $response = $this->get(route('textarea.index'));

        $response->assertOk();
        $response->assertViewIs('from.textare');
    }
}
