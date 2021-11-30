<x-guest-layout>


        <div>
            {{ __('Obrigado por se registar! Antes de começar a usar a plataforma, agradeciamos que verificasse o seu email, clicando no endereço electronico que lhe acabamos de mandar ao mesmo.
            Se não o recebeu, podemos sempre enviar-lhe outro!') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div>
                {{ __('Um novo email de verificação foi enviado ao e-mail com que se registou.') }}
            </div>
        @endif

        <div>
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <button>
                        {{ __('Resend Verification Email') }}
                    </button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>

</x-guest-layout>
