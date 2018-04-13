import userStore from './UserStore';
import progressStore from './ProgressStore';
import formationsStore from './FormationsStore'
import formsStore from './FormsStore'

const stores = {
    userStore,
    progressStore,
    formationsStore,
    formsStore
};

window.__STORES__ = stores; // For Debug

export {
    userStore,
    progressStore,
    formationsStore,
    formsStore
};
