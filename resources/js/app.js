import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom';
import DashboardIndex from './dashboard/index';
import TestVariableComponent from './dashboard/testvariable,';

ReactDOM.render(<DashboardIndex />, document.getElementById('example'));
ReactDOM.render(<TestVariableComponent />, document.getElementById('testvariable'));

