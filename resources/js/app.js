// --------------------------------------------
// PLUGINS
// --------------------------------------------

// Import feather icons
const feather = require('feather-icons');
feather.replace();

// Import Sal animate on scroll
import sal from 'sal.js'
sal();

// Import Glide
import Glide from '@glidejs/glide'
new Glide( '#glide', {
    loop:true,
    autoplay: 4000
} ).mount();

// Import Bootstrap
import 'bootstrap'

// Custom Main JS
import './custom'
