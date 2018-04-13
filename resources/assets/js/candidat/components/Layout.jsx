import React, {Component} from 'react'
import Panel from './Panel'
import Formations from './Formations'
import {inject, observer} from 'mobx-react'
import {Get} from '../actions/forms'

@inject('formsStore')
@observer
export default class Layout extends Component {
    constructor() {
        super()

    }

    componentDidMount() {
        Get()
    }

    render() {
        const store = this.props.formsStore;
        let forms;
        if(store.ready) {

            forms = this.props.formsStore.fields.map((input) => {
                return (<div key={input.key} >
                    <label>{input.key}</label>
                    <input name={input.key} defaultValue={input.value} />
                </div>)
            })
        }

        return (
            <div>
                <Panel />
                {store.ready}
                <Formations />
                {forms}
            </div>
        )
    }
}