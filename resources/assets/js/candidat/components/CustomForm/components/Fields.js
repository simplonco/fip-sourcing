import React from 'react';
import PropTypes from 'prop-types';
import { observer, inject } from 'mobx-react';
import { BaseLink } from 'react-mobx-router5';

import ReactDOM from 'react-dom';
import Formsy from 'formsy-react';
import { propTypes, withFormsy } from 'formsy-react';

import MyInput from './Input';
import MySelect from './Select';
import MyRadioGroup from './RadioGroup';
import MyMultiCheckboxSet from './MultiCheckboxSet';

@inject('customFormStore')
@observer
class Fields extends React.Component {
    onRemove(pos) {
        return event => {
            event.preventDefault();
            this.props.onRemove(pos);
        }
    };

    render() {
        return (
            <div className="fields">
                {this.props.data.map((field, i) => (
                    <div className="field" key={field.id}>
                        {
                            field.type === 'input' &&
                            <MyInput
                                value=""
                                name={`fields[${i}]`}
                                title={field.validations ? JSON.stringify(field.validations) : 'No validations'}
                                required={field.required}
                                validations={field.validations}
                            />
                        }
                        {
                            field.type === 'select' &&
                            <MySelect
                                name={`fields[${i}]`}
                                title={field.validations ? JSON.stringify(field.validations) : 'No validations'}
                                required={field.required}
                                validations={field.validations}
                                options={[
                                    { title: '123', value: '123' },
                                    { title: 'some long text', value: 'some long text' },
                                    { title: '`empty string`', value: '' },
                                    { title: 'alpha42', value: 'alpha42' },
                                    { title: 'test@mail.com', value: 'test@mail.com' }
                                ]}
                            />
                        }
                        {
                            field.type === 'radio' &&
                            <MyRadioGroup
                                name={`fields[${i}]`}
                                value="input"
                                title={field.validations ? JSON.stringify(field.validations) : 'No validations'}
                                required={field.required}
                                validations={field.validations}
                                items={['réponse A', 'réponse B', 'réponse C', 'réponse D']}
                            />
                        }
                        {field.type === 'checkbox' &&
                            <MyMultiCheckboxSet
                                name={`fields[${i}]`}
                                title={field.validations ? JSON.stringify(field.validations) : 'No validations'}
                                cmp={(a, b) => JSON.stringify(a) === JSON.stringify(b)}
                                items={[
                                    { answerA: "A" },
                                    { answerB: true },
                                    { answerC: 42 }
                                ]}
                            />}

                        <button className="remove-field" onClick={this.onRemove(i)}>X</button>
                    </div>
                ))
                }
            </div>
        );
    }
}

Fields.propTypes = {
    ...propTypes,
};

export default withFormsy(Fields);

