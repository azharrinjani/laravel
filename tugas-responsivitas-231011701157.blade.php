<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Azhar Cars</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
      .card {
        height: 100%;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      .card-body {
        text-align: center;
        padding: 10px;
      }
      .card-text {
        font-size: 1.1rem;
        font-weight: 500;
        color: #333;
      }
      .card-img-top {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
      }

      .gallery-item {
        margin-bottom: 20px;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Rekayasa Web</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#main-section">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="main-section" class="container-fluid text-center py-5">
      <h1 class="display-4">The Best of Azhar Cars</h1>
      <p class="lead">Explore the world of high-performance Japanese cars, from the Nissan GT-R to the Toyota Supra.</p>
      <img src="{{ asset('gambar/20190517_01_03_s.jpg') }}" class="img-fluid" alt="JDM Car Image" />
    </section>

    <section id="gallery" class="container py-5">
      <h2 class="text-center mb-4">Gallery</h2>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 gallery-item">
          <div class="card">
            <img src="{{ asset('gambar/2311-Toyota-GR-Supra-2.0-Trim.jpg') }}" class="card-img-top" alt="Toyota GR Supra 2.0 Trim" />
            <div class="card-body">
              <p class="card-text">Toyota GR Supra 2.0 Trim</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 gallery-item">
          <div class="card">
            <img src="{{ asset('gambar/2022-gr-supra-nitro-yellow.png') }}" class="card-img-top" alt="2022 GR Supra Nitro Yellow" />
            <div class="card-body">
              <p class="card-text">2022 GR Supra Nitro Yellow</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 gallery-item">
          <div class="card">
            <img src="{{ asset('gambar/Ice-Silver-Metallic.png') }}" class="card-img-top" alt="Ice Silver Metallic Subaru WRX" />
            <div class="card-body">
              <p class="card-text">Ice Silver Metallic Subaru WRX</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 gallery-item">
            <div class="card">
              <img src="{{ asset('gambar/Crystal-White-Pearl.png') }}" class="card-img-top" alt="Crystal White Pearl" />
              <div class="card-body">
                <p class="card-text">Crystal White Pearl</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 gallery-item">
            <div class="card">
              <img src="{{ asset('gambar/supra-16ee.png') }}" class="card-img-top" alt="Supra-16ee" />
              <div class="card-body">
                <p class="card-text">Supra GR Corolla</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 gallery-item">
            <div class="card">
              <img src="{{ asset('gambar/ced2c11da393bc144828e5ffacd77789-cc_2024TOC360004_01_1280_0D01-730x548.png') }}" class="card-img-top" alt="Toyota Supra Classic" />
              <div class="card-body">
                <p class="card-text">Toyota Supra Classic</p>
              </div>
            </div>
          </div>

    <footer id="contact" class="bg-dark text-light text-center py-3">
      <p>Contact us: azharrinjani@jdmcars.co.id</p>
      <p>&copy; 2024 Rekayasa Web</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>