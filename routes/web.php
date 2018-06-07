
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
Route::get('markdown', function(){
    $text =<<<EOT
    # 마크다운 예제 1

    이 문서는[마크다운][1]으로 썼습니다. 화면에는 HTML로 변환되어 출력됩니다.

    ## 순서 없는 목록

    - 첫 번째 항목
    - 두 번째 항목[^1]

    [1]: http://daringfireball.net/project/markdown

    [^1]: 두번째 항목_ http://google.com
EOT;

    return app(ParsedownExtra::class)->text($text);
});
//DB::listen(function ($query) {
//    var_dump($query->sql);
//});