require('./bootstrap');

import { createApp } from 'vue'
import ExampleComponent from './Components/ExampleComponent.vue'


createApp({
    components: {
        ExampleComponent,
    }
}).mount('#app')