/*********************************************************
  Main JS Entry Point
*********************************************************/

// GLOBAL
require('./global/events.js');
 
// COMPONENTS
// @TODO: convert to es6
require('./components/nav.js');
require('./components/social-sharing.js')

import Modal from './components/modal';
var modal = new Modal();
 
// TEMPLATES
//require('./templates/about.js');