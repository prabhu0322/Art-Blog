<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indu Katageri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <style>
    #cover {
        height: 500px;
        width: 100%;
        object-fit: cover;
    }

    .display-4 {
        margin-bottom: 25px;
    }

    .image {
        margin-bottom: 20px;
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .cont {
        position: relative;
        text-align: center;
        color: white;
    }

    #blockquote {
        color: black;
    }

    .space {
        margin-bottom: 30px;
    }

    .popular-course-container .services-title {
        width: 350px;
        height: 250px;
    }

    .view_more>h4>a:hover {
        /* background-color: black; */
        background: url(photos/cover.jpg);
        color: black;
        border-radius: 5px;
        transition: 1s;
        font-size: 30px;

    }

    .mandala {
        border: 1px;
        border-radius: 10px;
        /* margin: 50px; */
        /* width: 70%;
        margin-left: 180px; */
        margin-left: 20px;
        margin-right:20px;
        background: url(photos/mandalaback.jpg);
    }

    .popular-course-container {
        width: 100%:
    }
    </style>
    <?php include( project_root.'/includes/footer_links.php' ); ?>

</head>

<body>
    <?php include( project_root.'/includes/navbar.php' ); ?>



    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4" id="blockquote">What do we do?</h1>
            <blockquote class="blockquote text-center">
                <p class="mb-0" id="blockquote">Artists like to stay engrossed in their world of creating new art most
                    of the time. The explore, discover and create new ways of transforming ideas into form. However,
                    it’s also crucial for them to reach out and connect to the outside world to showcase their art, find
                    more work, and get paid for their work.
                </p>
                <footer class="blockquote-footer"><cite title="Source Title">Indu Katageri</cite>
                </footer>
            </blockquote>
        </div>
    </div>
    <h1 class="display-4 text-center">Creative Mandala Art Works</h1>

    <div class="cont">
        <div class="image">
            <img src="photos/cover.jpg" class="img-fluid" alt="Responsive image" id="cover">
            <div class="centered display-4 font-weight-bold" id="blockquote">Artworks that never extinct</div>
        </div>
    </div>
    <div class="space"></div>
    <h1 class="display-4 text-center">Some of my arts</h1>
    <div class="space"></div>


    <!-- latest post container -->

    <div class="container popular-course-container">
        <div class="row" id="post">

        </div>
        <div class="space"></div>
        <div class="view_more">
            <h4 class="text-center"><a href="routes.php?route=load_main_page"
                    class="text-decoration-none font-italic text-monospace text-secondary"><span>view more</span></a>
            </h4>
        </div>
        <div class="space"></div>
    </div>

    <!-- content -->
    <h1 class="display-4 text-center" style="background-color:grey;width:50%;margin-left:350px;">About Mandala</h1>

    <div class="mandala">
        <div class="row">
            <div class="col-lg-6">
                <h3 style="text-align: center;padding-top:50px;">What is Mandala?</h3>

            </div>
            <div class="col-lg-6">
                <p>A mandala is a complex abstract design that is usually circular in form. In fact, "mandala" is a
                    Sanskrit word that means "circle". Mandalas generally have one identifiable center point, from which
                    emanates an array of symbols, shapes and forms.</p>
                <p>Mandalas can contain both geometric and organic forms. They can also contain recognizable images that
                    carry meaning for the person who is creating it.</p>
            </div>
        </div>
    </div>
    <div class="space"></div>
    <div class="space"></div>

    <div class="container">
        <div class="draw">
        <div class="row">
            <div class="col-lg-6">
            <h4 style="padding-top:100px;">A Mandala Art Would Look Like -></h4>
            </div>
            <div class="col-lg-6">
            <img src="photos/mandala.jpg" class="img-fluid" alt="Responsive image" style="border-radius:10px;">
            </div>
        </div>
        </div>
    </div>
    <div class="space"></div>
    <div class="space"></div>

    <?php include( project_root.'/includes/footer.php' ); ?>


    <script>
    $('document').ready(function() {
        load();
    });

    function load() {
        $.ajax({
            "type": "GET",
            "url": "routes.php?route=getLatest",
            "data": {},
            "success": function(d) {
                let items = JSON.parse(d);
                let content = ``;
                if (items['post_latest'].length) {
                    for (let item of items['post_latest']) {
                        content += `

                        <div class="col-lg-4" >
                           <img src="photos/${item['file_path']}" alt="" width="200" height="200">
                        </div>
                
                        `;
                    }
                }
                document.getElementById('post').innerHTML = content;

            }
        });
    }

   
    </script>
</body>

</html>