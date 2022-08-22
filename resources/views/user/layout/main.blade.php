<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Prima Tekno | {{ $title }}</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid mx-5">
          <a class="navbar-brand" href="/">Prima Tekno Solusindo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" aria-current="page" href="/user/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($active === "market") ? 'active' : '' }}" href="/user/market">Market</a>
              </li>
            </ul>
            <ul class="navbar-nav m-auto">
              <li class="nav-item">
                <div class="btn-group">
                  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcomback, {{ auth()->user()->username }}
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/user/home"><i class="fa fa-home"></i>Home</a></li>
                    <li><a class="dropdown-item" href="/user/alamat"><i class="fa fa-map-marker"></i>Alamat</a></li>
                    <li><a class="dropdown-item" href="/user/riwayat">Riwayat</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</button>
                    </form>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="container mt-5">
        @yield('body')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>