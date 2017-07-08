$(function() {

    $("input[name='user_frist]").blur(function() {
        if ($(this).val() == "") {
            $(this).css('border', 'solid 2px red');

        }
    });

    $("input").keydown(function() {
        if ($(this).val() == "") {
            $(this).css('border', 'solid 1px #777');
            $("b").remove();
        }
    });

    $("input[name='user_last]").blur(function() {
        if ($(this).val() == "") {
            $(this).css('border', 'solid 2px red');

        }
    });
    $("input[name='user_email]").blur(function() {
        if ($(this).val() == "") {
            $(this).css('border', 'solid 2px red');

        }
    });
    $("input[name='user_uid]").blur(function() {
        if ($(this).val() == "") {
            $(this).css('border', 'solid 2px red');

        }
    });
    $("input[name='user_password]").blur(function() {
        if ($(this).val() == "") {
            $(this).css('border', 'solid 2px red');

        }
    });
    $("button[name='singup']").click(function() {
        var user_frist = $("input[name='user_frist").val();
        var user_last = $("input[name='user_last").val();
        var user_email = $("input[name='user_email").val();
        var user_uid = $("input[name='user_uid").val();
        var user_password = $("input[name='user_password").val();
        if (user_frist == '') {
            event.preventDefault();
            $("label[for='user_frist']").replaceWith(" <label  for=\"user_frist\">Frist Name: <b style=\"color: red\">frist Name requre !</b></label>");
        }
        if (user_frist == '') {
            event.preventDefault();
            $("label[for='user_frist']").replaceWith(" <label  for=\"user_frist\">Frist Name: <b style=\"color: red\">frist Name requre !</b></label>");
        }
        if (user_last == '') {
            event.preventDefault();
            $("label[for='user_last']").replaceWith(" <label style=\"bold\" for=\"user_last\">Last Name: <b style=\"color: red\">Last Name requre !</b></label>");
        }
        if (user_email == '') {
            event.preventDefault();
            $("label[for='user_email']").replaceWith(" <label style=\"bold\" for=\"user_email\">E-mail: <b style=\"color: red\">E-mail requre !</b></label>");
        }
        if (user_uid == '') {
            event.preventDefault();
            $("label[for='user_uid']").replaceWith(" <label style=\"bold\" for=\"user_uid\">Username: <b style=\"color: red\">Username requre !</b></label>");
        }
        if (user_password == '') {
            event.preventDefault();
            $("label[for='user_password']").replaceWith(" <label style=\"bold\" for=\"user_password\">Password: <b style=\"color: red\">Password requre !</b></label>");
        }


    });

    $("input[name='Name']").blur(function() {
        if ($(this).val() == "") {
            $(this).css('border', 'solid 2px red');

        }
    });
    $("textarea[name='description']").blur(function() {
        if ($(this).val() == "") {
            $(this).css('border', 'solid 2px red');

        }
    });
    $("input[name='finishing_date']").blur(function() {
        if ($(this).val() == "") {
            $(this).css('border', 'solid 2px red');

        }
    });
    $("button[name='submit']").click(function() {
        var Name = $("input[name='Name").val();
        var description = $("textarea[name='description").val();
        var finishing_date = $("input[name='finishing_date").val();

        if (Name == '') {
            event.preventDefault();
            $("label[for='Name']").replaceWith(" <label  for=\"Name\">Name: <b style=\"color: red\">Task Name requre !</b></label>");
        }
        if (description == '') {
            event.preventDefault();
            $("label[for='description']").replaceWith(" <label  for=\"description\">Description: <b style=\"color: red\">Description requre !</b></label>");
        }
        if (finishing_date == '') {
            event.preventDefault();
            $("label[for='finishing_date']").replaceWith(" <label style=\"bold\" for=\"finishing_date\">Finishing Date: <b style=\"color: red\">Finishing Date requre !</b></label>");
        }



    });

});