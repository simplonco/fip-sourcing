import React, {Component} from 'react'
import {inject, observer} from 'mobx-react'

@inject('formationsStore')
@observer
export default class Panel extends Component {
    constructor() {
        super()
    }

    render() {
        const  currentFormation = this.props.formationsStore.currentFormation;
        return (
            <div>
                points, progression and stuff

                <div>
                    Formation et session sélectionnées : <span dangerouslySetInnerHTML={{__html:currentFormation.name}} /> - {currentFormation.session.city}
                </div>
            </div>
        )
    }

}