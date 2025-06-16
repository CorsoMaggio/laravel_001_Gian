<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie-edge" />
        <title>Prodotti</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
            crossorigin="anonymous"
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
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/">Homepage</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Prodotti">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Contatti">Contacts</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>  
        <div class="container my-5">
            <div class="row justify-content-center">
                @foreach ($cards as $card)
                <div class="col-md-4 mb-4"> <div class="card rounded-3 shadow-sm h-100"> <img
                            src="https://picsum.photos/1920/1080/?blur=2"
                            class="card-img-top rounded-top"
                            alt="Immagine prodotto"
                        />
                        <div class="card-body"> <h5 class="card-title">{{$card['titolo']}}</h5>
                            <p class="card-text">
                                {{$card['para']}}
                            </p> 
                            <a href="#" class="btn btn-primary">{{$card['button']}}</a> 
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
