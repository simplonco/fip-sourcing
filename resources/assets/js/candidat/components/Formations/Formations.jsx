import React from 'react'
import PropTypes from 'prop-types'
import {observer, inject} from 'mobx-react'
import {Get, Select} from '../../actions/formations'


@inject('routerStore')
@inject('formationsStore')
@observer
class Formations extends React.Component {
    static propTypes = {
        formationsStore: PropTypes.object.isRequired
    }

    constructor(props) {
        super(props)
        this.onClick = this.onClick.bind(this)
    }

    componentDidMount() {
        Get()
    }

    onClick (e) {

    }

    render () {
        const formations = this.props.formationsStore.formations.map((f)=>{
            return <div>{f.name}</div>
        })
        return (
            <div>
                {formations}
                Show me formations, and i want it know
            </div>
        )
    }
}

export default Formations