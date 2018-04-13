import React, {Component} from 'react'

export default class Formation extends Component {

    render() {
        const {name} = this.props.data
        const selected = (this.props.data.selected) ? ('X '): ''

        return (
            <div>
                {selected} {name}
            </div>
        )
    }

}