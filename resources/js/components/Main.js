import React, { Component } from 'react';
import ReactDOM from 'react-dom';
 
/* An example React component */
class Main extends Component {

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
                <h3>All Products 12</h3>
                <div>
                  { this.renderProducts() }
                </div>
              <ul>
                 <li>Чебурашка</li>
                 <li>Крокодил Гена</li>
                 <li>Шапокляк</li>
              </ul>
            </div>
        );
    }
}
 
export default Main;
 
/* The if statement is required so as to Render the component on pages that have a div with an ID of "root";  
*/
 
if (document.getElementById('example')) {
    ReactDOM.render(<Main />, document.getElementById('example'));
}