<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('posts',[
        'posts' => Post::with('category')->get()
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {

return view('post', [
    'post' => $post
]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts',[
        'posts' => $category->posts
    ]);

});
    //    $path =__DIR__ . "/../resources/posts/{$slug}.html";

    //    if(! file_exists($path)){
    //        return redirect('/');
    //    }


    //    $post = cache()->remember("posts.{$slug}", 5,function() use($path){
    //    var_dump('file_get_contents');
    //     return file_get_contents($path);


    //    });

    //     return view('post',[
    //     'post' => $post

    // ]);
// })->where('post', '[A-z_\-]+');
