<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class SingleTestimonial extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'blocks.single-testimonial'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $fields = get_field('fields');
        $image = isset($fields['image']) && is_array($fields['image'])  && !empty($fields['image']) ? $fields['image'] : false;
        // dd($fields);
        return [
            'imgUrl' =>  isset($image['url']) ? $image['url'] : false,
            'imgALt' =>  isset($image['alt']) ? $image['alt'] : false,
            'title' => $fields['title'] ?? false,
            'subtitle' => $fields['subtitle'] ?? false,
            'linkedinLink' => $fields['linkedin_link'] ?? false,
            'githubLink' => $fields['github_link'] ?? false,
            'twitterLink' => $fields['twitter_link'] ?? false,
            'fbLink' => $fields['facebook_link'] ?? false,
            'name' => $fields['name'] ?? false,
            'designation' => $fields['designation'] ?? false,
            'content' => $fields['content'] ?? false,
        ];
    }
}
