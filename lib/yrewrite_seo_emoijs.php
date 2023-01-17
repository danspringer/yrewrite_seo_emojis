<?php

class yrewrite_seo_emoijs
{
    public static function get()
    {
        $emojis = rex_addon::get('yrewrite_seo_emojis')->getConfig('emojis');
        $emojis = str_replace('\r', '', $emojis);
        $emojis = str_replace('\n', '', $emojis);
        $emojis = str_replace(' ', '', $emojis);
        return explode(';',$emojis);
    }
}