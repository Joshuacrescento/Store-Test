import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import ProfileData from './ProfileData'

class ProfileShell extends Component {
    constructor(props) {
        super(props);
        this.state = {
        };
    }

    componentDidMount(){
    }

    componentDidUpdate(){
    }

    render() {
        return (

            <React.Fragment>
            <ProfileData name={this.props.name} points={this.props.points} coupon={this.props.coupon}></ProfileData>
            </React.Fragment>
        );
    }
    
}

export default ProfileShell;

if (document.getElementById('profileShell')) {
    const el = document.getElementById('profileShell');
    ReactDOM.render(<ProfileShell {...(el.dataset)} />, el);
}
