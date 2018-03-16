import {observable, action, computed} from 'mobx';


class ProgressStore {
    constructor () {
        this.progress = 0;
    }

    @observable progress;

    @computed get currentProgress() {
        if (this.progress > 100) return 100;
        if (this.progress < 0) return 0;
        return this.progress;

    }

    @action increment = (qty=1) => {
        this.progress = this.progress + qty
    }

    @action decrement = (qty= 1) => {
        this.increment(qty * -1)
    }

    @action set = (value) => {
        this.progress = value
    }
}

const progressStore = new ProgressStore()
export default progressStore