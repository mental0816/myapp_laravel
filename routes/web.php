
<?php
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::resource('articles', 'ArticlesController');
Route::get('mail', function () {
    $article = App\Article::with('user')->find(1);
    return Mail::send(
        'emails.articles.created',
        compact('article'),
        function ($message) use ($article) {
            $message->from('mental010816@gmail.com', '현재향');
            $message->to('olleh53@gmail.com');
            $message->subject('새 글이 등록되었습니다.'.$article->title);
            $message->cc('gbh68@naver.com');
            $message->attach(storage_path('IMG_4217.JPG'));
        }
    );
});
//DB::listen(function ($query) {
//    var_dump($query->sql);
//});