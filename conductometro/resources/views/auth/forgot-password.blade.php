<x-guest-layout>

<div class="container">
    <div class="row">
        <div class="col-12">

          <h3>  {{ __('Esqueceu-se da sua palavra-passe? Sem problemas, introduza o seu correio electronico, e por mail, emos de lhe facilitar os proximos passos para recuperar o acesso à sua conta.') }}</h3>
        </div>
        </div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    </div>
    <div class="row">
        <div class="col-4">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->

                <label for="email" :value="__('Email')" />

                <input id="email" type="email" name="email" :value="old('email')" required autofocus />
            </div>


                <button class="btn btn-warning">
                    {{ __('Recuperar palava-passe') }}
                </button>

        </form>
    </div>
</div>

</x-guest-layout>
</div></div>
