import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin'; 
// note: npm i @vitejs/plugin-vue
import vue from '@vitejs/plugin-vue';

//test 1
// export default defineConfig({
//     plugins: [
//         laravel({
//             input: 'resources/assets/js/app.js',
//             input: 'resources/assets/css/app.css',
//             refresh: true,
//         }),
//         vue({
//             template: {
//                 transformAssetUrls: {
//                     base: null,
//                     includeAbsolute: false,
//                 },
//             },
//         }),
//     ],
// });


//test 2
// export default defineConfig({
//     plugins: [
//         laravel({
//             input: 'resources/assets/js/app.js',
//             input: 'resources/assets/css/app.css',
//             refresh: true,
//         }),
//         vue({
//             template: {
//                 transformAssetUrls: {
//                     base: null,
//                     includeAbsolute: false,
//                 },
//             },
//         }),
//     ],
// });



//test 3

export default defineConfig({
    plugins: [
        vue(),
        laravel([
            'resources/assets/css/app.css',
            'resources/assets/js/app.js',
        ]),
    ],
});