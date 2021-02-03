<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>

.container{
    margin:50px;
}
</style>
</head>

<body>
    <?php include( project_root.'/includes/navbar.php' ); ?>

    <div class="container">
        <div class="row">
        <?php foreach($form as $k=>$item){ ?>
       
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="photos/cardback.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item['name']?></h5>
                        <p class="card-text"><?php echo $item['message']?></p>
                    </div>
                </div>
            </div>

            <?php }?>
        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>