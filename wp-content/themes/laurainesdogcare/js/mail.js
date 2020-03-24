jQuery("Body").ready(function ($) {
    $("#contactForm").submit(function (e) {
        e.preventDefault();
        var data = [$('#name').val(), $('#email').val(), $('#phone').val(), $('#message').val()];
        $.post( ajax.url, {
            action: "send_form_action",
            data: data
        }, function(data) {
            console.log(data)
        });
    })
})