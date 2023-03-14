require('./bootstrap');

import { createApp } from 'vue'
import Test from './components/Test.vue'


createApp({
    components: {
        Test,
    }
}).mount('#app')


// createApp(Test).mount('#app');


// const app = createApp({})

// app.component('test', Test)

// app.mount('#app')



