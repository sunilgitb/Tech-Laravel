<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    ProfileController,
    MailSettingController,
    UserController,
    
   

};
use App\Models\Post;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\PostSitemapController;

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
    $posts = Post::select('id', 'title','image', 'description', 'created_at', 'slug')->whereNotNull('slug')->latest()->limit(3)->get();
    return view('welcome', compact('posts'));
   
});


Route::get('/test-mail',function(){

    $message = "Testing mail";

    \Mail::raw('Hi, welcome!', function ($message) {
      $message->to('ajayydavex@gmail.com')
        ->subject('Testing mail');
    });

    dd('sent');

});


Route::get('/dashboard', function () {
    return view('front.dashboard');
})->middleware(['front'])->name('dashboard');


require __DIR__.'/front_auth.php';

// Admin routes
Route::get('/admin/dashboard', function () {
    return view('admin.layouts.dashboard');
})->middleware(['auth'])->name('admin.dashboard');

require __DIR__.'/auth.php';




Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function(){
        Route::resource('roles','RoleController');
        Route::resource('permissions','PermissionController');
        Route::resource('users','UserController');
        Route::resource('posts','PostController');
        Route::resource('categories','CategoryController');
        Route::resource('tags','TagController');
        Route::resource('jobs','JobController');
        Route::resource('contacts','ContactController');
        Route::resource('applications','ApplicationController');
    

        Route::get('/profile',[ProfileController::class,'index'])->name('profile');
        Route::put('/profile-update',[ProfileController::class,'update'])->name('profile.update');
        Route::get('/mail',[MailSettingController::class,'index'])->name('mail.index');
        Route::put('/mail-update/{mailsetting}',[MailSettingController::class,'update'])->name('mail.update');
});

Route::get('/about-us', [HomeController::class, 'aboutus']);
Route::get('/our-team', [HomeController::class, 'ourTeam']);
Route::get('/development', [HomeController::class, 'development']);
Route::get('/designing', [HomeController::class, 'designing']);
Route::get('/enterprise-solution', [HomeController::class, 'enterpriseSolution']);
Route::get('/careers', [HomeController::class, 'career']);
Route::get('/cloud-solutions', [HomeController::class, 'cloudSolutions']);
Route::get('/it-consulting', [HomeController::class, 'itConsulting']);
Route::get('/our-work', [HomeController::class, 'ourWork']);
Route::get('/our-work-detail', [HomeController::class, 'ourWorkDetail']);   
Route::get('/contact-us', [HomeController::class, 'contactUs']);
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy']);
Route::get('/terms-of-service', [HomeController::class, 'termsofService']);
Route::get('/job-openings', [HomeController::class, 'jobOpenings']);
Route::post('/apply', [ApplicationController::class, 'ApplyApplication'])->name('apply');
Route::get  ('/resume-donwload', [ApplicationController::class, 'resumeDonwload'])->name('resume.download');;
Route::get('/resumes/{id}/download', [ApplicationController::class, 'download'])->name('resumes.download');
Route::get('view-application', [ApplicationController::class, 'viewApplication']);

Route::post('/contact', [ContactController::class, 'Contact'])->name('contact.submit');
Route::post('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/posts', [PostController::class, 'posts']);
Route::get('/blog', [PostController::class, 'showMore'])->name('post.show');
Route::get('blogs/{blogPost}', [PostController::class, 'showPost'])->name('blogs.show');
Route::get('/blog/{title}', [PostController::class, 'showPostTitle'])->name('post.showtitle');
Route::get('/blog-test', [PostController::class, 'showSlugPost']);
Route::get('/blog/slug', [PostController::class, 'ShowPostWithSlug'])->name('post.showslugurl');

Route::get('/test-post/{slug}', [PostController::class, 'homePost'])->name('home.post.slug');
Route::get('/generate-slug', [PostController::class, 'generateSlugTest']);
Route::get('/delete-all-posts', [PostController::class, 'deleteAllPosts']);
Route::get('/all-posts', [PostController::class, 'indexPost']);


// Comments

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/show-comments', [CommentController::class, 'showComments']);


Route::get('show-post/{slug}', [PostController::class, 'showPost'])->name('post.show-single');
Route::get('post-slug/{slug}', [PostController::class, 'showPostSlug'])->name('postslug.show');
Route::get('/search-post}', [PostController::class, 'searchPost'])->name('post.search');
Route::get('/search-blog/{slug}', [PostController::class, 'showPostAutosuggest'])->name('post.search-show');
Route::put('posts/update{id}',[PostController::class, 'updatePost'])->name('admin.posts-update');
Route::post('blog-posts',[PostController::class, 'storePosts'])->name('admin.blog-posts');
Route::put('blog-posts/{postId}',[PostController::class, 'updatePosts'])->name('admin.blog-posts-update');

Route::get('/postslug/', [PostController::class, 'showSlug'])->name('posts.showslug');
Route::get('/post-category', [PostController::class, 'PostCategory']);


Route::get('/can-good-design-grow-your-business-and-customers', function () {
    return view('frontend.blog.next-blog');
});
Route::get('/7-ways-neuromarketing-impact-marketing', function () {
    return view('frontend.blog.previous-blog');
});
Route::get('/test', function () {
    return view('frontend.test');
});
Route::get('/test-data', function () {
    return view('test-data');
});

Route::get('/blog/{id}', [PostController::class, 'showBlog'])->name('blog.show');

Route::get('total-counts', [UserController::class, 'totalCount']);
Route::get('business-network-kitty', function () {
    return view('business-network-kitty');
});
Route::get('your-hr', function () {
    return view('your-hr');
});

Route::get('our-work-detail-2', function () {
    return view('frontend/our-work-detail-2');
});
Route::get('our-work-detail-3', function () {
    return view('frontend/our-work-detail-3');
});
Route::get('our-work-detail-4', function () {
    return view('frontend/our-work-detail-4');
});
Route::get('our-work-detail-5', function () {
    return view('frontend/our-work-detail-5');
});
Route::get('healthcare', function () {
    return view('frontend/healthcare');
});
Route::get('construction', function () {
    return view('frontend/construction');
});
Route::get('travel-transportation', function () {
    return view('frontend/transportation');
});
Route::get('education', function () {
    return view('frontend/education');
});
Route::get('port-logistics', function () {
    return view('frontend/port-logistics');
});
Route::get('blog-new', function () {
    return view('frontend/blog-new');
});
Route::get('blogs', function () {
    return view('frontend/blog-new-2');
});
Route::get('blog-new-3', function () {
    return view('frontend/blog-new-3');
});
Route::get('industries', function () {
    return view('frontend/industries');
});
Route::get('blog-new-4', function () {
    return view('frontend/blog-new-4');
});
Route::get('blog-new-5', function () {
    return view('frontend/blog-new-5');
});
Route::get('blog-new-6', function () {
    return view('frontend/blog-new-6');
});
Route::get('blog-new-7', function () {
    return view('frontend/blog-new-7');
});

Route::get('blog-new-8', function () {
    return view('frontend/blog-new-8');
});
Route::get('blog-post', function () {
    return view('frontend/blog/blog-new');
});
Route::get('test-page', function () {
    return view('frontend/test-page');
});


Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap.index');
Route::get('/sitemap/posts.xml', [PostSitemapController::class, 'index'])->name('sitemap.posts.index');
Route::get('/sitemap/posts/{letter}.xml', [PostSitemapController::class, 'show'])->name('sitemap.posts.show');
