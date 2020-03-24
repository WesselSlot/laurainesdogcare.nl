jQuery("Body").ready(function ($) {
    $("#contactForm").submit(function (e) {
        e.preventDefault();
        var data = Array($('#name').val(), $('#email').val(), $('#phone').val(), $('#message').val());
        $.post( ajax.url, {
            action: "send_form_action"
        }).done(function(msg){
            console.log(msg);
        }).fail(function(xhr, status, error) {
                console.log(xhr, status, error);
            });
    })
})