import {observable, action, computed} from 'mobx';

class FormationsStore {
    constructor () {
        this.formations = []
        this.ready = false;
    }

    @observable formations;
    @observable ready;
    selectedSession;
    selectedFormation;

    @action selectFormation = (id) => {
        this.selectedFormation = id
    }

    @action selectSession = (id) => {
        this.selectedSession = id
    }

    @action set = (formations) => {
        this.formations = formations
        this.ready = true
    }

    @action setReady(state=true) {
        this.ready = state
    }

    @computed get hasFormation () {
        return this.formations.filter((formation)=>{
            return formation.id === this.selected || formation.selected;
        }).map(f=>(1)).reduce((prev, curr) => {
            return prev+curr;
        }, 0) > 0
    }

    @computed get hasSession () {
        return this.currentFormation().sessions.filter((formation)=>{
            return formation.id === this.selected || formation.selected;
        }).map(f=>(f.sessions))
        .filter(f=>(f.sessions ))
        .reduce((prev, curr) => {
            return prev+curr;
        }, 0) > 0
    }

    @computed get currentFormation () {
        if (!this.ready) { return false }
        return this.formations.filter(f=>{
            return f.id === this.selectedFormation || f.selected;
        }).reduce((prev, current)=>{
            return current
        },false);
    }

    @computed get currentSession () {
        if (!this.ready) { return false }
        return this.currentFormation.sessions.filter(s=>{
            return s.id === this.selectedSession|| s.selected
        }).reduce((prev, current)=>{
            return current
        },false);
    }

    @computed get finished () {

    }
}


const formationsStore = new FormationsStore()

export default formationsStore