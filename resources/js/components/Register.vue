<template>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <h2 class="text-center mb-4">Sign Up</h2>
          <form @submit.prevent="submitForm">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" v-model="form.name" id="name" placeholder="Enter your name">
              <span v-if="errors.name" class="text-danger">{{ errors.name }}</span>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" v-model="form.email" id="email" placeholder="Enter your email">
              <span v-if="errors.email" class="text-danger">{{ errors.email }}</span>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" v-model="form.password" id="password" placeholder="Enter your password">
              <span v-if="errors.password" class="text-danger">{{ errors.password }}</span>
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
  import { reactive } from 'vue';

  export default {
    setup() {
      const form = reactive({
        name: '',
        email: '',
        password: ''
      });

      const errors = reactive(JSON.parse(JSON.stringify(form)));

      const submitForm = async () => {
        try {
          const response = await axios.post('/api/register', form);
          resetErrors();
          swal("Success", "You have successfully signed up!", "success").then(() => {
            router.push('/login');

          });
        } catch (error) {
          if (error.response && error.response.status === 422) {
            const validationErrors = error.response.data.errors;
            Object.keys(validationErrors).forEach(field => {
              errors[field] = validationErrors[field].join(' ');
            });
          } else {
            swal("Error", "There was an error with your submission", "error");
          }
        }
      };

        const resetErrors = () => {
            Object.keys(errors).forEach(field => {
                errors[field] = '';
            });
        };

      return {
        form,
        errors,
        submitForm
      };
    }
  };
  </script>
