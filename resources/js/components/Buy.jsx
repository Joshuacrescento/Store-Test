import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Buy extends Component {
    constructor(props) {
        super(props);
    }

    componentDidMount(){
        console.log(this.props.coupon)
        
    }
    componentDidUpdate(){
    }
    render() {
        return (
            <form action="" method="post">
                <div className="card-group">
                    <div className="card">
                        <img className="card-img-top" src="..." alt="Card image cap"/>
                    <div className="card-body">
                        <h5 className="card-title">{this.props.name}</h5>
                        <p className="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p className="card-text"><small className="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    </div>
                </div>
            </form>
        );
    }
    
}

export default Buy;


if (document.getElementById('product')) {
    const el = document.getElementById('product');
    ReactDOM.render(<Buy />, el);
}