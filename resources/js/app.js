import { createApp } from 'vue';

require('./bootstrap');

import SignUp from "./components/auth/SignUp";

createApp({
    components: {
        SignUp,
    }
}).mount('#app')
