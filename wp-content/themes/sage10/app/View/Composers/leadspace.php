<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Leadspace extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'blocks.leadspace',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $fields = get_field('content');
        return [
            'backgroundVariation' => $fields['background_variation'] ?? false,
            'titleTag'          => $fields['ls_card_title_tag']  ??  'h2',
            'bodyTextClass'     => $fields['ls_card_text_variation']  ??  false,
            'img1'              => isset($fields['ls_image_1']) && is_array($fields['ls_image_1']) ? $fields['ls_image_1'] : false,
            'img2'              => isset($fields['ls_image_2']) && is_array($fields['ls_image_2']) ? $fields['ls_image_2'] : false,
            'img3'              => isset($fields['ls_image_3']) && is_array($fields['ls_image_3']) ? $fields['ls_image_3'] : false,
            'card' => $this->cardContent(isset($fields['ls_card']) && is_array($fields['ls_card']) ? $fields['ls_card'] : false),
        ];
    }

    function cardContent($card)
    {
        if (!$card) {
            return false;
        }

        return [
            'title' => $card['title'] ?? false,
            'content' => $card['content'] ?? false,
            'buttonUrl' => isset($card['call_to_action_button']) && is_array($card['call_to_action_button']) ? $card['call_to_action_button']['url'] : false,
            'buttonTitle' => isset($card['call_to_action_button']) && is_array($card['call_to_action_button']) ? $card['call_to_action_button']['title'] : false,
            'buttonTarget' => isset($card['call_to_action_button']) && is_array($card['call_to_action_button']) ? $card['call_to_action_button']['target'] : false,
            'showButtonIcon' => isset($card['showButtonIcon']) && is_array($card['showButtonIcon']) ?? false,
        ];
    }
}
