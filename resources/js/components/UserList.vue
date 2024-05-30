<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const users = ref([]);

const getUsers = async () => {
    try {
        const res = await axios.get('/api/users');
        users.value = res.data;
    } catch (err) {
        console.error(err);
    }
}

onMounted(() => {
    getUsers();
});
</script>

<template>
<div class="container mt-5">
    <h2 class="mb-4">Users Table</h2>
    <table class="table table-striped table-hover">
      <thead class="table-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(user,index) in users" :key="user.id">
          <th>{{ index+1 }}</th>
          <td>{{ user.name }}</td>
          <td>{{ user.email }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
