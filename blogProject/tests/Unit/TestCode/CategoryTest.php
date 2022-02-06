<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    
    /** @test */
    public function an_admin_can_add_categories(){
        
        //$this->withoutMiddleware();
         
        $this->withoutMiddleware();

        $response = $this->post('/categories/create', [
            'category_type' => 'fake',
        ]);

        $this->assertCount(1, Category::all());
    }
}
