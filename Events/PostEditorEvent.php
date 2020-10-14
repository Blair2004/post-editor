<?php
namespace Modules\PostEditor\Events;

/**
 * Register Events
**/
class PostEditorEvent
{
    public function __construct()
    {
        //
    }

    public function filterMenus( $menus )
    {
        $menus  =   array_insert_after( $menus, 'dashboard', [
            'post-editor'   =>  [
                'label'     =>  __( 'Post Editor' ),
                'icon'      =>  'la-pen-alt',
                'childrens'  =>  [
                    'posts' =>  [
                        'label' =>  __( 'Posts' ),
                        'href'  =>  url( '/dashboard/posts' )
                    ], 
                    'new-post'  =>  [
                        'label' =>  __( 'New Post' ),
                        'href'  =>  url( '/dashboard/posts/new' )
                    ], 
                    'categories'    =>  [
                        'label' =>  __( 'Categories' ),
                        'href'  =>  url( '/dashboard/categories' )
                    ], 
                    'tags'  =>  [
                        'label' =>  __( 'Tags' ),
                        'href'  =>  url( '/dashboard/tags' )
                    ]
                ]
            ]
        ]);

        return $menus;
    }
}