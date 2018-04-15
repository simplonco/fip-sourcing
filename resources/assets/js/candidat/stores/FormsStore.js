import {observable, action, computed} from 'mobx'

class FormsStore {

    constructor(){
        this.ready = false
    }

    @observable ready;
    @observable questionnaires = [];

    @action setUserFields(fields) {
        this.fields = [...fields]
        this.ready = true
    }

    @action setQuestionnaires(questionnaires) {
        this.questionnaires = [...questionnaires]
        this.ready = true
    }
}

const formsStore = new FormsStore()
export default formsStore
