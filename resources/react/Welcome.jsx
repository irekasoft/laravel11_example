// add react code here

import React from 'react';
import { createRoot } from 'react-dom/client';

// import { Button } from '@/Components/ui/button';

class Welcome extends React.Component {

  constructor(props) {
    super(props);
    this.state = {
      message: 'Welcome with React',
      count: 0,
    };
  }

  render() {
    return (
      <div className="">
        {this.state.message} - {this.props.message}

        <br/>
        Awesome

        <br/>

        <button
          onClick={() => this.setState({ message: 'Clicked' })}>
          Click me
        </button>
      </div>
    );
  }

}


const element = document.getElementById("Welcome");
if (element) {
  const props = Object.assign({}, element.dataset);
  const root = createRoot(element);
  root.render(<Welcome {...props} />);
}
