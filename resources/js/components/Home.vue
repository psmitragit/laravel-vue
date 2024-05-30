<template>
    <!-- Hero Section -->
  <div class="container-fluid bg-light py-5">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h1 class="display-4">Welcome to MyWebsite</h1>
        <p class="lead">We provide the best services to help you succeed. Join us and start your journey today!</p>
        <router-link to="/register" class="btn btn-primary btn-lg">Get Started</router-link>
      </div>
    </div>
  </div>

  <!-- Features Section -->
  <div class="container py-5">
    <div class="row text-center">
      <div class="col-lg-4">
        <div class="card border-0">
          <div class="card-body">
            <i class="bi bi-emoji-smile display-1 mb-3"></i>
            <h5 class="card-title">Feature One</h5>
            <p class="card-text">Our first feature helps you achieve greatness in no time.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card border-0">
          <div class="card-body">
            <i class="bi bi-laptop display-1 mb-3"></i>
            <h5 class="card-title">Feature Two</h5>
            <p class="card-text">Our second feature enhances your productivity and efficiency.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card border-0">
          <div class="card-body">
            <i class="bi bi-people display-1 mb-3"></i>
            <h5 class="card-title">Feature Three</h5>
            <p class="card-text">Our third feature connects you with a community of professionals.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
