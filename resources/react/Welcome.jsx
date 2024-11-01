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
      <div className="mt-4">

        Salam....

        <br/>
        <div className="mt-0"></div>

        {this.state.message} - {this.props.message} - {this.props.data}

        <br/>

        <br/>

        <button
          className="bg-blue-900 text-white px-6 py-2 rounded"
          onClick={() => this.setState({ message: 'Clicked' })}>
          Click me
        </button>

        <div className="mt-5"></div>

        Count: {this.state.count}
        
        <br/><br/>

        <button
          className="bg-blue-500 text-white px-4 py-2 rounded"
          onClick={() => this.setState({ count: this.state.count + 1 })}>
          Increment
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
