<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Сайт визитка</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Домой <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/portfolio">Портфолио</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/about">О нас</a>
                            <a class="dropdown-item" href="/contacts">Контакты</a>
                        </div>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/assets/images/ximage-e1604326225486.png.pagespeed.ic.tdNANZqwim.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/assets/images/mini_magick20180202-74-1oxq91c.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/assets/images/Screenshot_3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php include 'application/views/' . $content_view; ?>
            </div>
        </div>

    </main>
    <footer>
        <div class="container-fluid">
            <div class="card">
                <div class="row mb-4 ">
                    <div class="col-md-4 col-sm-11 col-xs-11">
                        <div class="footer-text pull-left">
                            <div class="d-flex">
                                <h1 class="font-weight-bold mr-2 px-3" style="color:#16151a; background-color:#957bda"> T </h1>
                                <h1 style="color: #957bda">Devs</h1>
                            </div>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi non pariatur numquam animi nam at impedit odit nisi.</p>
                            <div class="social mt-2 mb-3"> <i class="fa fa-facebook-official fa-lg"></i> <i class="fa fa-instagram fa-lg"></i> <i class="fa fa-twitter fa-lg"></i> <i class="fa fa-linkedin-square fa-lg"></i> <i class="fa fa-facebook"></i> </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-1 col-xs-1 mb-2"></div>
                    <div class="col-md-2 col-sm-4 col-xs-4">
                        <h5 class="heading">Services</h5>
                        <ul>
                            <li>IT Consulting -</li>
                            <li>Development</li>
                            <li>Cloud</li>
                            <li>DevOps & Support</li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-4">
                        <h5 class="heading">Industries</h5>
                        <ul class="card-text">
                            <li>Finance</li>
                            <li>Public Sector</li>
                            <li>Smart Office</li>
                            <li>Retail</li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-4">
                        <h5 class="heading">Company</h5>
                        <ul class="card-text">
                            <li>About Us</li>
                            <li>Blog</li>
                            <li>Contact</li>
                            <li>Join Us</li>
                        </ul>
                    </div>
                </div>
                <div class="divider mb-4"> </div>
                <div class="row" style="font-size:10px;">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="pull-left">
                            <p><i class="fa fa-copyright"></i> 202q oneal</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="pull-right mr-4 d-flex policy">
                            <div>Terms of Use</div>
                            <div>Privacy Policy</div>
                            <div>Cookie Policy</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>