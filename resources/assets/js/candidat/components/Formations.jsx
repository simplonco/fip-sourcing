import React, {Component} from 'react'
import Sessions from './Sessions'
import {Get, selectFormation, selectSession} from '../actions/formations'
import {inject, observer} from 'mobx-react'

@inject('formationsStore')
@observer
export default class Formations extends Component {
    constructor() {
        super()
        this.selectFormation = this.selectFormation.bind(this)
    }
    selectFormation(e) {
        console.log('selected formation')
        selectFormation(e.target.value)
    }
    render() {
        const style = {
            show: {},
            hide: {display:'none'}
        };
        const ready = this.props.formationsStore.ready
        const selectedFormation = this.props.formationsStore.hasSelection
        const formations = [(<option key={'empty'}>_</option>),
            ...this.props.formationsStore.formations.map((formation)=>{
            return (<option key={formation.id} value={formation.id} dangerouslySetInnerHTML={{__html:formation.name}}/>)
        })];

        let sessions;
        if (ready && selectedFormation) {
            sessions = <Sessions />
        }

        return (
            <section>
                <div className={'formations'} style={ready && !selectedFormation ? style.show : style.hide}>
                    <h3>Selection d'une formation</h3>
                    <select onChange={this.selectFormation}>{formations}</select>
                </div>
                {sessions}
            </section>

        )
    }

}