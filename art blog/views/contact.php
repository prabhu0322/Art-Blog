<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    .container {
        padding-right:200px;
        padding-left:200px;
    }
    .text-right{
        float:right;
        font-family:fantasy;
       
    }

    .text-right > a > small{
        color:cornflowerblue;
    }
    .btn{
        background-color:cornflowerblue;
    }
    .font-weight-bolder{
        color:cornflowerblue;
        padding-left:15px;
    }
    </style>

</head>

<body>
<?php include( project_root.'/includes/navbar.php' ); ?>

    <div class="container">
        <div class="text-center">
            <img src="https://www.freelogodesign.org/file/app/client/thumb/bd113719-bb9d-45cf-9b10-042c84db8246_200x200.png?1611942974974"
                class="rounded" alt="..." width="100px" height="100px">
                <p class="font-weight-bolder">Contact Us</p>
        </div>
        <form action="routes.php?route=contact-process" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="exampleInput1" for="exampleCheck1">Name</label>
                <input type="text" class="form-control" id="exampleCheck1" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Message</label><br>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1"
                    placeholder="Type here..." rows="3"></textarea>
            </div>
            <div>
            <center><button type="submit" class="btn">Submit</button></center>
            </div>
            <div class="text-center" style="margin-top:20px;">
             <p>Art works by Indu.</p>
            </div>
        </form>
    </div>
    <?php include( project_root.'/includes/footer.php' ); ?>
    <?php include( project_root.'/includes/footer_links.php' ); ?>
</body>

</html>