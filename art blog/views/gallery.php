<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <?php include( project_root.'/includes/footer_links.php' ); ?>
    <style>
    .container{
        margin-top : 20px;
    }

    .col-lg-4{
        margin-bottom: 25px;
    }
    </style>
</head>

<body>
    <?php include( project_root.'/includes/navbar.php' ); ?>

    <div class="display-4 text-center">My Arts</div>
    <div class="container">
        <div class="row" id="post-container">

        <?php foreach($form as $key => $item){ ?>

        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img src="photos/<?php echo $item['file_path'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $item['description'] ?></p>
                    </div>
            </div>
            
        </div>

        <?php }?>

        </div>
    </div>
    <?php include( project_root.'/includes/footer.php' ); ?>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script>
    $('document'.ready(function) {
        //load_data();
    });

    function load_data() {

        $.ajax({
            "type": "GET",
            "url": "routes.php?route=load_main_page",
            "data": {},
            "success": function(d) {
                let items = JSON.parse(d);
                console.log(items);
                let content = ``;

                if (items['post_list'].length) {
                    for (let item of items['post_list']) {

                        content+= `

                    <div class="col-lg-4 col-md-3 col-sm-2">
                        <div class="card" style="width: 18rem;">
                            <img src="photos/${item['file_path']}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <p class="card-text">${item['description']}</p>
                            </div>
                        </div>
                    </div>
                                
                                
                                `;
                    }
                } else {
                    content = `<div class="col-md-12" >Products not found. </div>`;
                }

                document.getElementById('post-container').innerHTML = content;

            },

        });
    }
    </script>
</body>

</html>