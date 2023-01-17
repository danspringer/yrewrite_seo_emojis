$(document).on('rex:ready', function (event, container) {

    // Emojis in YRewrite reinflanken
    $.ajax({
        url: "index.php?rex-api-call=yrewrite_seo_emojis",
        success: function (result) {
            var yrewrite_seo_emojis_label = '<label class="control-label" for="yform-yrewrite-seo-field-1">Emoji-Picker</label>';
            $('#yform-yrewrite-seo-yrewrite_description').append(yrewrite_seo_emojis_label + '<div class="well" id="yrewrite-seo-emojis-stage"></div><p class="yrewrite-seo-emojis-help-block"><spanclass="text-sm text-muted">Mit Bedacht verwenden! Nicht zuviele Emojis nutzen. Im Vorfeld informieren, welche Emojis auch in den Google-SERPS auftauchen!</span></p>')

            $(result).each(function (key, value) {
                //console.log(value);
                $('#yrewrite-seo-emojis-stage').append('<div class="yrewrite-seo-emoji-item" data-emoji="' + value + '">' + value + '</div>');
            })

        }
    });

    // Klickkrams
    $('#yform-yrewrite-seo-yrewrite_description').on('click', '.yrewrite-seo-emoji-item', function () {
        var text_content = $('#yform-yrewrite-seo-yrewrite_description #yform-yrewrite-seo-field-1').val();
        text_content = text_content + $(this).data('emoji');
        $('#yform-yrewrite-seo-yrewrite_description #yform-yrewrite-seo-field-1').val(text_content);
        $('#yform-yrewrite-seo-yrewrite_description #yform-yrewrite-seo-field-1').focus();
    });
});