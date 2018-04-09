import React from 'react';
import PropTypes from 'prop-types';
import { observer, inject } from 'mobx-react';
import { BaseLink } from 'react-mobx-router5';

import ReactDom from 'react-dom';
import Formsy from 'formsy-react';

import MyInput from './components/Input';
import MySelect from './components/Select';
import MyRadioGroup from './components/RadioGroup';
import MyMultiCheckboxSet from './components/MultiCheckboxSet';
import Fields from './components/Fields';

@inject('customFormStore')
@observer
class CustomForm extends React.Component {

  static propTypes = {
    customFormStore: PropTypes.object.isRequired
  }

  constructor(props) {
    super(props);
    this.state = {
      fields: this.props.customFormStore.fields,
      canSubmit: this.props.customFormStore.canSubmit
    };
    this.addField = this.props.customFormStore.addField.bind(this);
    this.removeField = this.props.customFormStore.removeField.bind(this);
    this.enableButton = this.props.customFormStore.enableButton.bind(this);
    this.disableButton = this.props.customFormStore.disableButton.bind(this);
  }

  submit(data) {
    alert(JSON.stringify(data, null, 4));
  }

  // addField(fieldData) {
  //   fieldData.validations = fieldData.validations.length ?
  //     fieldData.validations.reduce((a, b) => Object.assign({}, a, b)) :
  //     null;
  //   fieldData.id = Date.now();
  //   this.setState({ fields: this.state.fields.concat(fieldData) });
  // }

  // removeField(pos) {
  //   const fields = this.state.fields;
  //   this.setState({ fields: fields.slice(0, pos).concat(fields.slice(pos + 1)) })
  // }

  // enableButton() {
  //   this.setState({ canSubmit: true });
  // }

  // disableButton() {
  //   this.setState({ canSubmit: false });
  // }

  render() {
    const { fields, canSubmit } = this.state;
    return (
      <div>
        <Formsy onSubmit={this.addField} className="many-fields-conf">
          <MyMultiCheckboxSet
            name="validations"
            title="Validations"
            cmp={(a, b) => JSON.stringify(a) === JSON.stringify(b)}
            items={[
              { isEmail: true },
              { isEmptyString: true },
              { isNumeric: true },
              { isAlphanumeric: true },
              { equals: 5 },
              { minLength: 3 },
              { maxLength: 7 }
            ]}
          />
          <MyRadioGroup
            name="required"
            value={false}
            title="Required"
            items={[true, false]}
          />
          <MyRadioGroup
            name="type"
            value="input"
            title="Type"
            items={['input', 'select']}
          />
          <button type="submit">Add</button>
        </Formsy>
        <Formsy onSubmit={this.submit} onValid={this.enableButton} onInvalid={this.disableButton} className="many-fields">
          <Fields name="preview" data={this.props.customFormStore.fields} onRemove={this.removeField} />
          <button type="submit" disabled={!canSubmit}>Submit</button>
        </Formsy>
      </div>
    );
  }
}

export default CustomForm;