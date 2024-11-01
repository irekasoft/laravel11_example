import React from 'react';
import { createRoot } from 'react-dom/client';
import axios from 'axios';


axios.defaults.headers.common['Accept'] = 'application/json';


class Dashboard extends React.Component {

  componentDidMount() {

    axios.get('/api/user').then(response => {
      
      console.log(response);

    }).catch(error => {

      console.log('error', error);

    });

  }

  render() {
    return (
      <div className="container mx-auto py-4 px-4">
        <h1 className="text-2xl font-bold mb-4">Dashboard</h1>
     
          <div className=" text-gray-800">
            Welcome
          </div>
          <div className="">
            <p>You are logged in!</p>
          </div>

      </div>
    )
  }
}

export default Dashboard;

const element = document.getElementById("Dashboard");
if (element) {
  const props = Object.assign({}, element.dataset);
  const root = createRoot(element);
  root.render(<Dashboard {...props} />);
}