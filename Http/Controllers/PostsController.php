<?php

/**
 * Post Editor Controller
 * @since  1.1
 * @package  modules/PostEditor
**/

namespace Modules\PostEditor\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\DashboardController;
use App\Services\MenuService;

class PostsController extends DashboardController
{
    protected $menus;

    public function __construct(
        MenuService $menus
    )
    {
        parent::__construct();

        $this->menus    =   $menus;
    }

    /**
     * Index Controller Page
     * @return  view
     * @since  1.1
    **/
    public function index()
    {
        return View::make( 'PostEditor::index' );
    }

    public function createPost()
    {
        return View::make( 'PostEditor::create-post', [
            'title'     =>  __( 'Post Editor > Write' ),
            'menus'     =>  $this->menus
        ]);
    }
}
