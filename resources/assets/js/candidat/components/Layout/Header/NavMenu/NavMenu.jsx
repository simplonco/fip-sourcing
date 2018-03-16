import React from "react";
import PropTypes from 'prop-types';
import {inject, observer} from "mobx-react";
import {NavLink} from "react-mobx-router5";
import {} from 'react-mobx-router5';

let styles = {}

const links = [
  {
    routeName: 'index',
    routeParams: {id: 1},
    linkName: 'index'
  },
  {
    routeName: 'section.home',
    routeParams: {},
    linkName: 'Section/Home'
  },
  {
    routeName: 'section.subsection.home',
    routeParams: {},
    linkName: 'Section/SubSection/home'
  },
  {
    routeName: 'login',
    routeParams: {},
    linkName: 'login/logout'
  }
];

const NavLinks = links.map((item, index) => {
  return (
    <NavLink
      key={index}
      routeName={item.routeName}
      routeParams={item.routeParams}>
      {item.linkName}
    </NavLink>);
});



function LoggedInMenu(props) {
  return (
    <ul className={styles.navMenu}>
      { NavLinks }
        <NavLink
            routeName={'section.subsection.index'}
            routeParams={{'id': 1}}>
            Choix de la formation : "formation selectionne"
        </NavLink>

        <NavLink
            routeName={'section.subsection.index'}
            routeParams={{'id': 2}}>
            Operationnel coup de poing
        </NavLink>

        <NavLink>
            L'administratif !
        </NavLink>
        <NavLink>
            Passé pro
        </NavLink>
        <NavLink>
            Le code'n'you
        </NavLink>
        <NavLink>
            Projection, Ippon tsunagi
        </NavLink>
    </ul>
  );
}

function LoggedOutMenu(props) {
  return (
    <ul className={styles.navMenu}>
      <NavLink routeName="login" linkClassName="class-for-login-link">
        login/logout
      </NavLink>
    </ul>
  );
}


@inject('userStore')
@observer
class NavMenu extends React.Component {

  render() {
    const isLoggedIn = true//this.props.userStore.isLoggedIn;
    return (
      isLoggedIn ? <LoggedInMenu /> : <LoggedOutMenu/>);
  }
}

NavMenu.propTypes = {
  userStore: PropTypes.object // injected
};

export default NavMenu;
