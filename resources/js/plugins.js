// --------------------------------------------
// PLUGINS
// --------------------------------------------

// Import Bootstrap
import bootstrap from 'bootstrap'
 // Import Sal animate on scroll
import sal from 'sal.js'
// Import Glide
import Glide from '@glidejs/glide'
// Import feather icons
const feather = require('feather-icons');


// Init main js
import styler_js from './main';

const plugins = {sal,Glide,feather};

// Init when dom loaded
window.addEventListener('DOMContentLoaded', styler_js(plugins))