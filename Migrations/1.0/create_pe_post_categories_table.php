<?php
/**
 * Table Migration
 * @package  4.0
**/

namespace Modules\PostEditor\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePePostCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        if ( ! Schema::hasTable( 'pe_posts_categories' ) ) {
            Schema::create( 'pe_posts_categories', function( Blueprint $table ) {
                $table->bigIncrements( 'id' );
                $table->string( 'title' );
                $table->text( 'body' );
                $table->integer( 'parent_id' )->nullable();
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
        Schema::dropIfExists( 'pe_posts_categories' );
    }
}
