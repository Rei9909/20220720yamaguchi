<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() // マイグレーション実行時に呼び出される関数
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id'); // increments('パラメータ');  ：INT型のオートインクリメントでPKとなる
            $table->string('name', 100); // string('パラメータ', 文字数);  ：文字数指定のvarchar型
            $table->boolean('sex'); // 性別カラムを追加
            $table->string('email', 255);
            $table->integer('zip');  // integer :整数であることをバリデート :郵便番号　
            $table->string('address'); // 住所
            $table->string('Building')->nullable(); // 建物名
            $table->text('opinion'); // 意見
            $table->timestamp('updated_at')->useCurrent()->nullable();
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() // ロールバック時に呼び出される関数
    {
        Schema::dropIfExists('authors');
    }
}
