# BEM Wordpack Boilerplate Theme
A Wordpress them boilerplate that follows BEM methodology and organizes assets using an SMACSS approach. It comes with Webpack that includes BrowserSync for auto-reloading / proxing a server, Babel for writing ES6-based javascript modules (if needed), Autoprefixer for cross-browser compatibility, and uses SCSS as the main loader for styles.

## Development:

* clone repo into a fresh wordpress installation's wp-content/themes folder
* navigate to 'wordpack-boiler' theme folder in command line
* run `npm install`
* *check webpack.config.js BrowserSyncPlugin 'proxy' option and make sure it matches the name of your wordpress installation folder*
* run `npm run dev` and make changes as needed
* run `npm run build` to compile for production