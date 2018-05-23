import React, {Component} from 'react'
import {inject, observer} from 'mobx-react'
import Questionnaire from './Questionnaire'
import Panel from './Panel'

@inject('formsStore')
@observer
export default class Questionnaires extends Component {
    render() {
        const store = this.props.formsStore;
        let forms;
        if(store.ready) {
            forms = this.props.formsStore.questionnaires.map((q)=>{
                return <Questionnaire key={q.id} data={q} />
            })
        }
        return (
            <section className={'questionnaires'}>
                <aside>
                    <Panel />
                </aside>
                <div>{forms}</div>
            </section>
        )
    }
}