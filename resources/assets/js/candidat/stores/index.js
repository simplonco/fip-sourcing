import userStore from './UserStore';
import progressStore from './ProgressStore';
import formationsStore from './FormationsStore'
import formsStore from './FormsStore'
import loadingStore from './LoadingStore'

import {RouterStore, startRouter} from 'mobx-router';
import views from '../config/views';

const router = new RouterStore();


const stores = {
    userStore,
    progressStore,
    formationsStore,
    formsStore,
    loadingStore,
    router
};

startRouter(views, stores)

if (process.env.NODE_ENV !== 'production') {
    window.__STORES__ = stores; // For Debug
}

export {
    userStore,
    progressStore,
    formationsStore,
    formsStore,
    loadingStore,
    router
};
