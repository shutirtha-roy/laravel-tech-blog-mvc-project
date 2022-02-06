<?php

namespace Tests\Feature;

use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TagTest extends TestCase
{
    
    /** @test */
    public function an_admin_can_add_tags(){
         
        $this->withoutMiddleware();

        $response = $this->post('/tags/create', [
            'tag_name' => 'fake',
        ]);

        $this->assertCount(1, Tag::all());
    }
}
