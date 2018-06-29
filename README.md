# Wordpress Theme Boilerplate
A Wordpress theme boilerplate that follows BEM methodology and organizes assets using an SMACSS approach. It comes with Webpack that includes BrowserSync for auto-reloading / proxing a server, Babel for writing ES6-based javascript modules (if needed), Autoprefixer for cross-browser compatibility, and uses SCSS as the main loader for styles.

It provides a minimal, clean starting point for a WordPress theme. Specifically designed for better performance and higher productivity.

## Core Concepts
* BEM methodology for scalable, maintable Sass
* Only `theme` folder is version controlled, cutting out unncessary database/plugin conflicts. *NOTE*- Use Migrate DB Pro to manage database/plugin updates.

## Features
* BEM methodology for scalable, maintable Sass. Yes, this is a feature... [Here's why you should use BEM](https://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax).
* Grid system is flexbox based for same-height boxes, reverse grid, equal spacing & more
* Extendable, design-agnostic components to help get started, but not make design decisions
* Webpack, with Autoprefixer and BrowserSync setup for workflow enhancement


## Typography
Base-font-size uses the `rem` unit and is relative to the font-size of the root element `html`. That means that we can define a single font size on the root element, and define all `rem` units to be a percentage of that. The typography has font-size defined as a variable in `./global/_variables.scss` as `1rem`(16px), and line-height in 1.6 (24px). The default font-family Roboto, is provided by Google.

A PX to REM converter function is included to make REM conversion simple! This is found in `./global/_mixins.scss`. USAGE:
```css
.class {font-size: rem(18)}
```

## Grid
Using `Flexbox-Sass` as the grid, with custom container size set in `./layout/_grid.scss`.

## Utilities
Some functional helper classses are included to improve the performance and productivity everyday. All utilties are prefixed with `-u-*` for maintainable code syntax. Utilities are found in `./states/_utility.scss`.

## Components
Ships with a few design-agnostic components, such as:
* Nav/Nav-mobile, using `Primary` and `Mobile` menu locaitons inside WP Admin
* Hero with a few modifier classes, such as `--full-height` and `--has-gradient`, and basic ACF field data 
* Modal
* More to come, but purpose of this is to only provide foundation for architecture

## Mobile First
Mobile First is the design strategy that takes priority development for mobile devices like smartphones and tablets. It means all styles outside of a media queries apply to all devices, then larger screens are targeted for enhancement. This prevents small devices from having to parse tons of unused CSS. This theme uses the concept of "larger than" when thinking about breakpoints. Below are the defined  breakpoints:

* Larger than Mobile screen: 30rem (480px)
* Larger than Mobile screen: 48rem (768px)
* Larger than Tablet screen: 57.5rem (920px)
* Larger than Desktop screen: 75rem (1200px)

## Requirements
To use everything this theme ships with, you need the following installed on your machine:

* **PHP/MySQL** to install **WordPress**
* **NPM** & **Webpack** installed globally on machine

## Installation
1. Install a fresh WordPress installation and setup database + follow generic WP install steps.
2. Using terminal, navigate into the WordPress installation's `wp-content/themes` folder
3. Clone this theme repo by running the following:
``` bash
git clone https://github.com/brianotoole/wordpress-boiler.git && cd wordpress-boiler && npm i
```
4. *(optional)* Change the name of the theme folder to match your project's name
5. Change proxy location for BrowserSync. Open `webpack.config.js` and change the proxy location for BrowserSync to work:

``` bash
proxy: 'localhost/your-project-name', 
```

6. Start server for development
To make full use of the site-start though, you'll want to use Webpack to spin up a local dev server.

``` bash
npm run dev
```

This will open up a browser window with local site and watch for file changes - http://localhost:3000/wordpress-boiler


### Local images and font files 
Webpack needs a separate loader installed to use local images and/or fonts within the project's directory. This boilerplate uses `url-loader` to bundle/load images. Url-loader has the ability to load files as base64 encoded DataURL if the file is smaller than a specificied byte limit. This helps reduce the number of requests made. To change this configuration, refer to the rule set under "URL-LOADER within `webpack.config.js`

##### URL-Loader setup
The default specificed byte limit on this boilerplate to serve DataURL's on images is 10KB, or 10,000 bytes. There are 2 separate url-loader options to test for. 

**1. Test for image files**
``` javascript
{ // URL LOADER, IMAGE FILES
  test: /\.(jpe?g|png|svg)/,
  loader: 'url-loader?limit=10000&name=dist/img/[name].[ext]', //if < 10 kb, base64 encode img to css
},
```
This is testing for files with `.jpg/.jpeg/.png/.svg` extention types. If the file is less than 10KB, serve this as a DataURL. If greater than 10KB, bundle to the path within `&name`. Or, `./dist/img/[name].[ext]`.

**2. Test for font files**
``` javascript
{ // URL LOADER, FONTS
  test: /\.(woff|woff2|eot|ttf)/,
  loader: 'url-loader?limit=10000&name=dist/fonts/[name].[ext]', //font files to './dist/fonts/**.'
},
```
This is testing for files with `.woff/.woff2/.eot/.ttf` extention types. If the file is less than 10KB, serve this as a DataURL. If greater than 10KB, bundle to the path within `&name`. Or, `./dist/fonts/[name].[ext]`.

##### Using Images in Stylesheets
Add images within the `./src/img/` folder.
To use the image within a stylesheet, use the relative path from the main entrypoint file, `./src/index.js`. An example:
``` css
.section--has-bg { background: url('../img/bg-brick.png') 0 0 repeat; }
```

### Packages Included
1. [Autoprefixer](https://www.npmjs.com/package/autoprefixer)
will use the data based on current browser popularity and property support to automatically apply prefixes. This requires the [postcss-loader](https://github.com/postcss/postcss-loader) loader to be installed & used within `webpack.config.js` file. This is already setup and includes the `postcss.config` file needed to work. See the postcss-loader [documentation](https://github.com/postcss/postcss-loader) for dealing with browser support / options.

2. [BrowserSync](https://www.npmjs.com/package/browser-sync-webpack-plugin): 
This boiler is using BrowserSync to serve the project and Webpack Dev Server is not needed. The setup is pretty easy: just pass the BrowserSync options to the plugin as the first argument within the `webpack.config.js` file.

3. Babel: [babel-core](https://github.com/babel/babel-loader) and [babel-loader](https://github.com/babel/babel-loader) are used with the [Babel-Preset-ES2015](https://www.npmjs.com/package/babel-preset-es2015-webpack) preset. This preset is used to enable code to be written in ES2015 (ES6) and compiled for browser support down to ES5.

### Build files for production
When you're ready to minify production files, run the following in the theme's root:
``` bash
npm run build
```

This will run webpack's production build flag, `-p` to minify bundled files.

## TODO
- [ ] Include basic ACF data (options panel data)
- [ ] Include base icon set (font icon? font awesome?)
- [ ] Create a better production build script: on run-script 'build prod', compress images + min assets, etc.
- [ ] Add modernizr / setup basic fallback classes for IE