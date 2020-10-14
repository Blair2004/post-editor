<?php
namespace Modules\PostEditor;

use App\Classes\Hook;
use Illuminate\Support\Facades\Event;
use App\Services\Module;
use Modules\PostEditor\Events\PostEditorEvent;

class PostEditorModule extends Module
{
    protected $events;

    public function __construct()
    {
        parent::__construct( __FILE__ );

        $this->events   =   new PostEditorEvent;

        Hook::addFilter( 'ns-dashboard-menus', [ $this->events, 'filterMenus' ]);
    }
}

new PostEditorModule;