<?php
/**
 * Table Migration
 * @package  4.0
**/

namespace Modules\PostEditor\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        if ( ! Schema::hasTable( 'pe_posts' ) ) {
            Schema::create( 'pe_posts', function( Blueprint $table ) {
                $table->bigIncrements( 'id' );
                $table->string( 'title' );
                $table->string( 'slug' );
                $table->text( 'body' )->nullable();
                $table->string( 'language' )->default( 'en' );
                $table->datetime( 'scheduled_time' )->nullable();
                $table->string( 'status' )->default( 'draft' );
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
        Schema::dropIfExists( 'pe_posts' );
    }
}
