import React, {Component} from 'react'
import {inject, observer} from 'mobx-react'
import {selectFormation, selectSession} from '../actions/formations'

@inject('formationsStore')
@observer
export default class Formation extends Component {

    constructor() {
        super()
        this.selectFormation = this.selectFormation.bind(this)
    }

    selectFormation() {
        console.log('selected !')
        selectFormation(this.props.data)
    }

    selectSession(sessionID){
        selectSession(sessionID)
    }

    render() {
        const {name} = this.props.data
        const selected = (this.props.formationsStore.selected === this.props.data.id)
        const style = selected ? {} : {display:'none'}
        const sessions = this.props.data.sessions.map((session)=>{
            return <li key={session.id}>{session.city} - Débute le {session.start_date}, fin des candidatures le {session.application_end_date} <button onClick={this.selectSession.bind(this, session.id)}>Je veux suivre cette formation</button></li>
        })
        return (
            <div>
                <h4><input selected={selected? 'selected' : false} type="radio" onChange={this.selectFormation}/>{selected? ('X '): ''} <span dangerouslySetInnerHTML={{__html:name}} /></h4>
            </div>
        )
    }

}