<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Dettagli</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Homepage</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="/">Homepage</a></li>
          <li class="nav-item"><a class="nav-link" href="/Prodotti">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="/Contatti">Contacts</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card rounded-3 shadow-sm">
          <img
            src="https://picsum.photos/1920/1080/?blur=2"
            class="card-img-top rounded-top"
            alt="Immagine prodotto"
          />
          <div class="card-body">
            <h4>ID: {{ $card['id'] }}</h4>
            <h5 class="card-title">{{ $card['titolo'] }}</h5>
            <hr>
            <p class="card-text">{{ $card['para'] }}</p>
            <a href="#" class="btn btn-primary">{{ $card['button'] }}</a>
          </div>
        
        </div>
      </div>
    </div>
  </div>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
  ></script>
</body>
</html>
