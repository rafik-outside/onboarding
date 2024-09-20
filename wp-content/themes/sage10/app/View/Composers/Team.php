<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Team extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'blocks.team'
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
            'eyebrow'   => $fields['eyebrow'] ?? false,
            'teams'     => $this->teamContent((isset($fields['members']) && is_array($fields['members']) && !empty($fields['members'])) ? $fields['members'] : false),
        ];
    }

    function teamContent($teams)
    {
        if (!$teams) return;
        foreach ($teams as $team) {
            $teamArray[]  = [
                'imgUrl'    => (isset($team['image']) && is_array($team['image']) && !empty($team['image'])) ? $team['image']['url'] : false,
                'imgAlt'    => (isset($team['image']) && is_array($team['image']) && !empty($team['image'])) ? $team['image']['alt'] : false,
                'title'     => isset($team['title']) && !empty($team['title']) ? $team['title'] : false,
                'content'   => isset($team['content']) && !empty($team['content']) ? $team['content'] : false,
            ];
        }
        return $teamArray;
    }
}
