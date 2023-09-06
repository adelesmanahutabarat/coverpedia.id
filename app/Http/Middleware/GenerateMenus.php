<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Request;

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
            // Dashboard
            $menu->add('<i data-feather="home"></i> Dashboards', [
                'route' => 'backend.dashboard',
                'class' => 'nav-item dropdown',
            ])
            ->data([
                'order'         => 1,
                'activematches' => 'admin/dashboard*',
            ])
            ->link->attr([
                'class' => 'nav-link dropdown-toggle arrow-none',
            ]);

            // Notifications
            // $menu->add('<i data-feather="bell"></i>'.__('Notifications'), [
            //     'route' => 'backend.notifications.index',
            //     'class' => 'nav-item',
            // ])
            // ->data([
            //     'order'         => 99,
            //     'activematches' => 'admin/notifications*',
            //     'permission'    => [],
            // ])
            // ->link->attr([
            //     'class' => 'nav-link dropdown-toggle arrow-none',
            // ]);

            // Access Control Dropdown
            $konfig = $menu->add('<i data-feather="file-text"></i> Konfigurasi <div class="arrow-down"></div>', [
                'class' => 'nav-item dropdown',
            ])
            ->data([
                'order'         => 104,
                'activematches' => [
                    'admin/settings*',
                    'admin/backups*',
                    'admin/management*'
                ],
                'permission'    => ['view_users', 'view_roles'],
            ]);
            $konfig->link->attr([
                'class' => 'nav-link dropdown-toggle arrow-none',
                'href'  => '#',
            ]);

            // Separator: Access Management
            $konfig->add('<b>Coba</b>', [
                'class' => 'nav-item disabled p-2',
            ]);

            // Separator: Access Management
            $konfig->add('Management', [
                'class' => 'nav-item mt-n2',
            ])
            ->data([
                'order'         => 101,
                'permission'    => ['edit_settings', 'view_backups', 'view_users', 'view_roles', 'view_logs'],
                'activematches' => 'admin/management*',
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

            // Settings
            $konfig->add('<i class="nav-icon fas fa-cogs"></i> Settings', [
                'route' => 'backend.settings',
                'class' => 'nav-item mt-n2',
            ])
            ->data([
                'order'         => 102,
                'activematches' => 'admin/settings*',
                'permission'    => ['edit_settings'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

            // Backup
            $konfig->add('<i class="nav-icon fas fa-archive"></i> Backups', [
                'route' => 'backend.backups.index',
                'class' => 'nav-item mt-n2',
            ])
            ->data([
                'order'         => 103,
                'activematches' => 'admin/backups*',
                'permission'    => ['view_backups'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

            // Separator: Access Management
            // Separator: Access Management
            $konfig->add('<b>Coba</b>', [
                'class' => 'nav-item disabled p-2',
            ])
            ->data([
                'order'         => 104,
                'permission'    => ['edit_settings', 'view_backups', 'view_users', 'view_roles', 'view_logs'],
            ]);

             // Backup
             $konfig->add('<i class="nav-icon fas fa-archive"></i> Backups', [
                'route' => 'backend.backups.index',
                'class' => 'nav-item mt-n2',
            ])
            ->data([
                'order'         => 105,
                'activematches' => 'admin/backups*',
                'permission'    => ['view_backups'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

             // Backup
             $konfig->add('<i class="nav-icon fas fa-archive"></i> Backups', [
                'route' => 'backend.backups.index',
                'class' => 'nav-item mt-n2',
            ])
            ->data([
                'order'         => 106,
                'activematches' => 'admin/backups*',
                'permission'    => ['view_backups'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

            // Access Control Dropdown
            $accessControl = $menu->add('<i data-feather="file-text"></i> Access Control <div class="arrow-down"></div>', [
                'class' => 'nav-item dropdown',
            ])
            ->data([
                'order'         => 104,
                'activematches' => [
                    'admin/users*',
                    'admin/roles*',
                ],
                'permission'    => ['view_users', 'view_roles'],
            ]);
            $accessControl->link->attr([
                'class' => 'nav-link dropdown-toggle arrow-none',
                'href'  => '#',
            ]);

            // Submenu: Users
            $accessControl->add('<i class="nav-icon cil-people"></i> Users', [
                'route' => 'backend.users.index',
                'class' => 'dropdown-item',
            ])
            ->data([
                'order'         => 105,
                'activematches' => 'admin/users*',
                'permission'    => ['view_users'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

            // Submenu: Roles
            $accessControl->add('<i class="nav-icon cil-people"></i> Roles', [
                'route' => 'backend.roles.index',
                'class' => 'dropdown-item',
            ])
            ->data([
                'order'         => 106,
                'activematches' => 'admin/roles*',
                'permission'    => ['view_roles'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

            // Log Viewer
            // Log Viewer Dropdown
            $accessControl = $menu->add('<i class="nav-icon cil-list-rich"></i> Log Viewer', [
                'class' => 'nav-group',
            ])
            ->data([
                'order'         => 107,
                'activematches' => [
                    'log-viewer*',
                ],
                'permission'    => ['view_logs'],
            ]);
            $accessControl->link->attr([
                'class' => 'nav-link dropdown-toggle arrow-none',
                'href'  => '#',
            ]);

            // Submenu: Log Viewer Dashboard
            $accessControl->add('<i class="nav-icon cil-list"></i> Dashboard', [
                'route' => 'log-viewer::dashboard',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 108,
                'activematches' => 'admin/log-viewer',
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

            // Submenu: Log Viewer Logs by Days
            $accessControl->add('<i class="nav-icon cil-list-numbered"></i> Logs by Days', [
                'route' => 'log-viewer::logs.list',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 109,
                'activematches' => 'admin/log-viewer/logs*',
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);

            // Access Permission Check
            $menu->filter(function ($item) {
                if ($item->data('permission')) {
                    if (auth()->check()) {
                        if (auth()->user()->hasRole('super admin')) {
                            return true;
                        } elseif (auth()->user()->hasAnyPermission($item->data('permission'))) {
                            return true;
                        }
                    }

                    return false;
                } else {
                    return true;
                }
            });

            // Set Active Menu
            $menu->filter(function ($item) {
                if ($item->activematches) {
                    $activematches = (is_string($item->activematches)) ? [$item->activematches] : $item->activematches;
                    foreach ($activematches as $pattern) {
                        if (request()->is($pattern)) {
                            $item->active();
                            $item->link->active();
                            if ($item->hasParent()) {
                                $item->parent()->active();
                            }
                        }
                    }
                }

                return true;
            });
        })->sortBy('order');

        return $next($request);
    }
}
