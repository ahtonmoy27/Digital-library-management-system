<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Library Management System') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }} "> <!-- Custom stlylesheet -->
</head>

<body>
    <div id="header">
        <!-- HEADER -->
        {{-- <div class="container">
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('images/library.png') }}"></a>
                    </div>
                </div>
                <div class="offset-md-2 col-md-2">
                    <div class="dropdown">
                       <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hi {{ auth()->user()->name }}
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('change_password') }}">Change Password</a>
                            <a class="dropdown-item" href="#" onclick="document.getElementById('logoutForm').submit()">Log Out</a>
                        </div>
                        <form method="post" id="logoutForm" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
<style>
    .header-container {
        background-color: transparent;
        padding: 1.5rem 0;
    }

  .header-container .logo img {
    max-height: 160px;  /* 40% larger than 60px */
    width: auto;
    display: block;
}

    .header-container .btn-primary {
        background-color: #0d6efd;
        border: none;
        font-weight: 600;
        color: white;
        padding: 0.375rem 1rem;
    }

    .header-container .btn-primary:hover,
    .header-container .btn-primary:focus {
        background-color: #0b5ed7;
        color: white;
    }
</style>

<div class="container header-container">
    <div class="row align-items-center">
        <div class="offset-md-4 col-md-4 d-flex justify-content-center justify-content-md-start">
            <div class="logo">
                <a href="#"><img src="{{ asset('images/library.png') }}" alt="Library Logo"></a>
            </div>
        </div>
        <div class="offset-md-2 col-md-2 d-flex justify-content-center justify-content-md-end">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hi {{ auth()->user()->name }}
                </button>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('change_password') }}">Change Password</a>
                    <a class="dropdown-item" href="#" onclick="document.getElementById('logoutForm').submit()">Log Out</a>
                </div>
                <form method="post" id="logoutForm" action="{{ route('logout') }}">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>


    </div> <!-- /HEADER -->
    {{-- <div id="menubar">
        <!-- Menu Bar -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="menu">
                        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('authors') }}">Authors</a></li>
                        <li><a href="{{ route('publishers') }}">Publishers</a></li>
                        <li><a href="{{ route('categories') }}">Categories</a></li>
                        <li><a href="{{ route('books') }}">Books</a></li>
                        <li><a href="{{ route('students') }}">Reg Students</a></li>
                        <li><a href="{{ route('book_issued') }}">Book Issue</a></li>
                        <li><a href="{{ route('reports') }}">Reports</a></li>
                        <li><a href="{{ route('settings') }}">Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- /Menu Bar --> --}}
<style>
    #menubar {
        background: linear-gradient(to right, #0d6efd, #3b82f6);
        border-bottom: 5.6px solid #0a58ca; /* 8px * 0.7 = 5.6px */
        box-shadow: 0 2.8px 8.4px rgba(0, 0, 0, 0.2); /* scaled shadow */
    }

    .navbar-nav .nav-link {
        font-size: 1.05rem; /* 1.5rem * 0.7 */
        font-weight: 600;
        color: #fff !important;
        padding: 0.525rem 1.05rem; /* 0.75rem * 0.7 and 1.5rem * 0.7 */
        border-radius: 21px; /* 30px * 0.7 */
        transition: all 0.3s ease;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link:focus {
        background-color: rgba(255, 255, 255, 0.2);
        transform: scale(1.05);
    }

    .navbar-toggler {
        border: none;
        outline: none;
        transform: scale(1.05); /* 1.5 * 0.7 */
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.9%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
</style>

<div id="menubar">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark py-3"> <!-- Reduced vertical padding -->
            <!-- Mobile toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Nav links -->
            <div class="collapse navbar-collapse justify-content-center" id="mainNavbar">
                <ul class="navbar-nav gap-2"> <!-- gap reduced from 3 to 2 -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('authors') }}">Authors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('publishers') }}">Publishers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('books') }}">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('students') }}">Reg Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('book_issued') }}">Book Issue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reports') }}">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('settings') }}">Settings</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>


    @yield('content')


 <style>
    #footer {
        background: linear-gradient(to right, #0d6efd, #3b82f6);
        color: white;
        padding: 1.5rem 0;
        box-shadow: 0 -4px 12px rgba(0, 0, 0, 0.15);
        font-weight: 600;
        border-radius: 0 0 12px 12px;
    }

    #footer a {
        color: #ffd54f; /* warm accent color */
        text-decoration: none;
        transition: color 0.3s ease;
    }

    #footer a:hover,
    #footer a:focus {
        color: #fff9c4;
        text-decoration: underline;
    }
</style>

<div id="footer" class="mt-5 text-center">
    <div class="container">
        <span>
            © {{ now()->format("Y") }} 
            <a href="https://ahtonmoy.blogspot.com/" target="_blank" rel="noopener noreferrer">
                AH Tonmoy
            </a>. All rights reserved.
        </span>
    </div>
</div>

</div>

    <!-- /FOOTER -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</body>

</html>
