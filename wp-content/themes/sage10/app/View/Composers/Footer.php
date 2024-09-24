<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Footer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.footer'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */

    public function with()
    {
        $footerSettings = get_field('footer_settings', 'option');
        $hasFooterMenus = has_nav_menu('footer') ? true : false;
        $footerMenus    = wp_nav_menu(array(
            'menu'          => 'footer',
            'container'     => false,
            'menu_class'    => '',
            'items_wrap'    => '%3$s',
            'echo'          => false,
            'walker'        => new \FedFooterWalker(),
            'depth'         => 2,
        ));

        return [
            'footerLogo'        => isset($footerSettings['footer_logo']) && is_array($footerSettings['footer_logo']) && !empty($footerSettings['footer_logo']) ? $footerSettings['footer_logo'] : false,
            'hasFooterMenus'    => $hasFooterMenus,
            'footerMenus'       => $footerMenus,
            'showNewsletter'    => isset($footerSettings['show_newsletter']) ? $footerSettings['show_newsletter'] : false,
            'newsletterTitle'   => isset($footerSettings['newsletter_title']) ? $footerSettings['newsletter_title'] : false,
            'copyrightText'     => isset($footerSettings['copyright_text']) ? $footerSettings['copyright_text'] : false,
            'copyrightTextLink' => isset($footerSettings['footer_copyright_text_link']) && is_array($footerSettings['footer_copyright_text_link']) && !empty($footerSettings['footer_copyright_text_link']) ? $footerSettings['footer_copyright_text_link'] : false,

        ];
    }
}
