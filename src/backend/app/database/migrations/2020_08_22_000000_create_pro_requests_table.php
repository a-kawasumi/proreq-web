<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_requests', function (Blueprint $table) {
            $table->id();
            $table->string('slack_user_id')->comment('SlackユーザーID')->nullable();
            $table->string('channel_id')->comment('通知したSlackチャンネルID')->nullable();
            $table->string('timestamp')->comment('通知したSlackチャンネルID')->nullable();
            $table->string('contents')->nullable()->comment('内容');
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
        Schema::dropIfExists('pro_requests');
    }
}
