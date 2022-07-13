import { createApp } from 'vue'
import { createStore } from 'vuex'

import new_task from "./modals/new_task";

// Create a new store instance.
export const store = createStore({
    modules: {
        new_task
    }
})

const app = createApp({ /* your root component */ })

// Install the store instance as a plugin
app.use(store)
