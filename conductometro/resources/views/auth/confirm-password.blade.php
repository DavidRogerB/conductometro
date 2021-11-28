<x-guest-layout>



        <div>
            {{ __('Esta numa area segura do nosso site. Pode sentir-se à vontade de confirmar a sua palavra-passe antes de prosseguir.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <label for="password" :value="__('Password')" />

                <input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div>
                <button>
                    {{ __('Confirm') }}
                </button>
            </div>
        </form>
</x-guest-layout>
