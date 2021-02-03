<section>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="routes.php?route=">
            <img src="https://www.freelogodesign.org/file/app/client/thumb/bd113719-bb9d-45cf-9b10-042c84db8246_200x200.png?1611942974974"
                width="50" height="40" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="routes.php?route=">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="routes.php?route=about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="routes.php?route=load_main_page">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="routes.php?route=contact">Contact</a>
                </li>
                <li class="nav-item">

                    <?php if( !empty( $_SESSION['logged_user']  ) ){ ?>

                    <a class="nav-link" href="routes.php?route=logout">Logout</a>
                    <?php } else { ?>

                    <a class="nav-link" href="routes.php?route=login">Login</a>

                    <?php } ?>
                  
                </li>
                <li class="nav-item">

                    <?php if( !empty( $_SESSION['logged_user']  ) ){ ?>

                    <a class="nav-link" href="routes.php?route=messages">messages</a>
                    <?php } else { ?>


                    <?php } ?>
                  
                </li>
            </ul>
        </div>
    </nav>
</section>