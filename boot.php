<?php
// SEO-Emojis fuer YRewrite einfügen
$addon = rex_addon::get('yrewrite_seo_emojis');
if (rex::isBackend() && rex_request('page') == 'content/edit') {
    rex_view::addCssFile($addon->getAssetsUrl('emoji-picker.css'));
    rex_view::addJsFile($addon->getAssetsUrl('emoji-picker.js'));
}