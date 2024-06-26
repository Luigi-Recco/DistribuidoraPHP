<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/css/uikit.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Gestão de controle de Hotel</title>
</head>

<body>
    <header>
        <nav class="uk-navbar-container">

            <div class="uk-container">

                <div uk-navbar>

                    <div class="uk-navbar-center">

                        <div class="uk-navbar-center-left">

                            <ul class="uk-navbar-nav">

                                <li class="uk-active">

                                    <a href="#">Active</a>

                                </li>

                                <li>
                                    <a href="#">Parent</a>

                                    <div class="uk-navbar-dropdown">

                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li class="uk-active"><a href="#">Active</a></li>
                                            <li><a href="#">Item</a></li>
                                            <li><a href="#">Item</a></li>
                                        </ul>

                                    </div>

                                </li>

                            </ul>

                        </div>

                        <a class="uk-navbar-item uk-logo" href="#"><p style="color: brown;">BOI BRABO</p></a>

                        <div class="uk-navbar-center-right">

                            <ul class="uk-navbar-nav">
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </nav>

    </header>

    <main>
        @yield('content')
    </main>

    <footer>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/js/uikit-icons.min.js"></script>

    </body>
</html>