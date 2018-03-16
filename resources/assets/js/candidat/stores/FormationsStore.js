import {observable, action, computed} from 'mobx';

class FormationsStore {
    constructor () {
        this.formations = []
        this.selected = null; // formation selectionnee par l'apprenant
    }

    @observable formations;
    @observable selected;

    @action select = (formation) => {
        this.selected = formation
    }

    @action set = (formations) => {
        this.formations = formations
    }
}


const formationsStore = new FormationsStore()

export default formationsStore