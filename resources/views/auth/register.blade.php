<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <title>Register</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="box-area border rounded-5 p-3 bg-white shadow">
            <div class="col-md-10 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Registrarse</h2>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input id="name" type="name" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-control form-control-lg bg-light fs-6" placeholder="Nombre(s)">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input id="lastname" type="lastname" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" class="form-control form-control-lg bg-light fs-6" placeholder="Apellido(s)">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input id="username" type="username" name="username" :value="old('username')" required autofocus autocomplete="user" class="form-control form-control-lg bg-light fs-6" placeholder="Nombre de usuario">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="form-control form-control-lg bg-light fs-6" placeholder="Correo electrónico">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control form-control-lg bg-light fs-6" placeholder="Contraseña">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control form-control-lg bg-light fs-6" placeholder="Confirmar contraseña">
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <x-button class="btn btn-lg btn-primary w-100 fs-6">
                                {{ __('Registrarse') }}
                            </x-button>
                        </div>
                        <div class="row">
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                {{ __('¿Ya tienes una cuenta?') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
