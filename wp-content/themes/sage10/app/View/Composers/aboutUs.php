<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class aboutUs extends Composer
{
    protected static $views = [
        'blocks.about-us',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $fields = get_field('fields');
        // dd($fields);
        $cta = (isset($fields['cta_content']) && is_array($fields['cta_content']) && !empty($fields['cta_content'])) ? $fields['cta_content'] : false;
        $video = (isset($fields['video_content']) && is_array($fields['video_content']) && !empty($fields['video_content'])) ? $fields['video_content'] : false;
        $isVimeoLink = $video['is_vimeo_link'] ?? false;
        return [
            'eyebrow' => $cta['eyebrow'] ?? false,
            'title' => $cta['title'] ?? false,
            'buttonUrl' => isset($cta['cta_button']) && is_array($cta['cta_button']) ? $cta['cta_button']['url'] : false,
            'buttonTitle' => isset($cta['cta_button']) && is_array($cta['cta_button']) ? $cta['cta_button']['title'] : false,
            'buttonTarget' => isset($cta['cta_button']) && is_array($cta['cta_button']) ? $cta['cta_button']['target'] : false,
            'showButtonIcon' => $cta['show_button_icon']  ?? false,
            'videoEyebrow' => $video['eyebrow'] ?? false,
            'isVimeoLink' => $isVimeoLink,
            'videoUrl' => $isVimeoLink ? $this->vimeoUrl($video['video_url']) : $video['video_url'] ?? false,
            'videoPoster' => $video['videoPoster'] ?? false,

        ];
    }
    function vimeoUrl($videoUrl)
    {
        if (!$videoUrl) {
            return false;
        }

        // Check if the URL contains 'vimeo.com'
        if (strpos($videoUrl, 'vimeo.com') == false) {
            return false;
        }
        $params = [];

        // Check if 'controls' parameter is missing, if so, add it
        if (strpos($videoUrl, 'controls=') === false) {
            $params[] = 'controls=0';
        }

        // Check if 'autoplay' parameter is missing, if so, add it
        if (strpos($videoUrl, 'autoplay=') === false) {
            $params[] = 'autoplay=0';
        }

        // If there are parameters to add
        if (!empty($params)) {
            // Use the appropriate separator ('?' or '&') based on the presence of existing parameters
            $separator = (strpos($videoUrl, '?') === false) ? '?' : '&';
            // Append the parameters
            $videoUrl .= $separator . implode('&', $params);
        }
        return $videoUrl;
    }
}
