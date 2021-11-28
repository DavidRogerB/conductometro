<x-guest-layout>

    <head>
        <style>
            a {
                text-decoration: none;
                color: white;

            }

            a:hover {
                color: #f8d300;


            }

        </style>
    </head>

    <body style="background-image: url('/images/driving.jpeg');">



            <!-- Validation Errors -->
            <x-auth-validation-errors :errors="$errors" />
            <br>  <br>
            <div class="row" style="background: rgb(235,218,0);
            background: radial-gradient(circle, rgba(235,218,0,0.28157894736842104) 3%, rgba(0,0,0,0.2421052631578947) 89%);">
                <form method="POST" action="{{ route('register') }}" ">
        @csrf
        <div class=" container"  >
                    <div class="row align-items-center display-4">

                        <!-- Name -->
                        <div class="col-sm-12 col-md-6 col-xl-6 text-light">
                            <div>
                                <label class="form-label" for="name">{{ __('Nome') }} </label>

                                <input class="form-control" id="name" type="text" name="name" :value="old('name')"
                                    required autofocus />
                            </div>

                            <!-- Email Address -->
                            <div>
                                <label class="form-label" for="email">{{ __('Email') }} </label>

                                <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                                    required />
                            </div>
                        </div> <!-- Fim primeira columna-->
                        <div class="col-sm-12 col-md-6 col-xl-4 text-light">
                            <!-- Password -->
                            <div>
                                <label class="form-label" for="password">{{ __('Palavra-passe') }} </label>

                                <input class="form-control" id="password" type="password" name="password" required
                                    autocomplete="new-password" />
                            </div>

                            <!-- Confirm Password -->

                            <div>
                                <label class="form-label"
                                    for="password_confirmation">{{ __('Confirme palavra-chave') }}</label>

                                <input class="form-control" id="password_confirmation" type="password"
                                    name="password_confirmation" required />
                                <!--Aqui fim de container 1 /row -->


                            </div>
                        </div>
                        <div class="col" align="center">
                            <div>
                                <br />

                                <button type="submit" class="btn btn-warning btn-lg text-white">
                                    {{ __('Efetuar Registo') }}
                                </button>
                            </div>
                        </div>
                    </div>
            </div>
            <span class="display-4">
                <a href="{{ route('login') }}">
                    {{ __('Já está registado?') }}
                </a></span>
            </form>
        </div>

    </body>
</x-guest-layout>
