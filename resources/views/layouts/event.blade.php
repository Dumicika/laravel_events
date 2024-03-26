<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evaluare 2</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Evaluare</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('events.index') }}">Events</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      @yield('content')
      
    <footer style="position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;">
            <p> Elaborat: Sîrbu Dumitrița <br> 
                Email: sirbu.dumitrita@elev.cihcahul.md <br>
                GitHub: https://github.com/Dumicika/laravel_events.git
            </p>
    </footer>
</body>
</html>