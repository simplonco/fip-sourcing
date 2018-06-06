import React, {Component} from 'react'
import {inject, observer} from 'mobx-react'

@inject('loadingStore')
@observer
export default class Loader extends Component {
    render() {
        if (!this.props.loadingStore.loading) return null;
        return (
            <div>
                chargement en cours
            </div>
        )
    }

}