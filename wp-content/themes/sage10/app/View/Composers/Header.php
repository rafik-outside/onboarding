<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Header extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.header',
        'sections.footer'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */

    public function with()
    {
        $hasPrimaryMenu = has_nav_menu('primary_menu') ? true : false;
        $primaryMenus = wp_nav_menu(array(
            'menu' => 'primary-menu',
            'container' => false,
            'menu_class'           => 'd-xl-flex header__nav-menu',
            'echo' => false,
            'walker' => new \FedWalker(),
            'depth' => 1,
        ));
        $headerSettings = get_field('header_settings', 'option');

        return [
            'hasPrimaryMenu'        => $hasPrimaryMenu,
            'primaryMenus'          => ! empty($primaryMenus)  ? $primaryMenus : false,
            'headerLogo'              => isset($headerSettings['header_logo']) && is_array($headerSettings['header_logo']) ? $headerSettings['header_logo'] : false,
            'headerLogoLight'              => isset($headerSettings['header_logo_light']) && is_array($headerSettings['header_logo_light']) ? $headerSettings['header_logo_light'] : false,
            'cta'              => isset($headerSettings['call_to_action_button']) && is_array($headerSettings['call_to_action_button']) ? $headerSettings['call_to_action_button'] : false,
        ];
    }
}
