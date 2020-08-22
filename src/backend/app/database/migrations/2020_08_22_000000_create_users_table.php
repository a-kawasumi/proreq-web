<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('name')->comment('名前');
            $table->string('nickname')->comment('ニックネーム')->nullable();
            $table->string('employee_id')->comment('社員番号')->nullable();
            $table->integer('employee_type')->comment('社員タイプ')->default(User::EMPLOYEE_TYPE_MEMBER);
            $table->string('work_style')->comment('勤務形態')->nullable();
            $table->integer('status')->comment('ステータス')->default(User::STATUS_VALID);
            $table->string('face_image_url')->comment('顔写真URL')->nullable();
            $table->integer('team_id')->comment('チームID')->nullable();
            $table->integer('furigana')->comment('ふりがな')->nullable();
            $table->tinyInteger('location_id')->comment('拠点ID')->nullable();

            $table->integer('main_occupation_user_id')->comment('メイン職種ユーザーID')->nullable();

            $table->string('google_user_id')->comment('GoogleユーザーID')->nullable();
            $table->string('email')->comment('メールアドレス')->nullable();
            $table->string('icon_url')->comment('アイコンURL')->nullable();

            $table->string('github_id')->comment('GithubアカウントID')->nullable();
            $table->string('profile_url')->comment('プロフィールURL')->nullable();
            $table->string('slack_user_id')->comment('SlackユーザーID')->nullable();
            $table->string('slack_name')->comment('Slack名')->nullable();
            $table->string('slack_icon_url')->comment('SlackアイコンURL')->nullable();
            $table->string('ojt_channel_id')->comment('OJTチャンネルID')->nullable();

            $table->string('lapras_url')->comment('Lapras URL')->nullable();
            $table->date('join_at')->comment('加入日')->nullable();
            $table->date('leave_at')->comment('離脱日')->nullable();
            $table->date('birthday')->comment('生年月日')->nullable();
            $table->tinyInteger('gender_id')->comment('性別ID')->nullable();

            $table->string('twitter_id')->comment('TwitterID')->nullable();
            $table->string('qiita_id')->comment('QiitaID')->nullable();
            $table->string('note_id')->comment('NoteID')->nullable();
            $table->string('note')->comment('備考')->nullable();

            $table->timestamp('deleted_at')->nullable();

            $table->unique(['name']);
            $table->unique(['email']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
