/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.scss');
require('../css/objects/circle-template.scss');
require('../css/objects/rectangle-template.scss');
require('../css/objects/star-template.scss');
require('../css/objects/octagon-template.scss');
require('../css/objects-collection.scss');

require('../js/objects/circle-template.js');
require('../js/objects/rectangle-template.js');
require('../js/objects/star-template.js');
require('./objects/octagon-template.js');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// const $ = require('jquery');

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');
