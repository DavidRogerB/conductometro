<x-guest-layout >




    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors :errors="$errors" />

    <form method="POST" action="{{ route('login') }}"  style="background-image: url('/images/janela.jpeg')">
        @csrf

        <!-- Email Address -->

            <div class="container-fluid">
                <div class="row">
                    <div class="mb-3">
                        <label class="form-label" for="email">{{ __('Email') }}</label>

                        <input class="form-control" id="email" type="email" name="email" :value="old('email')" required
                            autofocus />
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="form-label" for="password">{{ __('Palavra-passe') }}</label>

                        <input class="form-control" id="password" type="password" name="password" required
                            autocomplete="current-password" />
                    </div>

                    <!-- Remember Me -->
                    <div>
                        <label class="form-label" for="remember_me">
                            <input id="remember_me" type="checkbox">
                            <span>{{ __('Relembre-me') }}</span>
                        </label>
                    </div>

                    <div>


                        <button type="submit" class="btn btn-warning">
                            {{ __('Iniciar Sessão') }}
                        </button>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Esqueceu-se da sua palavra-passe?') }}
                        </a>
                    @endif
    </form>
    </div>
    </div>


</x-guest-layout>
