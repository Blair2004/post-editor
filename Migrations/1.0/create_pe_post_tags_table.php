<?php
/**
 * Table Migration
 * @package  4.0
**/

namespace Modules\PostEditor\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePePostTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        if ( ! Schema::hasTable( 'pe_posts_tags' ) ) {
            Schema::create( 'pe_posts_tags', function( Blueprint $table ) {
                $table->bigIncrements( 'id' );
                $table->string( 'title' );
                $table->text( 'body' )->nullable();
                $table->integer( 'author' );
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
        Schema::dropIfExists( 'pe_posts_tags' );
    }
}
