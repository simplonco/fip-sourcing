import {observable, action, computed} from 'mobx';


class LoadingStore {
    constructor () {
        this.loading = false;
    }

    @observable loading;

    @action set = (status=true) => {
        this.loading = status
    }

}

const loadingStore = new LoadingStore()
export default loadingStore