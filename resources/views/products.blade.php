<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatibile" content="ie-edge" />
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
        <div class="d-flex justify-content-center my-5">
          <div class="card rounded-3 shadow-sm" style="width: 18rem">
            <img
              src="https://picsum.photos/1920/1080/?blur=2"
              class="card-img-top rounded-top"
              alt="Immagine prodotto"
            />
            <div class="card" style="width: 18rem;">
              @foreach ($cards as $card)
                <h5 class="card-title">{{$cards['title']}}</h5>
                <p class="card-text">
                  {{$cards['description']}}
                </p> 
                <a href="#" class="btn btn-primary">{{$cards['button']}}</a>
              @endforeach
              </ul>
      <!--    <h5 class="card-title">Cartolina 1</h5>
              <p class="card-text">
                Descrizione della cartolina. Questa è una breve descrizione che
                fornisce informazioni sulla cartolina
              </p> 
              <a href="#" class="btn btn-primary">Aggiungi al carrello</a> -->
            </div>
          </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
