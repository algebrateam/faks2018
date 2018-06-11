<?php

namespace App\Providers;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
//use Illuminate\Events\Dispatcher;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
//    public function boot()
//    {
//         Schema::defaultStringLength(191);
//    }

    public function boot(Dispatcher $events)
    {
      // Ovo mi rješava problem email polja baze podataka
      Schema::defaultStringLength(191);
      //TODO: pokusaj ispisati broj zupanija u sidebaru
      // Ovo mi služi za dinamički menu
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('MAIN NAVIGATION');
            $event->menu->add([
                'text'        => 'Users trararra',
                'url'         => 'admin/users',
                'icon'        => 'users',
                'label'       => User::count(),
                'label_color' => 'success',
            ]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
