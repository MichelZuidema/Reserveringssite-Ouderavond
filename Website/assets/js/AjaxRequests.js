$('document').ready(function() {
    $('.login__submit').click(function() {
        var username = $('#login--username').val();
        var password = $('#login--password').val();

        $.ajax({
            url: 'assets/db/Processors/mentorLogin.php',
            method: 'POST',
            data: {
                'submit': 'submit',
                'username': username,
                'password': password,
            }
        })
            .done(function (data) {
                if(data == "OK") {
                    alert("Logged in!");
                    location.reload();
                } else {
                    alert("noob");
                }
            });
    });
});