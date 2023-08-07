<?php
/**
 * Plugin Name: ChatGPT blocker
 * Description: Blocks ChatGPT from crawling your website and learning from it.
 * Version: 1.0
 * Author: Mazdak Pakaghideh
 */

add_filter('robots_txt', 'ChatGPT_blocker', 10, 2);

function ChatGPT_blocker($robotstxt, $public) {
    $custom_rules  = "=====ChatGPT Blocker=====\n";
    $custom_rules .= "User-agent: GPTBot\n";
    $custom_rules .= "Disallow: /\n";
    $custom_rules  .= "=====ChatGPT Blocker=====\n";

    return $robotstxt . $custom_rules;
}
?>

