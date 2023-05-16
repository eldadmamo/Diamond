
jQuery(document).ready(function ($){
    $('.tabs').tabs({
        show:function (event,ui) {
            if($('#captcha', ui.panel).length) return;
        }
    });

    $('table tr:last', ui.panel).before($('#captcha'));

    $('#captcha script').remove();
});