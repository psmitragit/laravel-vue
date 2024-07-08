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
