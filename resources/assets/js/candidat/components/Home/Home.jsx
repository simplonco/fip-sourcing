import React from 'react';
import PropTypes from 'prop-types';
import {observer, inject} from 'mobx-react';
import {BaseLink} from "react-mobx-router5";

@inject('routerStore')
@inject('progressStore')
@observer
class Home extends React.Component {

    static propTypes = {
        progressStore: PropTypes.object.isRequired
    }

  constructor(props){
    super(props);
    this.onClick = this.onClick.bind(this);
  }

  onClick(e) {
    e.preventDefault();
    e.stopPropagation();
    console.log("Someone pushed me");
  }

  render() {
    return (
        <div>
            <h6>Au dessus; c le menu</h6>
            <hr/>
            <progress value={this.props.progressStore.currentProgress} max="100" />
        </div>
    );
  }
}

export default Home;
