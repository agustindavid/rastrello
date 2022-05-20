<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleRoom extends Controller
{
    public function get_images()
    {
        return get_field('images');
    }

    public function get_features()
    {
        return get_field('features');
    }

    public function get_single_rooms() {
        $rooms= new \WP_Query(array('post_type'=>'room'));
        return array_map(function($room){
            return [
                'title'=>get_the_title($room->ID),
                'featured_img'=>get_the_post_thumbnail_url( $room->ID, 'full'),
                'link'=>get_permalink($room->ID),
            ];
        }, $rooms->posts);
    }
}
