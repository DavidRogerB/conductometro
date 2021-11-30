<x-guest-layout>





        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <label for="email" :value="__('Email')" />

                <input id="email" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div>
                <label for="password" :value="__('Password')" />

                <input id="password" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" :value="__('Confirm Password')" />

                <input id="password_confirmation" type="password" name="password_confirmation" required />
            </div>

            <div>
                <button>
                    {{ __('Restablecer a palavra-passe') }}
                </button>
            </div>
        </form>

</x-guest-layout>
