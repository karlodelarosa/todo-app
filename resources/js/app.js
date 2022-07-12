import { createApp } from 'vue';

require('./bootstrap');

import HelloWorld from "./HelloWorld";

createApp({
    components: {
        HelloWorld
    }
}).mount('#app')
