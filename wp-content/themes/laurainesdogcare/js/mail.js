jQuery("Body").ready(function ($) {
    $("#contactForm").submit(function (e) {
        e.preventDefault();
        //var data = Array($('#name').val(), $('#email').val(), $('#phone').val(), $('#message').val());
        $.post( ajax.url, {
            action: "send_form_action",
            data: ""
        }, function(data) {
            console.log(data)
        });
    })
})