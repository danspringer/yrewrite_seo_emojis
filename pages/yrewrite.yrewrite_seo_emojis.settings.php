<?php
#
$addon = rex_addon::get('yrewrite_seo_emojis');

$form = rex_config_form::factory($addon->getName());

$field = $form->addTextAreaField('emojis', $addon->getConfig('emojis'),  ["class" => "form-control"]);

$field->setLabel(rex_i18n::msg('yrewrite_seo_emojis_config_label'));
$field->setNotice(rex_i18n::msg('yrewrite_seo_emojis_config_notice'));

$fragment = new rex_fragment();
$fragment->setVar('class', 'edit', false);
$fragment->setVar('title', $addon->i18n('yrewrite_seo_emojis_config'), false);
$fragment->setVar('body', $form->get(), false);
echo $fragment->parse('core/page/section.php');


$fragment = new rex_fragment();
echo $fragment->parse('yrewrite-seo-emojis-examples.php');
?>

