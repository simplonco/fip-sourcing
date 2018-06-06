import React from 'react';

//models
import {Route} from 'mobx-router';

//components
import Home from '../components/Home';
import Formations from '../components/Formations';
import Questionnaires from '../components/Questionnaires';

const views = {
    home: new Route({
        path: '/',
        component: <Home/>
    }),
    formations: new Route({
        path: '/formations',
        component: <Formations/>,
        onEnter: () => {
            console.log('entering user profile!');
        },
        beforeExit: () => {
            console.log('exiting user profile!');
        },
        onParamsChange: (route, params, store) => {
            console.log('params changed to', params);
        }
    }),
    questionnaires: new Route({
        path: '/questionnaires',
        component: <Questionnaires />,
        onEnter: (route, params, store, queryParams) => {
            //store.gallery.fetchImages();
            console.log('current query params are -> ', queryParams);
        },
        beforeExit: () => {
            const result = confirm('Are you sure you want to leave the gallery?');
            return result;
        }
    }),
};
export default views;