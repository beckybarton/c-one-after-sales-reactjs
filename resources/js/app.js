import './bootstrap';
import React from 'react';
// import ReactDOM from 'react-dom';/\
import { createRoot } from 'react-dom/client';
import DashboardIndex from './dashboard/dashboard_index';
// import TestVariableComponent from './dashboard/testvariable,';


// ReactDOM.render(<TestVariableComponent />, document.getElementById('testvariable')); //dapat naa sad ni sa pares nya nga nga view
// ReactDOM.render(<DashboardIndex />, document.getElementById('dashboarddiv'));
const root = createRoot(document.getElementById('dashboarddiv'));
root.render(<DashboardIndex />);