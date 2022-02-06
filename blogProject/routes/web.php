<?php

use App\Http\Controllers\AboutContactMeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UsersController;
use App\Models\Category;
use App\Models\Like;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Admin Panel
Route::middleware(['auth:sanctum', 'verified'])->get('/panel', function () {
    return view('panel');
})->name('panel');


//Posts
Route::get('/', [PostsController::class, 'home'])->name('home');
Route::get('/posts', [PostsController::class, 'index'])->name('allPosts');
Route::middleware(['auth:sanctum', 'verified'])->get('/posts/create', [PostsController::class, 'create'])->name('postsCreate');
Route::middleware(['auth:sanctum', 'verified'])->post('/posts/create', [PostsController::class, 'store'])->name('postsStore');
Route::middleware(['auth:sanctum', 'verified'])->get('/preEdit', [PostsController::class, 'preEdit'])->name('postsPreEdit');
Route::middleware(['auth:sanctum', 'verified'])->get('/posts/edit/{id}', [PostsController::class, 'edit']);
Route::middleware(['auth:sanctum', 'verified'])->post('/posts/update/{id}', [PostsController::class, 'update']);
Route::middleware(['auth:sanctum', 'verified'])->get('/posts/delete/{id}', [PostsController::class, 'delete']);
Route::get('/posts/{id}', [PostsController::class, 'singlePage'])->where('id', '[0-9]+')->name('singlePage');
Route::get('/posts/search-record', [PostsController::class, 'searchDataBase'])->name('Search');


//POSTS LIKE AND DISLIKE
Route::middleware(['auth:sanctum', 'verified'])->get('liked/{id}', [PostsController::class, 'like']);//like
Route::middleware(['auth:sanctum', 'verified'])->get('disliked/{id}', [PostsController::class, 'dislike']);//dislike


//Comments
Route::get('/comments', [CommentsController::class, 'showAllComments'])->name('allComments');
Route::post('/comments/create/{id}', [CommentsController::class, 'storeComments'])->name('commentsStore');
Route::middleware(['auth:sanctum', 'verified'])->get('/comments/edit/{id}', [CommentsController::class, 'editComment']);
Route::middleware(['auth:sanctum', 'verified'])->post('/comments/update/{id}', [CommentsController::class, 'updateComment']);
Route::middleware(['auth:sanctum', 'verified'])->get('/comments/delete/{id}', [CommentsController::class, 'deleteComments']);


//Tags
Route::middleware(['auth:sanctum', 'verified'])->get('/tags/create', [TagsController::class, 'index'])->name('tagsCreate');
Route::middleware(['auth:sanctum', 'verified'])->post('/tags/create', [TagsController::class, 'storeTags']);
Route::get('/tags/{id}', [TagsController::class, 'getAllPostByTag'])->where('id', '[0-9]+');
Route::middleware(['auth:sanctum', 'verified'])->get('/tags/preEdit', [TagsController::class, 'preEditTags'])->name('tagsPreEdit');;
Route::middleware(['auth:sanctum', 'verified'])->get('/tags/edit/{id}', [TagsController::class, 'editTags']);
Route::middleware(['auth:sanctum', 'verified'])->post('/tags/update/{id}', [TagsController::class, 'updateTags']);
Route::middleware(['auth:sanctum', 'verified'])->get('/tags/delete/{id}', [TagsController::class, 'deleteTags']);


//Categories
Route::middleware(['auth:sanctum', 'verified'])->get('/categories/create', [CategoriesController::class, 'index'])->name('categoriesCreate');
Route::middleware(['auth:sanctum', 'verified'])->post('/categories/create', [CategoriesController::class, 'storeCategories']);
Route::get('/categories/{id}', [CategoriesController::class, 'getAllPostByCategories'])->where('id', '[0-9]+');;
Route::middleware(['auth:sanctum', 'verified'])->get('/categories/preEdit', [CategoriesController::class, 'preEditCategories'])->name('categoriesPreEdit');;
Route::middleware(['auth:sanctum', 'verified'])->get('/categories/edit/{id}', [CategoriesController::class, 'editCategories']);
Route::middleware(['auth:sanctum', 'verified'])->post('/categories/update/{id}', [CategoriesController::class, 'updateCategories']);
Route::middleware(['auth:sanctum', 'verified'])->get('/categories/delete/{id}', [CategoriesController::class, 'deleteCategories']);


//Users
Route::middleware(['auth:sanctum', 'verified'])->get('/users/all', [UsersController::class, 'allUsers'])->name('allUsers');
Route::middleware(['auth:sanctum', 'verified'])->get('/users/edit/{id}', [UsersController::class, 'editUsers']);
Route::middleware(['auth:sanctum', 'verified'])->post('/users/update/{id}', [UsersController::class, 'updateUsers']);
Route::middleware(['auth:sanctum', 'verified'])->get('/users/delete/{id}', [UsersController::class, 'deleteUsers'])->name('deleteUsers');
Route::middleware(['auth:sanctum', 'verified'])->get('/users/changePassword', [UsersController::class, 'changePassword'])->name('changeUsers');
Route::middleware(['auth:sanctum', 'verified'])->post('/users/updatePassword/{id}', [UsersController::class, 'updatechangedPassword']);
Route::middleware(['auth:sanctum', 'verified'])->get('/users/individualPost', [UsersController::class, 'individualUserPost'])->name('individualPost');


//Extra Resources
Route::get('/about-me', [AboutContactMeController::class, 'aboutMe'])->name('aboutMe');
Route::get('/contact', [AboutContactMeController::class, 'contact'])->name('contactMe');
Route::post('/contact', [AboutContactMeController::class, 'store']);
Route::get('/seeMessages', [AboutContactMeController::class, 'seeMessages'])->name('messages');
Route::get('/seeMessages/delete/{id}', [AboutContactMeController::class, 'deleteMessages']);
//Extra Functionality
Route::get('/autoSearch', [PostsController::class, 'autoSearch'])->name('autocomplete');