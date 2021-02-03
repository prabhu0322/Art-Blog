
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <style>
    .form-title h2 {
        font-size: 25px;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        margin-top: 16px;
    }



    .sub-btn,
    .btn {
        color: rgb(24, 24, 37);
        font-weight: bold;

    }

    .create-form {
        margin-left: 25%;
        width: 50%;

    }
    </style>
</head>

<body>
    <?php include( project_root.'/includes/navbar.php' ); ?>



    <!-- form to create items in the bucket--------------------------- -->

    <div class="form-title">
        <h2>Hey Indu, Wanna Add Some More...</h2>
    </div>

    <div class="create-form">
        <form action="routes.php?route=addToDB" method="post" enctype="multipart/form-data">
            <input type="hidden" name="post_id"
                value="<?php echo ( !empty( $form['post_id'] ) )? $form['post_id'] : ''; ?>">
            <div class="form-group">
                <label for="formGroupExampleInput">Tag Line</label>
                <input type="text" name="tagline" class="form-control" id="formGroupExampleInput"
                    placeholder="Post Tagline..."
                    value="<?php echo ( !empty( $form['tagline'] ) )? $form['tagline'] : ''; ?>">
            </div>

           
            <div class="form-group">
                <label for="formGroupExampleInput">Product Description</label><br>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                    placeholder="Type here..."
                    rows="3"><?php echo ( !empty( $form['description'] ) )? $form['description'] : ''; ?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Post Upload</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file"
                    value="<?php echo ( !empty( $form['image'] ) )? $form['image'] : ''; ?>">
            </div>
            <div class="sub-btn">
                <center><button type="submit" class="btn btn-light border border-dark" id="sbt-btn">Add</button></center>
            </div>

        </form>

    </div>
    <p id="render-txt" style="text-align: center;"></p>



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