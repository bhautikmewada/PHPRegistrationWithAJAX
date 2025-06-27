<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.22.1/sweetalert2.min.css"
        integrity="sha512-bkb9OVJFbnXaSi8PvT9arbq1WSE9QCDkLse1RqPlhnRqmH16CgmL9HAd0W99NYfVIp66gZb4k+L1jOr+JuT8Og=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <form class="w-50 offset-3 mt-5 myform">
        <div class="mb-3">
            <label for="Email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="Email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="Password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="agree">
            <label class="form-check-label" for="agree">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.22.1/sweetalert2.min.js"
        integrity="sha512-cMwLQB9JnJ/HLZe45MY2OXAzH7kfE4G/xslcOpyqS+iH6IxFk4SkBPeNJPR/ECnCACZg4f88KMllx3AWC5Eipw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <script>
    // 1. Select the form
    $('form.myform').submit(function(e) {
        e.preventDefault();
        // alert('form submitted');

        // Stop Page Refresh
        //

        // Collect the Data from Form
        var email = $('input#Email').val();
        let password = $('input#Password').val();
        const agree = $('input#agree').val();

        console.log(email);
        console.log(password);
        console.log(agree);

        var d = {
            action: "Registration",
            e: email,
            p: password,
            a: agree
        }

        $.ajax({
            url: "http://localhost/advanceRegistrationWithAJAX/api.php",
            type: "GET",
            data: d,
            beforeSend: function(xhr) {
                //alert("Earlier Message before Send");
            },
            success: function(result, status, xhr) {
                //alert("Success"); DATA Receive Block
                console.log('Result is ' + result);
                Swal.fire({
                    title: "Good job!",
                    text: result,
                    icon: "success"
                });
            },
            error: function(xhr, status, error) {

            },
            complete: function(xhr, status) {

            }
        });
    });


    // Check if the page is loaded successfully
    //1 ()();
    (function($) {
        //alert("Successfully Loading");

    })(jQuery);
    </script>
</body>

</html>