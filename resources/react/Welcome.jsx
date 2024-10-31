// add react code here

import React from 'react';
import { createRoot } from 'react-dom/client';

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
      <div className="text-3xl text-center font-bold">
        {this.state.message} - {this.props.message}

        <br/>
        Awesome

        <br/>

        <div className="bg-blue-500 cursor-pointer hover:bg-blue-700 text-black font-bold py-2 px-4 rounded"
          onClick={() => this.setState({ message: 'Clicked' })}>
          Click me
        </div>
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
