import React, {Component} from 'react'
import Panel from './Panel'
import Formations from './Formations'
import {inject, observer} from 'mobx-react'
import {Get} from '../actions/forms'
import Questionnaire from "./Questionnaire";

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

            forms = this.props.formsStore.questionnaires.map((q)=>{
                return <Questionnaire data={q} />
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