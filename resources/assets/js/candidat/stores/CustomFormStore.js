import { observable, action, computed } from 'mobx';


class CustomFormStore {
    constructor() {
        this.fields = [];
        this.canSubmit = false;
    }

    @observable fields;
    @observable canSubmit;

    @action addField = (fieldData) => {
        fieldData.validations = fieldData.validations.length ?
          fieldData.validations.reduce((a, b) => Object.assign({}, a, b)) :
          null;
        fieldData.id = Date.now();
        this.fields = this.fields.concat(fieldData);
    }

    @action removeField = (pos) => {
        this.fields = this.fields.slice(0, pos).concat(this.fields.splice(pos + 1));
    }

    @action enableButton = () => {
        this.canSubmit = true;
    }

    @action disableButton = () => {
        this.canSubmit = false;
    }
}

const customFormStore = new CustomFormStore()
export default customFormStore;