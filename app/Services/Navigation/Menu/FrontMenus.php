<?php

namespace App\Services\Navigation\Menu;

class FrontMenus
{
    public function register()
    {

    }

    public function getFrontMainMenu()
    {
        $menu = Menu::handler('main', ['class' => 'nav navbar-nav'])
            ->add('/', 'Home');

        return $menu;
    }

    public function getLanguageMenu()
    {
        $menu = Menu::handler('language', ['class' => 'navigation']);

        foreach (config('app.locales') as $locale) {
            $menu->add('/'.$locale, $locale);
        }

        return $menu;
    }
}