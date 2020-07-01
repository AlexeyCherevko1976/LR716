import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Main extends Component {
    render() {
   const mainDivStyle =  {
        display: "flex",
        flexDirection: "row"
    }
    
    const divStyle = {
       
        justifyContent: "flex-start",
        padding: '10px',
        width: '35%',
        background: '#f0f0f0',
        padding: '20px 20px 20px 20px',
        margin: '30px 10px 10px 30px'
        
    }

    return (
        <div>
          <div style= {mainDivStyle}>
            <div style={divStyle}>
                <h3> All products </h3>
                  <ul>

                  </ul> 

            </div> 

          </div>
              
        </div>
      
    );
  
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Main />, document.getElementById('example'));
}
