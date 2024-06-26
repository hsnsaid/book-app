<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body class="overflow-x-hidden">
    <nav class="navbar navbar-expand-lg border-bottom-grey px-5 shadow-sm bg-green-secondary">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-4 text-white" href="#">Ghezyid eBook</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!--
            <form class="input-group ms-5" style="width: 50%" role="search">
            <select class="form-select">
              <option value="">Catégorie</option>
              <option value="">Fiction</option>
              <option value="">Science Fiction</option>
              <option value="">Young Adult</option>
              <option value="">Children's Books</option>
            </select>
            <input
              class="form-control w-50"
              type="search"
              placeholder="Titre du livre"
              aria-label="Search"
            />
            <button class="btn bg-light" type="submit">
              <i class="bi bi-search text-success"></i>
            </button>
          </form>
           -->

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="btn bg-white px-3 me-2 rounded-4" href="#">Se connecter</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn text-white" href="#">S'inscrire</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="row">
        <section class="col-3 bg-lighter shadow">
            <div class="px-4">
                <div style="margin-top: 5rem !important">
                    <div class="input-group shadow-sm">
                        <input type="text" class="form-control" />
                        <div class="input-group-text bg-green">
                            <i class="bi bi-search text-white"></i>
                        </div>
                    </div>
                </div>
                <div id="categorie">
                    <h5 class="mt-5 fw-bold">Catégorie</h5>
                    <hr />
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input border-secondary" />
                        <label class="form-check-label">Anime</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input border-secondary" />
                        <label class="form-check-label">Enfant</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input border-secondary" />
                        <label class="form-check-label">Histoire</label>
                    </div>
                </div>
                <div id="language" class="mt-4">
                    <h5 class="mt-5 fw-bold">Language</h5>
                    <hr />
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input border-secondary" />
                        <label class="form-check-label">Arabic</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input border-secondary" />
                        <label class="form-check-label">English</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input border-secondary" />
                        <label class="form-check-label">French</label>
                    </div>
                </div>
            </div>
        </section>
        <section class="col-9 row g-4 pb-5">
            <a class="col-4 text-decoration-none" href="./book-details.html">
                <div class="card shadow-lg rounded-2 border border-1 overflow-hidden">
                    <div class="p-2 bg-white d-flex justify-content-center align-items-center">
                        <img src="{{asset("img/books/book-2.jpg") }}" width="200" height="300" alt="" />
                    </div>
                    <div class="card-body">
                        <h4 class="card-text text-center my-4">Monster Killer</h4>
                    </div>
                </div>
            </a>
            <a class="col-4 text-decoration-none" href="./book-details.html">
                <div class="card shadow-lg rounded-2 border border-1 overflow-hidden">
                    <div class="p-2 bg-white d-flex justify-content-center align-items-center">
                        <img src="{{asset("img/books/book-2.jpg") }}" width="200" height="300" alt="" />
                    </div>
                    <div class="card-body">
                        <h4 class="card-text text-center my-4">Monster Killer</h4>
                    </div>
                </div>
            </a>
            <a class="col-4 text-decoration-none" href="./book-details.html">
                <div class="card shadow-lg rounded-2 border border-1 overflow-hidden">
                    <div class="p-2 bg-white d-flex justify-content-center align-items-center">
                        <img src="{{asset("img/books/book-2.jpg") }}" width="200" height="300" alt="" />
                    </div>
                    <div class="card-body">
                        <h4 class="card-text text-center my-4">Monster Killer</h4>
                    </div>
                </div>
            </a>
            <a class="col-4 text-decoration-none" href="./book-details.html">
                <div class="card shadow-lg rounded-2 border border-1 overflow-hidden">
                    <div class="p-2 bg-white d-flex justify-content-center align-items-center">
                        <img src="{{asset("img/books/book-2.jpg") }}" width="200" height="300" alt="" />
                    </div>
                    <div class="card-body">
                        <h4 class="card-text text-center my-4">Monster Killer</h4>
                    </div>
                </div>
            </a>
            <a class="col-4 text-decoration-none" href="./book-details.html">
                <div class="card shadow-lg rounded-2 border border-1 overflow-hidden">
                    <div class="p-2 bg-white d-flex justify-content-center align-items-center">
                        <img src="{{asset("img/books/book-2.jpg") }}" width="200" height="300" alt="" />
                    </div>
                    <div class="card-body">
                        <h4 class="card-text text-center my-4">Monster Killer</h4>
                    </div>
                </div>
            </a>
            <a class="col-4 text-decoration-none" href="./book-details.html">
                <div class="card shadow-lg rounded-2 border border-1 overflow-hidden">
                    <div class="p-2 bg-white d-flex justify-content-center align-items-center">
                        <img src="{{asset("img/books/book-2.jpg") }}" width="200" height="300" alt="" />
                    </div>
                    <div class="card-body">
                        <h4 class="card-text text-center my-4">Monster Killer</h4>
                    </div>
                </div>
            </a>
        </section>
    </main>
    <footer class="bg-green-secondary d-flex justify-content-center align-items-center" style="height: 80px">
        <div class="container d-flex align-items-center justify-content-center">
            <p class="text-white mt-2">@2024 Ghezyid eBook</p>
        </div>
    </footer>
</body>

</html>

<!--
  more catgories :
    - Science
    - Politique
-->
