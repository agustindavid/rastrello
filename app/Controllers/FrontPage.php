<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function get_rooms() {
        $rooms= new \WP_Query(array('post_type'=>'room', 'post__not_in' => [198]));
        return array_map(function($room){
            return [
                'title'=>get_the_title($room->ID),
                'featured_img'=>get_the_post_thumbnail_url( $room->ID, 'full'),
                'link'=>get_permalink($room->ID),
            ];
        }, $rooms->posts);
    }
}
