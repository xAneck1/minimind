<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_home_page_shows_all_placeholder_sections(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Abi-Motto', false)
            ->assertSee('Jahrgangsinformationen')
            ->assertSee('Lehrerzitate')
            ->assertSee('Funfacts')
            ->assertSee('Abi-Merchandise');
    }
}
