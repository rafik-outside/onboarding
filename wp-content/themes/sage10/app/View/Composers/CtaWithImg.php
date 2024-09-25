<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class CtaWithImg extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'blocks.cta-with-img',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $fields = get_field('fields');
        $image  = isset($fields['image']) && is_array($fields['image']) && !empty($fields['image']) ? $fields['image'] : false;
        $cta    = (isset($fields['cta']) && is_array($fields['cta']) && !empty($fields['cta'])) ? $fields['cta'] : false;

        return [
            'imgUrl'        => isset($image['url']) ? $image['url'] : false,
            'imgAlt'        => isset($image['alt']) ? $image['alt'] : '',
            'eyebrow'       => $cta['eyebrow'] ?? false,
            'title'         => $cta['title'] ?? false,
            'content'       => $cta['content'] ?? false,
            'content_small' => $cta['content_small'] ?? false,
            'date'          => $cta['date'] ?? false,
            'buttonUrl'     => isset($cta['cta_button']) && is_array($cta['cta_button']) ? $cta['cta_button']['url'] : false,
            'buttonTitle'   => isset($cta['cta_button']) && is_array($cta['cta_button']) ? $cta['cta_button']['title'] : false,
            'buttonTarget'  => isset($cta['cta_button']) && is_array($cta['cta_button']) ? $cta['cta_button']['target'] : false,
            'showIcon'      => $cta['show_cta_button_icon']  ?? false,
        ];
    }
}
