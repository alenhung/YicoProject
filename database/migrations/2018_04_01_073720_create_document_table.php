<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document', function (Blueprint $table) {
          $table->increments('id');
          $table->text('title')->comment('公文主旨');
          $table->string('description')->comment('文件描述');
          $table->string('type')->comment('公文類別');
          $table->string('str_sn')->comment('文件前綴號');
          $table->string('sn')->unique()->comment('公文編號');
          $table->string('from_to')->comment('來文-受文單位');
          $table->string('processing_level')->comment('處理時效');
          $table->string('secret_level')->comment('密等');
          $table->string('status')->comment('處理狀態');
          $table->string('create_user')->comment('承辦人員');
          $table->string('request_user')->comment('申請人員');
          $table->text('result')->comment('處理結果');
          $table->dateTime('create_at')->comment('建立日期');
          $table->dateTime('estimate_time')->comment('預定完成日期');
          $table->dateTime('colse_at')->comment('結案時間');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document');
    }
}
