<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\FormController
 */
class FormControllerTest extends TestCase
{
    /**
     * @test
     */
    public function index_displays_view()
    {
        $response = $this->get(route('form.index'));

        $response->assertOk();
        $response->assertViewIs('form.index');
    }
}
