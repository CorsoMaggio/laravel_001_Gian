<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatibile" content="ie-edge" />
        <title>Form</title>
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
      <div class="row">
        <div class="col-md-6">
          <h2>Contattaci</h2>
          <form>
            <div class="form-group mb-3">
              <label for="name">Nome:</label>
              <input
                type="text"
                class="form-control"
                id="name"
                placeholder="Inserisci il tuo name"
                required
              />
            </div>
            <div class="form-group mb-3">
              <label for="email">Email:</label>
              <input
                type="email"
                class="form-control"
                id="email"
                placeholder="Inserisci la tua email"
                required
              />
            </div>
            <div class="form-group mb-3">
              <label for="message">Extra:</label>
              <textarea
                class="form-control"
                id="message"
                rows="3"
                placeholder="Informazioni in più"
                required
              ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
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
