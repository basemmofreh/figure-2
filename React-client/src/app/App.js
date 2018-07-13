import React, { Component } from 'react';
import './App.css';
import axios from 'axios';
//components
import Product from '../product/product';

//api links
const api_1="http://localhost/php/";
const api_2="http://localhost/php/readCsv.php";

class App extends Component {
  constructor(props){
    super(props);
    this.state={products:[]};
    this.loadData = this.loadData.bind(this);
    this.loadData(api_1,api_2);

  }

loadData(link,link2){
  //storing pointer to the component "async request about to be done"
  var self = this;
  //request to the APIs with callback chaining / could be done via async-await
  return axios.get(link)
    .then(function (response) {
        self.setState({products:response.data});
        return axios.get(link2);
    }).then(function(response){
        var newArray = self.state.products.slice();
        newArray.push(...response.data);
        self.setState({products:newArray})
    })
}
  render() {
    return (
        <Product products={this.state.products}/>
    );
  }
}

export default App;
