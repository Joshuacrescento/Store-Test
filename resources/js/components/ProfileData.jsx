import React, { Component } from 'react';
import Buy from './Buy'

class ProfileData extends Component {
    constructor(props) {
        super(props);
        this.state = {
            raw: 3,
        };
        this.handleClick = this.handleClick.bind(this);
    }

    componentDidMount(){
    }

    componentDidUpdate(){
    }

    handleClick(){
        this.setState({raw:this.state.raw+1})
    }

    render() {
        return (
            <React.Fragment>
                <p className="text-md-left">Bienvenido {this.props.name}</p>
                <p className="text-md-right">Puntos {this.props.points}</p>
            </React.Fragment>
        );
    }
    
}

export default ProfileData;

