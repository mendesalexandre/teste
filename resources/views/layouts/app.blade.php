<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body>
    <div>
        <header>
            <div class="site-tophead">
                <div class="container-site">
                    <div class="row">
                        <div class="col-md-4">
                            Horário de Atendimento
                        </div>
                        <div class="col-md-4">
                            Email de Atendimento: atendimento@1oficiosinop.com.br
                        </div>
                        <div class="col-md-4">
                            Telefone: (66) 3531-2501 / 9.9930-9137
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <nav class="site-menu">
            <div class="container-site">
                <ul>
                    @foreach (config('site.menu') as $menu)
                        <li>
                            <a href="{{ $menu['url'] }}">{{ $menu['name'] }}</a>
                            @if ($menu['children'])
                                <div class="submenu">
                                    <ul>
                                        @foreach ($menu['children'] as $subitem)
                                            <li>
                                                <a href="{{ $subitem['url'] }}">{{ $subitem['name'] }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </li>
                    @endforeach
                </ul>
                <div>
        </nav>
        <main class="container-site">
            {{ $slot }}
        </main>
        <footer class="footer">
            <div class="rodape-links">
                <div class="col-md-3">
                    <p>Fale Conosco</p>
                </div>
                <div class="col-md-3">
                    <p>Fale Conosco</p>
                </div>
                <div class="col-md-3">
                    <p>Fale Conosco</p>
                </div>
            </div>
            <p>
                1º Ofício de Registro de Imóveis, Títulos e Documentos de Sinop/MT - Todos os Direitos Reservados.
                {{ date('Y') }}
            </p>
        </footer>
    </div>
    @livewireScripts
</body>

</html>
