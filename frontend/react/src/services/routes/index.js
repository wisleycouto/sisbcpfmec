import React from 'react';
import { BrowserRouter, Route, Switch } from 'react-router-dom';
import Home from '../../pages/Home';
import Error from '../../pages/Error';

function AppRoute() {
    return (
        <BrowserRouter >
            <Switch>
                <Route exact path="/" component={Home}/>
                <Route path="*" component={Error}/>
            </Switch>
        </BrowserRouter >
    );
}

export default AppRoute;