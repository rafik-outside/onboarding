<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class AboutUs extends Composer
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
        $fields         = get_field('fields');
        $cta            = (isset($fields['cta_content']) && is_array($fields['cta_content']) && !empty($fields['cta_content'])) ? $fields['cta_content'] : false;
        $video          = (isset($fields['video_content']) && is_array($fields['video_content']) && !empty($fields['video_content'])) ? $fields['video_content'] : false;
        $isVimeoLink    = $video['is_vimeo_link'] ?? false;

        return [
            'eyebrow'           => $cta['eyebrow'] ?? false,
            'title'             => $cta['title'] ?? false,
            'buttonUrl'         => isset($cta['cta_button']) && is_array($cta['cta_button']) ? $cta['cta_button']['url'] : false,
            'buttonTitle'       => isset($cta['cta_button']) && is_array($cta['cta_button']) ? $cta['cta_button']['title'] : false,
            'buttonTarget'      => isset($cta['cta_button']) && is_array($cta['cta_button']) ? $cta['cta_button']['target'] : false,
            'showButtonIcon'    => $cta['show_button_icon']  ?? false,
            'videoEyebrow'      => $video['eyebrow'] ?? false,
            'isVimeoLink'       => $isVimeoLink,
            'videoUrl'          => $isVimeoLink ? $this->vimeoUrl($video['video_url']) : $this->checKmp4Link($video['video']) ?? false,
            'videoPosterUrl'    => (isset($video['video_thumbnail']) && is_array($video['video_thumbnail']) && !empty($video['video_thumbnail'])) ? $video['video_thumbnail']['url'] : false,
            'videoPosterAlt'    => (isset($video['video_thumbnail']) && is_array($video['video_thumbnail']) && !empty($video['video_thumbnail'])) ? $video['video_thumbnail']['alt'] : false,
        ];
    }
    function vimeoUrl($videoUrl)
    {
        if (!$videoUrl || (strpos($videoUrl, 'vimeo.com') == false)) {
            return false;
        }
        return $videoUrl;
    }
    function checKmp4Link($videoUrl)
    {
        if (!$videoUrl) {
            return false;
        }
        $regex = '/https?:\/\/(?:www\.)?[^\s]+\.mp4/';
        return preg_match($regex, $videoUrl, $match) ? $videoUrl  : false;
    }
}
