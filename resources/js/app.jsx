import './bootstrap';
import Alpine from 'alpinejs'
import {createInertiaApp} from '@inertiajs/inertia-react';
import React from 'react';
import {render} from 'react-dom';

window.Alpine = Alpine
Alpine.start()

createInertiaApp({
    resolve: name => import(`./Pages/${name}.jsx`).then(module => module.default),
    setup({el, App, props}) {
        render(<App {...props} />, el);
    },
});
