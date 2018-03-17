import React from 'react';
import PropTypes from 'prop-types';
import {withRoute, Link} from "react-mobx-router5";
import {incr, decr} from '../../../actions/progress';
import {inject, observer} from 'mobx-react'
let styles = {}

function AnotherElement(props) {
 return (
   <div className={props.className}>
      Put some footer here
   </div>
 );
}


AnotherElement.propTypes = {
  // These are injected by withRoute
  routerStore: PropTypes.object,
  route: PropTypes.object,
  isActive: PropTypes.bool,
  className: PropTypes.string,
  // This is passed to the wrapper for computing isActive and className
  routeName: PropTypes.string,
};

const AnotherComponentWithRoute = withRoute(AnotherElement);



@inject('progressStore')
@inject('formationsStore')
@observer
class Footer extends React.Component {
  constructor(props) {
    super(props);
  }

  incr() {
    incr()

  }

  decr () {

    decr()
  }

  render() {
    const style = {
      fontWeight: 'bold',
    };

    return (
      <div className={styles.container}>
          <hr/>
          This is the footer. It's been wrapped with `withRoute` HOC so it is aware of routes change and it will re-render on any route Change. <br/>
        <p>I did not pass a `routeName` prop to the resulting component so an `active` className will never be applied. <br/> <br/>
          Nonetheless it is aware of the current route: <i style={style}>{this.props.route.name}</i></p>

        <AnotherComponentWithRoute
          className={styles.anotherElement}
          routeName={'section.subsection.home'}
        />
        <button onClick={this.incr}>+</button>
          <button onClick={this.decr}>-</button>
          <p>{this.props.formationsStore.dummy}</p>
      </div>
    );
  }
}

Footer.propTypes = {
  // These are injected by withRoute
  routerStore: PropTypes.object,
  route: PropTypes.object,
  isActive: PropTypes.bool,
  className: PropTypes.string
};


export default withRoute(Footer);
