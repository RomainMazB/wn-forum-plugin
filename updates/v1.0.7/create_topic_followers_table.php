<?php namespace Winter\Forum\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;
use Winter\Forum\Models\Post;
use Winter\Forum\Models\TopicFollow;

class CreateTopicFollowersTable extends Migration
{
    public function up()
    {
        Schema::create('winter_forum_topic_followers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('topic_id')->unsigned();
            $table->integer('member_id')->unsigned();
            $table->primary(['topic_id', 'member_id']);
            $table->timestamps();
        });

        $this->followExistingPosts();
    }

    public function down()
    {
        Schema::dropIfExists('winter_forum_topic_followers');
    }

    private function followExistingPosts()
    {
        /*
         * Follow exisiting posts
         */
        $migrated = [];
        foreach (Post::all() as $post) {
            $code = $post->topic_id.'!'.$post->member_id;
            if (isset($migrated[$code])) {
                continue;
            }
            $migrated[$code] = true;

            TopicFollow::insert([
                'topic_id'   => $post->topic_id,
                'member_id'  => $post->member_id,
                'created_at' => $post->created_at,
                'updated_at' => $post->updated_at
            ]);
        }
    }
}
