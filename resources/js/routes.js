import Register from './components/Register.vue'
import Login from './components/Login.vue'
import UserList from './components/UserList.vue'
import Home from './components/Home.vue'

export default [
    {
        path: '/',
        name: '',
        component: Home,
    },
    {
        path: '/register',
        name: 'register',
        component: Register,
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
    },
    {
        path: '/user-list',
        name: 'user-list',
        component: UserList,
    }
]
