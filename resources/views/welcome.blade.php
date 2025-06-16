<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatibile" content="ie-edge" />
        <title>Primo progetto Laravel</title>
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
            <li class="nav-item">
                <a class="nav-link" href="/Dettagli/1">Details</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
    <main>
      <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom">
          <a href="index.html" class="d-flex align-items-center text-dark text-decoration-none">
            <svg id="Layer_1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="40" height="32" data-name="Layer 1"><path d="m12 1c-7.71 0-11 3.29-11 11s3.29 11 11 11 11-3.29 11-11-3.29-11-11-11zm4.926 12.333c-.248 3.072-1.928 4.696-4.926 4.667-4.481 0-5-3.424-5-6s.519-6 5-6c2.375 0 3.863.918 4.549 2.806.188.519-.08 1.093-.599 1.281-.52.188-1.093-.08-1.281-.599-.324-.894-.902-1.488-2.669-1.488-1.99 0-3 .619-3 4s1.01 4 3 4c1.672 0 2.452-.491 2.792-1.881-.518-.065-1.145-.119-1.792-.119-.552 0-1-.448-1-1s.448-1 1-1c1.297 0 2.505.188 3.11.3.492.092.841.533.816 1.033z"/></svg>
            <span class="fs-4">Gianpierre Carreno Garcia</span>
          </a>
        </header>
        <div class="p-5 mb-4 bg-light rounded-3">
          <div class="container-fluid py-5">
            <h1 class="display-5 fw-bolder">Gianpierre Carreno</h1>
            <p class="col-md-8 fs-4 fst-italic">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
            <button class="btn btn-primary btn-lg" type="button">Example button</button>
          </div>
        </div>
      </div>
      <section>
        <div class="container text-center">      
          <div class="row">
            <div class="col-md-4 p-2">
              <div class="card m-1">
                <div class="card-body">
                  <svg xmlns="http://www.w3.org/2000/svg"  width="40" height="32 id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
  <path d="m10.984,8.296c.089.36-.212.704-.591.704h-4.786c-.379,0-.68-.344-.591-.704.324-1.317,1.537-2.296,2.984-2.296s2.66.979,2.984,2.296ZM.015,7.296c-.087.36.208.704.578.704h2.407v-.5c0-.98.407-1.864,1.058-2.5h-1.126C1.518,5,.332,5.979.015,7.296Zm15.392.704c.37,0,.665-.344.578-.704-.317-1.317-1.503-2.296-2.917-2.296h-1.126c.651.636,1.058,1.52,1.058,2.5v.5h2.407ZM3,4c1.105,0,2-.895,2-2s-.895-2-2-2S1,.895,1,2s.895,2,2,2Zm5,1c1.105,0,2-.895,2-2s-.895-2-2-2-2,.895-2,2,.895,2,2,2Zm5-1c1.105,0,2-.895,2-2s-.895-2-2-2-2,.895-2,2,.895,2,2,2Zm10.341,8.345l-7.702,8.409c-1.894,2.068-4.57,3.246-7.374,3.246h-4.262C1.794,24,.003,22.209.003,20v-5C.003,12.791,1.794,11,4.003,11h7.787c1.374,0,2.46,1.26,2.164,2.685-.193.926-1.004,1.598-1.94,1.732l-4.162.583c-.547.078-.927.585-.848,1.131.078.547.585.926,1.131.848l4.252-.596c2.062-.294,3.617-2.087,3.617-4.17,0-.219-.032-.429-.065-.638l3.541-3.737c.455-.5,1.097-.803,1.794-.835.692-.034,1.363.209,1.878.678,1.052.958,1.138,2.602.189,3.665Z"/>
</svg>
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="index.html" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 p-2">
              <div class="card m-1">
                <div class="card-body">
                  <svg xmlns="http://www.w3.org/2000/svg"  width="40" height="32 id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
  <path d="m10.984,8.296c.089.36-.212.704-.591.704h-4.786c-.379,0-.68-.344-.591-.704.324-1.317,1.537-2.296,2.984-2.296s2.66.979,2.984,2.296ZM.015,7.296c-.087.36.208.704.578.704h2.407v-.5c0-.98.407-1.864,1.058-2.5h-1.126C1.518,5,.332,5.979.015,7.296Zm15.392.704c.37,0,.665-.344.578-.704-.317-1.317-1.503-2.296-2.917-2.296h-1.126c.651.636,1.058,1.52,1.058,2.5v.5h2.407ZM3,4c1.105,0,2-.895,2-2s-.895-2-2-2S1,.895,1,2s.895,2,2,2Zm5,1c1.105,0,2-.895,2-2s-.895-2-2-2-2,.895-2,2,.895,2,2,2Zm5-1c1.105,0,2-.895,2-2s-.895-2-2-2-2,.895-2,2,.895,2,2,2Zm10.341,8.345l-7.702,8.409c-1.894,2.068-4.57,3.246-7.374,3.246h-4.262C1.794,24,.003,22.209.003,20v-5C.003,12.791,1.794,11,4.003,11h7.787c1.374,0,2.46,1.26,2.164,2.685-.193.926-1.004,1.598-1.94,1.732l-4.162.583c-.547.078-.927.585-.848,1.131.078.547.585.926,1.131.848l4.252-.596c2.062-.294,3.617-2.087,3.617-4.17,0-.219-.032-.429-.065-.638l3.541-3.737c.455-.5,1.097-.803,1.794-.835.692-.034,1.363.209,1.878.678,1.052.958,1.138,2.602.189,3.665Z"/>
</svg>
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="product.html" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-md-4 p-2">
              <div class="card m-1">
                <div class="card-body">
                  <svg xmlns="http://www.w3.org/2000/svg"  width="40" height="32 id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
  <path d="m10.984,8.296c.089.36-.212.704-.591.704h-4.786c-.379,0-.68-.344-.591-.704.324-1.317,1.537-2.296,2.984-2.296s2.66.979,2.984,2.296ZM.015,7.296c-.087.36.208.704.578.704h2.407v-.5c0-.98.407-1.864,1.058-2.5h-1.126C1.518,5,.332,5.979.015,7.296Zm15.392.704c.37,0,.665-.344.578-.704-.317-1.317-1.503-2.296-2.917-2.296h-1.126c.651.636,1.058,1.52,1.058,2.5v.5h2.407ZM3,4c1.105,0,2-.895,2-2s-.895-2-2-2S1,.895,1,2s.895,2,2,2Zm5,1c1.105,0,2-.895,2-2s-.895-2-2-2-2,.895-2,2,.895,2,2,2Zm5-1c1.105,0,2-.895,2-2s-.895-2-2-2-2,.895-2,2,.895,2,2,2Zm10.341,8.345l-7.702,8.409c-1.894,2.068-4.57,3.246-7.374,3.246h-4.262C1.794,24,.003,22.209.003,20v-5C.003,12.791,1.794,11,4.003,11h7.787c1.374,0,2.46,1.26,2.164,2.685-.193.926-1.004,1.598-1.94,1.732l-4.162.583c-.547.078-.927.585-.848,1.131.078.547.585.926,1.131.848l4.252-.596c2.062-.294,3.617-2.087,3.617-4.17,0-.219-.032-.429-.065-.638l3.541-3.737c.455-.5,1.097-.803,1.794-.835.692-.034,1.363.209,1.878.678,1.052.958,1.138,2.602.189,3.665Z"/>
</svg>
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="form.html" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
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
