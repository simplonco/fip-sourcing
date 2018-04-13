import React from 'react';
import ReactDOM from 'react-dom';
import {Provider} from 'mobx-react';

// Local imports
//import config from './config';
import * as stores from './stores'; // mobx stores
import Layout from './components/Layout'




// Provider will add your pass the stores instances using context
const App = (
  <Provider { ...stores } >
    <Layout/>
  </Provider>
);

ReactDOM.render(
    App,
    document.getElementById('app-candidat')
);



