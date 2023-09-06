<?php

namespace Modules\Tag\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*
         *
         * Module Menu for Admin Backend
         *
         * *********************************************************************
         */
        // \Menu::make('admin_sidebar', function ($menu) {

        //     // Tags
        //     $menu->add('<i data-feather="tag"></i>'.__('Tags'), [
        //         'route' => 'backend.tags.index',
        //         'class' => 'nav-item dropdown',
        //     ])
        //     ->data([
        //         'order'         => 84,
        //         'activematches' => ['admin/tags*'],
        //         'permission'    => ['view_tags'],
        //     ])
        //     ->link->attr([
        //         'class' => 'nav-link dropdown-toggle arrow-none',
        //     ]);
        // })->sortBy('order');

        return $next($request);
    }
}
