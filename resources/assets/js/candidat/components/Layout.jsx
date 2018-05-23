import React, {Component} from 'react'
import Formations from './Formations'
import Questionnaires from "./Questionnaires";
import {Get} from "../actions/formations";
import {inject, observer} from "mobx-react/index";

const style = {
    show: {},
    hide: {display:'none'}
};

@inject('formationsStore')
@observer
export default class Layout extends Component {
    componentWillMount() {
        Get()
    }
    render() {
        const ready = this.props.formationsStore.ready
        const selected = this.props.formationsStore.finished

        return (
            <div>
                {ready && (!selected && <Formations /> ||<Questionnaires/>) || 'Chargement...'}
            </div>
        )
    }
}