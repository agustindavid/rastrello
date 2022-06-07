<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
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
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function get_current_lang() {
        session_start();

            $url_lang=$_GET['c_lang'];

        if(!(isset($_SESSION['language']))){
            if(($_GET['c_lang'])) {
                $url_lang=$_GET['c_lang'];
                $_SESSION["language"] = $url_lang;
                return $url_lang;
            } else {
                $url_lang='en_US';
                $_SESSION["language"] = $url_lang;
                return $url_lang;
            }
        } else {
            if(($_GET['c_lang'])) {
                $url_lang=$_GET['c_lang'];
                unset($_SESSION['language']);
                $_SESSION["language"] = $url_lang;
                return $url_lang;
            } else {
                $url_lang=$_SESSION['language'];
                return $url_lang;
            }
        }
    }
}
