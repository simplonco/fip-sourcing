import React from 'react';

import Header from './Header/Header';
import Main from '../../nodecomponents/Main/Main';
import Footer from './Footer/Footer';
import CustomForm from '../CustomForm/CustomForm';

let styles = {}

class Layout extends React.Component {
  constructor() {
    super();
  }

  render() {

    return (
      <div>

        <div className={styles.bodyLoader}/>

        <div className={styles.headerContainer}>
          <Header />
        </div>

        <main className={styles.mainContainer}>
          <Main />
          <CustomForm />
        </main>

        <footer className={styles.footerContainer}>
          <Footer />
        </footer>


      </div>
    );
  }
}

export default Layout;

