<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Vue</title>
    <style>
        .nav-link {
            cursor: pointer;
        }
    </style>
</head>

<body id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <router-link to="/" active-class="active" class="navbar-brand">Home</router-link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <router-link to="login" active-class="active" class="nav-link">Login</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="register" active-class="active" class="nav-link">Register</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="user-list" active-class="active" class="nav-link">User list</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <router-view></router-view>
    </div>
    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">MyWebsite</h5>
                    <p>Join us and be a part of our amazing community. We offer the best services to help you grow and
                        succeed.</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#" class="text-dark">Home</a></li>
                        <li><a href="#" class="text-dark">About</a></li>
                        <li><a href="#" class="text-dark">Services</a></li>
                        <li><a href="#" class="text-dark">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contact</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#" class="text-dark">Email</a></li>
                        <li><a href="#" class="text-dark">Phone</a></li>
                        <li><a href="#" class="text-dark">Address</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3 bg-light">
            © 2024 MyWebsite
        </div>
    </footer>
</body>

</html>
