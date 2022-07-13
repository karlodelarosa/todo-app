import { createApp } from 'vue';

require('./bootstrap');

import SignUp from "./components/auth/SignUp";
import SignIn from "./components/auth/SignIn";

createApp({
    components: {
        SignUp,
        SignIn,
    }
}).mount('#app')
