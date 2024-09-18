<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class Post extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.page-header',
        'partials.content',
        'partials.content-*',
    ];
    public function with()
    {
        $post_id = get_the_ID();
        $imageUrl = get_the_post_thumbnail_url($post_id, 'full');
        $image_id = get_post_thumbnail_id();
        $imageAlt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
        $post_type = get_post_type();
        return [
            'title' => $this->title(),
            'imgUrl' => $imageUrl,
            'imgAlt' => $imageAlt,
            'relatedPosts' => $this->getRelatedPost($post_id, $post_type),
        ];
    }

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => $this->title(),
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title()
    {
        if ($this->view->name() !== 'partials.page-header') {
            return get_the_title();
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }

        if (is_archive()) {
            return get_the_archive_title();
        }

        if (is_search()) {
            return sprintf(
                /* translators: %s is replaced with the search query */
                __('Search Results for %s', 'sage'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }
    function getRelatedPost($id, $post_type)
    {
        $args['post_type'] = $post_type;
        $args['order'] = 'desc';
        $args['posts_per_page'] = 3;
        $query = new WP_Query($args);
        //Return False If No Data Found
        if (!$query->have_posts()) return false;
        $posts = [];
        while ($query->have_posts()) {
            $query->the_post();
            $post_id = get_the_ID();
            $imageUrl = get_the_post_thumbnail_url($post_id, 'medium');
            $image_id = get_post_thumbnail_id();
            $imageAlt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
            $posts[] = [
                'id' => $post_id,
                'title' => get_the_title(),
                'date' => get_the_date('F j, Y'),
                'postUrl' => get_permalink($post_id),
                'imageAlt' => $imageAlt,
                'imageUrl' => $imageUrl,
            ];
        }
        wp_reset_query();
        return $posts;
    }
}
