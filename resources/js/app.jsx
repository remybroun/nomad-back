import './bootstrap';
import Alpine from 'alpinejs'
import {createInertiaApp} from '@inertiajs/inertia-react';
import React from 'react';
import { createRoot } from 'react-dom/client'; // Import createRoot

import '../css/app.css';

window.Alpine = Alpine
Alpine.start()

// createInertiaApp({
//     resolve: name => import(`./Pages/${name}.jsx`).then(module => module.default),
//     setup({el, App, props}) {
//         render(<App {...props} />, el);
//     },
// });
createInertiaApp({
    resolve: name => import(/* @vite-ignore */`./Pages/${name}`).then(module => module.default),
    setup({ el, App, props }) {
        const root = createRoot(el); // Create a root.
        root.render(<App {...props} />); // Use the render method on the root.
    },
});
