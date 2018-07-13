import React,{Component} from 'react';
import './product.css';
class Product extends Component {
    render(){
      //returning some jsx elements

      const prod =this.props.products.map((item,i)=>(
              <div className="card" key={i}>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDS2zRseBjW778uemPQpB8Kc7Ha06_jY2QcNGthJJ_WOcOdsYQrQ"></img>
                <div className="products">
                <h1>{item.name?item.name:item[1]}</h1>
                <h3>Price : {item.price?item.price:item[2]} LE</h3>
                </div>
              </div>
            ))
      return(
        <div >
        <h1 className="display-1 text-center">Our products</h1>

        {prod}
        </div>
      )
    }
}

export default Product;
