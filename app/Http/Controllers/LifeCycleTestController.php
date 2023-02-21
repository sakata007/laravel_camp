<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    // サービスプロバイダを使ってみる
    public function showServiceProviderTest()
    {
        // サービスコンテナからencrypterというコンテナを取り出し、変数に定義
        $encrypt = app()->make('encrypter');
        // 「password」という文字列を暗号化
        $password = $encrypt->encrypt('password');
        // 暗号化したものと、暗号を解除したものを出力
        // dd($password, $encrypt->decrypt($password));

        $sample = app()->make('serviceProviderTest');
        dd($sample);
    }

    public function showServiceContainerTest()
    {
        app()->bind('lifeCycleTest', function() {
            return 'ライフサイクルテスト';
        });

        // makeでサービスを取りだすことができる
        $test = app()->make('lifeCycleTest');

        // サービスコンテナなしのパターン
        $message = new Message();
        $sample = new Sample($message);
        $sample->run();

        // サービスコンテナapp()ありのパターン
        // bindでサービスを追加することができる
        // 'sample'は呼び出す時の名前
        app()->bind('sample', Sample::class);
        $sample = app()->make('sample');
        $sample->run();

        dd($test, app());
    }
}

class  Sample
{
    public $message;
    // diという仕組み
    // 引数にクラス（Message）を入れると自動でインスタンス化してくれる
    public function __construct(Message $message){
        $this->message = $message;
    }
    public function run() {
        $this->message->send();
    }
}

class Message
{
    public function send()
    {
        echo 'メッセージ表示';
    }
}
