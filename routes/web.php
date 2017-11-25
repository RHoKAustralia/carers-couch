<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/* blog */
//Route::get('/',['as' => 'home', 'uses' => 'PostController@index']);

Route::get('/blog', 'PostController@index')->name('blog');

Route::get('/chat', 'ChatController@index')->name('chathome');


Route::get('new-post','PostController@create')->middleware('auth');

// save new post
Route::post('new-post','PostController@store')->middleware('auth');

// edit post form
Route::get('edit/{slug}','PostController@edit')->middleware('auth');

// update post
Route::post('update','PostController@update')->middleware('auth');

// delete post
Route::get('delete/{id}','PostController@destroy')->middleware('auth');

// display user's all posts
Route::get('my-all-posts','UserController@user_posts_all')->middleware('auth');

// display user's drafts
Route::get('my-drafts','UserController@user_posts_draft')->middleware('auth');


// add comment
Route::post('comment/add','CommentController@store')->middleware('auth');

// delete comment
Route::post('comment/delete/{id}','CommentController@distroy')->middleware('auth');

/*
Route::group(['middleware' => ['auth']], function()
{
	// show new post form
	Route::get('new-post','PostController@create');
	
	// save new post
	Route::post('new-post','PostController@store');
	
	// edit post form
	Route::get('edit/{slug}','PostController@edit');
	
	// update post
	Route::post('update','PostController@update');
	
	// delete post
	Route::get('delete/{id}','PostController@destroy');
	
	// display user's all posts
	Route::get('my-all-posts','UserController@user_posts_all');
	
	// display user's drafts
	Route::get('my-drafts','UserController@user_posts_draft');
	
	
	// add comment
	Route::post('comment/add','CommentController@store');
	
	// delete comment
	Route::post('comment/delete/{id}','CommentController@distroy');
	
});

*/

//users profile
Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');
// display list of posts
Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');
// display single post
Route::get('/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');

/* chat */

Route::get('/chat', 'ChatController@index')->name('chathome');
Route::get('/chat/{id}', 'ChatController@chat')->name('chat');
Route::get('/group/chat/{id}', 'ChatController@groupChat')->name('group.chat');

Route::post('/chat/message/send', 'ChatController@send')->name('chat.send');
Route::post('/chat/message/send/file', 'ChatController@sendFilesInConversation')->name('chat.send.file');
Route::post('/group/chat/message/send', 'ChatController@groupSend')->name('group.send');
Route::post('/group/chat/message/send/file', 'ChatController@sendFilesInGroupConversation')->name('group.send.file');

Route::get('/accept/message/request/{id}' , function ($id){
    Chat::acceptMessageRequest($id);
    return redirect()->back();
})->name('accept.message');

Route::post('/trigger/{id}' , function (\Illuminate\Http\Request $request , $id) {
    Chat::startVideoCall($id , $request->all());
});

Route::post('/group/chat/leave/{id}' , function ($id) {
    Chat::leaveFromGroupConversation($id);
});
