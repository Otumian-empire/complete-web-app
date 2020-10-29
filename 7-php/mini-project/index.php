<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction to Bootstrap</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="alert" role="alert" id="alert"></div>

        <h1>Get in touch!</h1>

        <form id="form">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
            </div>
            <div class="form-group">
                <label for="message">What would you like to ask us?</label>
                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Enter message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="./jquery-3.5.1.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>

    <script>
        $(function() {
            $("#form").on("submit", (e) => {
                e.preventDefault();

                const email = $("#email").val();
                const subject = $("#subject").val();
                const message = $("#message").val();

                $("#alert").text("")
                $("#alert").removeClass("alert-danger");
                $("#alert").removeClass("alert-success");

                if (email.length > 0 && subject.length > 0 && message.length > 0) {
                    $.ajax({
                        method: "POST",
                        data: {
                            email,
                            subject,
                            message
                        },
                        url: "/7-php/mini-project/processform.php",
                        success: result => {
                            console.log(result)

                            let alert_type = result.code ? "alert-success" : "alert-danger";
                            $("#alert").text(result.message);
                            $("#alert").addClass(alert_type);

                            $("#email").val("");
                            $("#subject").val("");
                            $("#message").val("");
                        },
                        error: err => {
                            console.log(err)
                            $("#alert").text(err.responseJSON.message);
                            $("#alert").addClass("alert-danger");
                        }
                    })

                } else {
                    $("#alert").text("All fields are required");
                    $("#alert").addClass("alert-danger");
                }

            });
        });
    </script>
</body>

</html>