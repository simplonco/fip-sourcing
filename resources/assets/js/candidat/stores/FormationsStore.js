import {observable, action, computed} from 'mobx';

class FormationsStore {
    constructor () {
        this.formations = []
        this.selected = null; // formation selectionnee par l'apprenant
        this.dummy = '...'
    }

    @observable formations;
    @observable selected;
    @observable dummy;

    @action select = (formation) => {
        this.selected = formation
    }

    @action set = (formations) => {
        this.formations = formations
    }

    @action setDummy = (value) => {
        this.dummy = value
    }
}


const formationsStore = new FormationsStore()

export default formationsStore