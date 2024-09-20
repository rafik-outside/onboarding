<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class CtaBanner extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'blocks.cta-banner'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $fields = get_field('fields');
        
        return [
            'title'         =>  $fields['title']?? false,
            'content'       =>  $fields['content']?? false,
            'buttonUrl'     => isset($fields['cta_button']) && is_array($fields['cta_button']) ? $fields['cta_button']['url'] : false,
            'buttonTitle'   => isset($fields['cta_button']) && is_array($fields['cta_button']) ? $fields['cta_button']['title'] : false,
            'buttonTarget'  => isset($fields['cta_button']) && is_array($fields['cta_button']) ? $fields['cta_button']['target'] : false,
            'showIcon'      => $fields['show_cta_button_icon']  ?? false,
        ];
    }
}
