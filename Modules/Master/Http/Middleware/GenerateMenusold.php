<?php

namespace Modules\Master\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GenerateMenusold
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        \Menu::make('admin_sidebar', function ($menu) {

            // Access Control Dropdown Master
            $accessControl = $menu->add('<i data-feather="columns"></i> Master<span class="menu-arrow">', [
                'class' => 'c-sidebar-nav-dropdown',
            ])
            ->data([
                'order'         => 90,
                'activematches' => [
                    'admin/songwriter*',
                    'admin/song*',
                ],
                'permission'    => ['view_songwriters', 'view_songs'],
            ]);
            $accessControl->link->attr([
                'class' => 'c-sidebar-nav-dropdown-toggle',
                'href'  => '#',
            ]);
            
            // Submenu: Songwriter
            $accessControl->add('<i data-feather="layers"></i> Songwriter', [
                'route' => 'backend.songwriters.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 101,
                'activematches' => 'admin/songwriters*',
                'permission'    => ['view_songwriters'],
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);

            // Submenu: Song
            $accessControl->add('<i data-feather="layers"></i> Songs', [
                'route' => 'backend.songs.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 101,
                'activematches' => 'admin/songs*',
                'permission'    => ['view_songs'],
            ])
            ->link->attr([
                'class' => 'c-sidebar-nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}