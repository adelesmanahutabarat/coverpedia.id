<?php

namespace Modules\Article\Http\Middleware;

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
        // \Menu::make('admin_sidebar', function ($menu) {

            // Articles Dropdown
        //     $articles_menu = $menu->add('<i data-feather="file-text"></i> Article <div class="arrow-down"></div>', [
        //         'class' => 'nav-item dropdown ',
        //     ])
        //     ->data([
        //         'order'         => 81,
        //         'activematches' => [
        //             'admin/posts*',
        //             'admin/categories*',
        //         ],
        //         'permission' => ['view_posts', 'view_categories'],
        //     ]);
        //     $articles_menu->link->attr([
        //         'class' => 'nav-link dropdown-toggle arrow-none',
        //         'href'  => '#',
        //     ]);

        //     // Submenu: Posts
        //     $articles_menu->add('<i data-feather="layers"></i> Posts', [
        //         'route' => 'backend.posts.index',
        //         'class' => 'dropdown-item',
        //     ])
        //     ->data([
        //         'order'         => 82,
        //         'activematches' => 'admin/posts*',
        //         'permission'    => ['edit_posts'],
        //     ])
        //     ->link->attr([
        //         'class' => 'nav-link',
        //     ]);

        //     // dd($articles_menu->o);

        //     // Submenu: Categories
        //     $articles_menu->add('<i data-feather="grid"></i> '.__('Categories'), [
        //         'route' => 'backend.categories.index',
        //         'class' => 'dropdown-item',
        //     ])
        //     ->data([
        //         'order'         => 83,
        //         'activematches' => [
        //             'admin/posts*',
        //             'admin/categories*',
        //         ],
        //         'permission'    => ['edit_categories'],
        //     ])
        //     ->link->attr([
        //         'class' => 'nav-link',
        //     ]);
        // })->sortBy('order');

        return $next($request);
    }
}
