<?php

namespace Tests\Feature;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    //use RefreshDatabase;

    /** @test */
    public function only_logged_in_users_can_see_posts()
    {
        $response = $this->get('posts/create')->assertRedirect('/login');
        //When not logged it redirects to login
    }


    /** @test */
    public function only_logged_in_users_can_see_like_posts()
    {
        $response = $this->get('liked/1')->assertRedirect('/login');
    }

    /** @test */
    public function only_logged_in_users_can_see_edit_posts()
    {
        $response = $this->get('/posts/edit/1')->assertRedirect('/login');
    }


    /** @test */
    public function an_user_can_add_posts(){
        
        //$this->withoutMiddleware();
         
        $this->withoutMiddleware();
        
        $this->actingAs(User::factory()->create());

        $response = $this->post('/posts/create', [
            'title' => 'test',
            'content' => 'content',
            'image' => '1628112407-Java (programming language).jpg',
            'created_at' => '2021-08-06 13:22:22',
            'updated_at' => '2021-08-06 13:22:22',
            'user_id' => 1,
        ]);

        $this->assertCount(1, Post::all());
    }

    /** @test */
    public function an_user_can_add_comment()
    {
                 
        $this->withoutMiddleware();

        $this->actingAs(User::factory()->create());
        $response = $this->get('/comments/create/1', [
            'username' => 'test',
            'comment' => 'test',
            'created_at' => '2021-08-06 13:22:22',
            'updated_at' => '2021-08-06 13:22:22',
            'user_id' => 1,
            'post_id' => 1,
        ]);

        $this->assertCount(1, Comment::all());
    }

    /** @test */
    public function visit_create_posts()
    {
        $this->withoutMiddleware();

        $this->actingAs(User::factory()->create());

        $response = $this->get('/posts')->assertOk();
    }




    



}
