import tabStore from './TabStore';
import userStore from './UserStore';
import routerStore from './RouterStore';
import progressStore from './ProgressStore';
import formationsStore from './FormationsStore'
import customFormStore from './CustomFormStore'

const stores = {
    userStore,
    tabStore,
    routerStore,
    progressStore,
    formationsStore,
    customFormStore
};

window.__STORES__ = stores; // For Debug

export {
    userStore,
    tabStore,
    routerStore,
    progressStore,
    formationsStore,
    customFormStore,
};
