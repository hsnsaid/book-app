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

<body>
    <div class="container">
        <div class="logo mx-auto mt-5 mb-3">
            <img src="{{ asset('img/ghezyid.jpg') }}" class="d-block mx-auto" width="150" height="45"
                alt="" />
            <div class="text-center mt-3">
                <h3>Créer votre compte</h3>
                <p class="f-s-3 mt-3 fw-lighter">
                    @switch($type)
                        @case('reader')
                            {{ "Inscriver-vous et savourer la lecture de vos livres préférés en
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ligne" }}
                        @break

                        @case('writer')
                            {{ "Inscriver-vous pour publier vos livres et gérer votre compte
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    d'auteur, et générer des revenues
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    " }}
                        @break
                    @endswitch
                </p>
            </div>
        </div>
        <div class="w-50 mx-auto p-4 border shadow rounded-3">
            <div class="account-type d-flex justify-content-center">
                @switch($type)
                    @case('reader')
                        <a class="btn bg-blue text-white fw-bold me-3"
                            href="{{ route('register', ['type' => 'reader']) }}">Liseur</a>
                        <a class="btn text-blue  px-3 fw-bold" href="{{ route('register', ['type' => 'writer']) }}">Ecrivain</a>
                    @break

                    @case('writer')
                        <a class="btn text-blue fw-bold me-3" href="{{ route('register', ['type' => 'reader']) }}">Liseur</a>
                        <a class="btn bg-blue text-white px-3 fw-bold"
                            href="{{ route('register', ['type' => 'writer']) }}">Ecrivain</a>
                    @break
                @endswitch

            </div>
            <form method="POST" action="{{ route("register.$type.storeTemp") }}" class="form-fields w-75 mx-auto mt-4">
                @csrf
                <div class="form-group mb-3">
                    <label class="form-label">Entrez votre pseudo</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" />
                    @error('name')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Entrez votre adresse e-mail</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" />
                    @error('email')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Entrez votre mot de passe</label>
                    <input type="password" name="password" class="form-control" />
                    @error('password')
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                @if ($type == 'writer')
                    <div class="form-group mb-3">
                        <label class="form-label">Entrez votre telephone</label>
                        <input type="numer" name="phone" class="form-control" value="{{ old('phone') }}" />
                        @error('phone')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                @endif
                <button type="submit" class="btn bg-green-secondary text-white px-4 fw-bold rounded-3 mt-4">
                    S'inscrire
                </button>
            </form>
        </div>
    </div>
</body>

</html>

<!--
  more catgories :
    - Science
    - Politique
-->
