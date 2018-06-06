import React from 'react';
import ReactDOM from 'react-dom';
import {Provider} from 'mobx-react';

import {MobxRouter} from 'mobx-router';

// Local imports
//import config from './config';
import * as stores from './stores'; // mobx stores
import Layout from './components/Layout'




// Provider will add your pass the stores instances using context
const App = (
  <Provider store={stores } >
    <MobxRouter/>
  </Provider>
);

ReactDOM.render(
    App,
    document.getElementById('app-candidat')
);



window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}