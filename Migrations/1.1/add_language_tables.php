<?php
/**
 * Table Migration
 * @package  4.0
**/

namespace Modules\PostEditor\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLanguageTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::table( 'pe_posts_categories', function( Blueprint $table ) {
            if ( ! Schema::hasColumn( 'pe_posts_categories', 'language' ) ) {
                $table->string( 'language' )->default( 'en' );
            }
        });

        Schema::table( 'pe_posts_tags', function( Blueprint $table ) {
            if ( ! Schema::hasColumn( 'pe_posts_tags', 'language' ) ) {
                $table->string( 'language' )->default( 'en' );
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::table( 'pe_posts_categories', function( Blueprint $table ) {
            if ( Schema::hasTable( 'pe_posts_categories', 'language' ) ) {
                $table->dropColumn( 'language' );
            }
        });

        Schema::table( 'pe_posts_tags', function( Blueprint $table ) {
            if ( Schema::hasTable( 'pe_posts_tags', 'lenguage' ) ) {
                $table->dropColumn( 'language' );
            }
        });
    }
}
