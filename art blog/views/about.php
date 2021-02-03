<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
}

html {
    box-sizing: border-box;
}

*,
*:before,
*:after {
    box-sizing: inherit;
}

.column {
    float: left;
    width: 33.3%;
    margin-bottom: 16px;
    padding: 0 8px;
    margin-left: 450px;
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 8px;
}

.about-section {
    padding: 50px;
    text-align: center;
    background-color: #474e5d;
    color: white;
}

.container {
    padding: 0 16px;
}

.container::after,
.row::after {
    content: "";
    clear: both;
    display: table;
}

.title {
    color: grey;
}

.button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
}

.button:hover {
    background-color: #555;
}

@media screen and (max-width: 650px) {
    .column {
        width: 100%;
        display: block;

    }
}
</style>

<body>
    <?php include( project_root.'/includes/navbar.php' ); ?>
    <div class="about-section">
        <h1>About Me</h1>
        <p>I'm a student with great passion for Mandala Arts</p>
        <p>Want a talk with me?Then click down &nbsp;<a href="routes.php?route=contact" style="color:white;">
                <h5>contact.</h5>
            </a></p>
    </div>

    <h2 style="text-align:center;margin-top:20px;">I Look Like!!&#128516;</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="photos/indu.jpeg" alt="Jane" style="width:100%">
                <div class="container">
                    <h2 style="padding-top:10px;">Indu Katageri</h2>
                    <p class="title">Artist</p>
                    <p>Mandal Arts By Indu, Founder</p>
                    <p>indukatageri@gmail.com</p>

                </div>
            </div>
        </div>

    </div>
    <?php include( project_root.'/includes/footer.php' ); ?>
    <?php include( project_root.'/includes/footer_links.php' ); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>