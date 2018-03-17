import React from 'react'
import PropTypes from 'prop-types'
import {observer, inject} from 'mobx-react'
import {Get, Select, Dummy} from '../../actions/formations'


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
        this.onDummyChange = this.onDummyChange.bind(this)
    }

    componentDidMount() {
        Get()
        Dummy()
    }

    onClick (e) {

    }

    onDummyChange (e) {
        this.props.formationsStore.setDummy(e.target.value)
    }

    render () {
        const formations = this.props.formationsStore.formations.map((f)=>{
            return <div>{f.name}</div>
        })
        return (
            <div>
                {formations}
                <div>
                    <input onChange={this.onDummyChange} value={this.props.formationsStore.dummy} />
                </div>
            </div>
        )
    }
}

export default Formations