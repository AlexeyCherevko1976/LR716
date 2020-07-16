import React, { Component } from 'react';
import ReactDOM from 'react-dom';
 
/* An example React component */
class Clock extends Component {

  constructor() {
  
    super();
    //Initialize the state in the constructor
    this.state = {
        products: [],
        currentProduct: null
    
    }
     //this.handleAddProduct = this.handleAddProduct.bind(this);
  } 
 
  componentDidMount() {
    /* fetch API in action */
    fetch('/api/products')
        .then(response => {
            return response.json();
        })
        .then(products => {
            //Fetched product is stored in the state
            this.setState({ products });
        });
  }
 renderProducts() {
    const listStyle = {
            fontSize: '24px'
            }
    let products=this.state.products;
      //return JSON.stringify(products);
      return this.state.products.map(product => {
        return (
          <div style={listStyle}>{product.title} </div>

          )});
  }  

    render() { //
        return (
            <div>
                <h3>Clock</h3>
                <div>
                  
                </div>

            </div>
        );
    }
}
 
export default Clock;
 

 
if (document.getElementById('clock')) {
    ReactDOM.render(<Clock />, document.getElementById('clock'));
}