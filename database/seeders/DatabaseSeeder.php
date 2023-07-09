<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Menu;
use App\Models\UserAccMenu;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'username' => 'mina-m-rizal-sidik',
            'nik' => '97599',
            'password' => bcrypt('97599'),
            'section_cd' => 'IT',
            'email' => 'm-rizal-sidik@onemitsuba.com',
        ]);

        User::create([
            'username' => 'mina-dani-setiadi',
            'nik' => '97598',
            'password' => bcrypt('97598'),
            'section_cd' => 'IT',
            'email' => 'm-dani-setiadi@onemitsuba.com',
        ]);

        Menu::create([
            'form_id' => 'FRM01',
            'form_nm' => 'Administrator',
            'parent' => '0',
            'url' => '#',
            'fa_icon' => ''
        ]);

        Menu::create([
            'form_id' => 'FRM02',
            'form_nm' => 'Transactions',
            'parent' => '0',
            'url' => '#',
            'fa_icon' => ''
        ]);

        Menu::create([
            'form_id' => 'FRM03',
            'form_nm' => 'Report',
            'parent' => '0',
            'url' => '#',
            'fa_icon' => ''
        ]);

        Menu::create([
            'form_id' => 'FRM04',
            'form_nm' => 'Other',
            'parent' => '0',
            'url' => '#',
            'fa_icon' => ''
        ]);

        Menu::create([
            'form_id' => 'FRM05',
            'form_nm' => 'Users',
            'parent' => '1',
            'url' => 'users',
            'fa_icon' => 'bi bi-people'
        ]);

        Menu::create([
            'form_id' => 'FRM06',
            'form_nm' => 'User access menu',
            'parent' => '1',
            'url' => 'usrAccMenu',
            'fa_icon' => 'bi bi-gear'
        ]);

        Menu::create([
            'form_id' => 'FRM07',
            'form_nm' => 'Menus',
            'parent' => '1',
            'url' => 'menus',
            'fa_icon' => 'bi bi-list-ul'
        ]);

        UserAccMenu::create([
            'username' => 'mina-m-rizal-sidik',
            'form_id' => 'FRM01',
            'allow_create' => '0',
            'allow_update' => '0',
            'allow_delete' => '0',
            'allow_print' => '0',
            'allow_conf' => '0',
            'allow_open' => '-1'
        ]);

        UserAccMenu::create([
            'username' => 'mina-m-rizal-sidik',
            'form_id' => 'FRM05',
            'allow_create' => '-1',
            'allow_update' => '-1',
            'allow_delete' => '-1',
            'allow_print' => '0',
            'allow_conf' => '0',
            'allow_open' => '-1'
        ]);
        UserAccMenu::create([
            'username' => 'mina-m-rizal-sidik',
            'form_id' => 'FRM06',
            'allow_create' => '-1',
            'allow_update' => '-1',
            'allow_delete' => '-1',
            'allow_print' => '0',
            'allow_conf' => '0',
            'allow_open' => '-1'
        ]);
        UserAccMenu::create([
            'username' => 'mina-m-rizal-sidik',
            'form_id' => 'FRM07',
            'allow_create' => '-1',
            'allow_update' => '-1',
            'allow_delete' => '-1',
            'allow_print' => '0',
            'allow_conf' => '0',
            'allow_open' => '-1'
        ]);
    }
}
