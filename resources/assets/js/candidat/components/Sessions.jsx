import React, {Component} from 'react'
import {selectSession} from '../actions/formations'
import {inject, observer} from 'mobx-react'

@inject('formationsStore')
@observer
export default class Formations extends Component {
    constructor() {
        super()
        this.selectSession = this.selectSession.bind(this)
    }
    selectSession(e) {
        selectSession(e.target.value)
    }
    render() {
        const style = {
            show: {},
            hide: {display:'none'}
        };
        const ready = this.props.formationsStore.ready
        const selectedFormation = this.props.formationsStore.hasSelection
        const villes = [(<option>_</option>),
            ...this.props.formationsStore.currentFormation.sessions.map((session)=>{
                return (<option key={session.id} value={session.id} dangerouslySetInnerHTML={{__html:session.city}}/>)
            })];

        return (
            <section>
                <div className={'formations'} style={ready && !selectedFormation ? style.show : style.hide}>
                    <h3>Selectionnez une Ville</h3>
                    <select onChange={this.selectSession}>{villes}</select>
                </div>
            </section>

        )
    }

}