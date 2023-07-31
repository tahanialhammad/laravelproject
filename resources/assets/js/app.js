// require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

// import { createApp } from 'vue'
import ExampleComponent from './Components/ExampleComponent.vue'


createApp({
    components: {
        ExampleComponent,
    }
}).mount('#app')