<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">   

    <style>
    form {
        border: 3px solid #f1f1f1;
    }

    /* Full-width inputs */

    /* Set a style for all buttons */
    button {
        background-color: grey;
        color: white;
        padding: 14px 20px;
        margin-left: 250px;
        border: none;
        cursor: pointer;
        width: 50%;

    }

    /* Add a hover effect for buttons */
    button:hover {
        opacity: 0.8;
    }

    /* Extra style for the cancel button (red) */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    /* Center the avatar image inside this container */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    /* Avatar image */
    img.avatar {
        width: 20%;
        border-radius: 50%;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
    }

    /* The "Forgot password" text */
    span.psw {
        float: right;
        padding-top: 16px;
    }

    .form-group {
        width: 50%;
        margin-left: 250px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }

        .form-group {
            width: 50%;
        }
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="display-4 text-center">Admin Login</div>
    </div>
    <div class="container">

        <form action="routes.php?route=login-process" method="post" enctype="multipart/form-data">
            <div class="imgcontainer">
                <img src="photos/indu.jpeg" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <div class="form-group">
                    <label for="formGroupExampleInput">Hello, Admin</label>
                    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="name"
                        required>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Password</label>
                    <input type="password" name="password" class="form-control" id="formGroupExampleInput"
                        placeholder="Enter Password" required>
                </div>


                <button type="submit">Login</button>

            </div>

        </form>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



    <script>
   
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

   

    $(document).ready(function() {
        <?php if( isset( $_GET['success'] ) ){ ?>
            <?php if( $_GET['success'] == "1" ){ ?>
            toastr.info('<?php echo ( !empty( $_GET['msg'] ) )? $_GET['msg'] : ''; ?>');
            <?php } ?>
            <?php if( $_GET['success'] == "0" ){
            ?>
            toastr.error('<?php echo ( !empty( $_GET['msg'] ) )? $_GET['msg'] : ''; ?>');
            <?php
            } ?>
        <?php } ?>
    });
    </script>
</body>

</html>