<?php

class rex_api_yrewrite_seo_emojis extends rex_api_function
{
    protected $published = false;  // Aufruf aus dem Frontend erlaubt

    function execute()
    {
        $emojis =  yrewrite_seo_emoijs::get();
        rex_response::setStatus(200);
        rex_response::sendJson(
            $emojis
        );
        exit();
    }
}


?>