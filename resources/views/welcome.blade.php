<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href = "{{ asset('../css/style.css')}}" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#">MED - HELP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">FAMILY PRACTICE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">URGENT CARE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">PHYSICIANS</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  JOIN
                </a>
                <ul class="dropdown-menu">
                    @if (Route::has('login'))
                    <div class="d-flex">
                        @auth
                            <li class="nav-item">
                                <a href="{{ url('/home') }}" class="">Home</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link p-2">Log in</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                                @endif
                            </li>
                        @endauth
                    </div>
                    @endif
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="container">
        <div class="header">
            <div class="py-5">
                <div class="row">
                    <div class="col-lg-6 p-5">
                        <h1>We Care for You</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit iure beatae nisi natus magnam sint atque eius molestiae. Quis ab corporis dicta? Hic aperiam error sed esse sequi quas repudiandae.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dignissimos odio in qui architecto eos ducimus, quae, expedita ab maiores iste ullam nihil minus enim omnis. Adipisci sed corrupti iure?</p>
                        <button class="btn btn-primary btn-lg m-1">View plans</button>
                    </div>
                    <div class="col-lg-6">
                        <img src=" {{ asset('images/image 4.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="plans">
        <div class="container">
            <div class="boxes">
                <div class="box">
                    <h3>Vital Plan</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, iste maxime commodi nulla odio, natus nesciunt, consequuntur molestias veniam nihil quisquam. Blanditiis voluptatibus expedita magni dolorem rem quia, nostrum ut!</p>
                </div>
                <div class="box">
                    <h3>Savings Plan</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, iste maxime commodi nulla odio, natus nesciunt, consequuntur molestias veniam nihil quisquam. Blanditiis voluptatibus expedita magni dolorem rem quia, nostrum ut!</p>
                </div>
                <div class="box">
                    <h3>Absolute Plan</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, iste maxime commodi nulla odio, natus nesciunt, consequuntur molestias veniam nihil quisquam. Blanditiis voluptatibus expedita magni dolorem rem quia, nostrum ut!</p>
                </div>
                <div class="box">
                    <h3>Essential Plan</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, iste maxime commodi nulla odio, natus nesciunt, consequuntur molestias veniam nihil quisquam. Blanditiis voluptatibus expedita magni dolorem rem quia, nostrum ut!</p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>Created by: Phiwe Saba</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>