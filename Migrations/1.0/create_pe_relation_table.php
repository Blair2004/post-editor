<?php
/**
 * Table Migration
 * @package  4.0
**/

namespace Modules\PostEditor\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        if ( ! Schema::hasTable( 'pe_posts_categories_relation' ) ) {
            Schema::create( 'pe_posts_categories_relation', function( Blueprint $table ) {
                $table->bigIncrements( 'id' );
                $table->integer( 'post_id' );
                $table->integer( 'category_id' );
                $table->timestamps();
            });
        }

        if ( ! Schema::hasTable( 'pe_posts_tags_relation' ) ) {
            Schema::create( 'pe_posts_tags_relation', function( Blueprint $table ) {
                $table->bigIncrements( 'id' );
                $table->integer( 'post_id' );
                $table->integer( 'tag_id' );
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::dropIfExists( 'pe_posts_tags_relation' );
        Schema::dropIfExists( 'pe_posts_categories_relation' );
    }
}
