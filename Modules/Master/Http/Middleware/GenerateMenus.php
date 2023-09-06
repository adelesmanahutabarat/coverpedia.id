<?php

namespace Modules\Master\Http\Middleware;

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
        \Menu::make('admin_sidebar', function ($menu) {

            // Articles Dropdown
            $articles_menu = $menu->add('<i data-feather="file-text"></i> Master <div class="arrow-down"></div>', [
                'class' => 'nav-item dropdown ',
            ])
            ->data([
                'order'         => 81,
                'activematches' => [
                    'admin/songwriters*',
                    'admin/songs*',
                ],
                'permission' => ['view_songwriters', 'view_songs'],
            ]);
            $articles_menu->link->attr([
                'class' => 'nav-link dropdown-toggle arrow-none',
                'href'  => '#',
            ]);

            // Submenu: Songwriters
            $articles_menu->add('<i data-feather="layers"></i> Songwriter', [
                'route' => 'backend.songwriters.index',
                'class' => 'dropdown-item',
            ])
            ->data([
                'order'         => 82,
                'activematches' => 'admin/songwriters*',
                'permission'    => ['edit_songwriters'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

            // Submenu: Songs
            $articles_menu->add('<i data-feather="grid"></i> Song', [
                'route' => 'backend.songs.index',
                'class' => 'dropdown-item',
            ])
            ->data([
                'order'         => 83,
                'activematches' => 'admin/songs*',
                'permission'    => ['edit_songs'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
