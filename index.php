<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script    src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Blog</title>
  </head>
  <body>    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
        <a class="navbar-brand" href="index.php">Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home 
                <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog.php">Blog</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" 
            aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" 
            type="submit">Search</button>
            </form>
        </div>
      </div>

  </nav>
    <section id="carousel-item">        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" 
              class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/slide-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/slide-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/slide-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl 
                  consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" 
              role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" 
              role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
</section>
    <section id="notes-item">
    <div class="container">
            <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">Selamat Datang<span 
                  class="text-muted"> di Blog Kami</span></h2>
                  <p class="lead">Donec ullamcorper nulla non metus auctor fringilla.
                Vestibulum id ligula porta felis euismod semper. Praesent commodo 
                cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, 
                tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img src="img/undraw_book_lover_mkck.png" 
                     class="img-fluid mx-auto featurette-image">
                </div>
            </div>
            <hr class="featurette-divider"> 
        </div>
    </section>
    <section id="blog-item"class="mb-4">
    <div class="container">
            <h2>Blog Terbaru</h2><br>
            <div class="row mb-2">
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden 
                    flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static 
                        bg-light">
                        <strong class="d-inline-block mb-2 text-success">World</strong>
                        <h3 class="mb-0"><a href="detailblog.php">Rekomendasi Makanan Enak di Malang, no 8 wajib kamu coba!!! </a></h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="img/blog.jpg" class="img-fluid" 
                           title="blog title">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden 
                        flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static 
                         bg-light">
                        <strong class="d-inline-block mb-2 text-success">
                        Design</strong>
                        <h3 class="mb-0"><a href="detailblog.php">3 Cara Paling Ampuh untuk memanggil tukang bakso, no 3 Bikin Kaget!!!</a></h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="img/blog.jpg" class="img-fluid" 
                             title="blog title here">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden 
                     flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static 
                        bg-light">
                        <strong class="d-inline-block mb-2 text-success">World</strong>
                        <h3 class="mb-0"><a href="detailblog.php">Maecenas id sapien 
                        nec diam pellentesque porta eu interdum ante</a></h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="img/blog.jpg" class="img-fluid" title="blog title 
                             here">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden 
                    flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static 
                        bg-light">
                        <strong class="d-inline-block mb-2 text-success">
                        Design</strong>
                        <h3 class="mb-0"><a href="detailblog.php">10 Manusia terkaya di Bumi, No 11 gaada karena hanya 10 hehe.</a></h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="img/blog.jpg" class="img-fluid" title="blog title 
                              here">
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <footer class="bg-primary text-dark">
    <div class="container">
          <p class="float-right">
            <a href="#" class="text-white">Back to top</a>
          </p>
          <p>&copy; <b>2021 Vokasi UB.</b> All rights reserved.</p>
        </div>
    </footer>
</body>
  </html>
  <link rel="stylesheet" href="style.css">