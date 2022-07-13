import { createApp } from 'vue';

require('./bootstrap');

import SignUp from "./components/auth/SignUp";
import SignIn from "./components/auth/SignIn";
import Task from "./components/Task";

createApp({
    components: {
        SignUp,
        SignIn,
        Task,
    }
}).mount('#app')
