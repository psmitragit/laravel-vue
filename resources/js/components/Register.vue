<template>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <h2 class="text-center mb-4">Sign Up</h2>
          <form @submit.prevent="submitForm">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" v-model="form.name" id="name" placeholder="Enter your name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" v-model="form.email" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" v-model="form.password" id="password" placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
  </template>

  <script>
  import axios from 'axios';
  import swal from 'sweetalert';
  import { useRouter } from 'vue-router';

  export default {
    setup() {
      const router = useRouter();

      const form = {
        username: '',
        email: '',
        password: ''
      };

      const submitForm = async () => {
        try {
          const response = await axios.post('/api/register', form);
          swal("Success", "You have successfully signed up!", "success")
            .then(() => {
              router.push('/login');
            });
        } catch (error) {
          swal("Error", "There was an error with your submission", "error");
        }
      };
      return {
        form,
        submitForm
      };
    }
  };
  </script>
