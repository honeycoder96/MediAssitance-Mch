import React from 'react';
import ReactDOM from 'react-dom';

// import AgentEnquiries from './AgentEnquiries/AgentEnquiries.js';
import registerServiceWorker from './registerServiceWorker';
import homepage from './index.jade';

ReactDOM.render(<homepage />, document.getElementById('HomePage'));

registerServiceWorker();