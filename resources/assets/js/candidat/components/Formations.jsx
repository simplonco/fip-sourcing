import React, {Component} from 'react'
import Formation from './Formation'
import {Get} from '../actions/formations'
import {inject, observer} from 'mobx-react'

@inject('formationsStore')
@observer
export default class Formations extends Component {
    constructor() {
        super()
    }

    componentWillMount() {
        Get()
    }

    render() {
        const formations = this.props.formationsStore.formations.map((formation)=>{
            return (<Formation key={formation.id} data={formation}/>)
        })
        return (
            <div>
                {formations}
            </div>
        )
    }

}