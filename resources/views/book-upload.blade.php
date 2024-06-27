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
    <main>
        <div class="container my-5">
            <h3 class="text-center text-green-seconadry">
                Veuillez remplir les coordonnées suivantes pour téléverser votre livre
            </h3>
            @if (session('success'))
                <div class="mt-5 alert alert-success d-flex align-items-center alert-dismissable fade show"
                    role="alert">
                    <i class="bi bi-check-circle-fill text-bg-succes me-2"></i>
                    <div>
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close fade" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="container mt-6">
            <form class="form-group row g-4" method="POST" action="{{ route('book.upload') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group-left col-6">
                    <div class="form-field mb-2">
                        <label class="form-label">Titre</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" />
                        @error('title')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-field mb-2">
                        <label class="form-label">Genre</label>
                        <select class="form-select" name="genre">
                            <option>Horror</option>
                            <option>Enfant</option>
                            <option>Anime</option>
                            <option>Histoire</option>
                            <option>Romane</option>
                        </select>
                    </div>
                    <div class="form-field mb-2">
                        <label class="form-label">Langue</label>
                        <select class="form-select" name="language">
                            <option value="ar">Arabe</option>
                            <option value="en">Anglais</option>
                            <option value="fr">Français</option>
                            <option value="esp">Espagnol</option>
                        </select>
                    </div>
                </div>
                <div class="form-group-right col-6 d-flex flex-column justify-content-center">
                    <div class="form-field mb-2 mt-5">
                        <label class="form-label">Le fichier du livre à téléverser</label>
                        <div class="input-group mb-3">
                            <input type="file" name="file" class="form-control" id="picture" />
                            <label class="input-group-text" for="picture"><i class="bi bi-upload"></i></label>
                        </div>
                        @error('file')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-field mb-2">
                        <label class="form-label">Une image de la couverture du livre</label>
                        <div class="input-group mb-3">
                            <input type="file" name="picture" class="form-control" id="picture" />
                            <label class="input-group-text" for="picture"><i class="bi bi-upload"></i></label>
                        </div>
                        @error('picture')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <div class="form-group-bottom col-12">
                    <div class="form-field mb-2">
                        <label class="form-label">Rédiger un résume</label>
                        <textarea style="resize: none !important" name="description" rows="5" class="form-control"
                            placeholder="Entre 150 et 300 mots" value="{{ old('description') }}"></textarea>
                        @error('description')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="btn bg-green-secondary px-3 py-2 rounded-4 shadow-sm fw-bold text-white d-block ms-auto mt-5">
                        Téléverser
                    </button>
                </div>
            </form>
        </div>
    </main>
    <footer class="bg-green-secondary d-flex justify-content-center align-items-center"
        style="height: 80px; margin-top: 10rem !important">
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
