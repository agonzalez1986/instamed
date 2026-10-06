<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OnePagerTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_renders_all_sections()
    {
        $response = $this->get(route('home'));

        $response->assertOk();

        foreach (['inicio', 'nosotros', 'servicios', 'sectores', 'proyectos', 'contacto'] as $section) {
            $response->assertSee('id="'.$section.'"', false);
        }
    }

    public function test_home_contains_section_anchor_navigation()
    {
        $response = $this->get(route('home'));

        foreach (['#inicio', '#nosotros', '#servicios', '#sectores', '#proyectos', '#contacto'] as $anchor) {
            $response->assertSee('href="'.$anchor.'"', false);
        }
    }

    public function test_legacy_page_urls_permanently_redirect_to_section_anchors()
    {
        $this->get(route('servicios'))->assertStatus(301)->assertLocation('/#servicios');
        $this->get(route('nosotros'))->assertStatus(301)->assertLocation('/#nosotros');
        $this->get(route('contacto'))->assertStatus(301)->assertLocation('/#contacto');
    }
}
