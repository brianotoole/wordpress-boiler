# BEM Wordpack Boilerplate Theme
A Wordpress them boilerplate that follows BEM methodology and organizes assets using an SMACSS approach. It comes with Webpack that includes BrowserSync for auto-reloading / proxing a server, Babel for writing ES6-based javascript modules (if needed), Autoprefixer for cross-browser compatibility, and uses SCSS as the main loader for styles.

## Requirements
To use everything this theme ships with, you need the following installed on your machine:

* **Wordpress** 4.9 or higher (requires PHP & MySQL)
* **NPM** & **Webpack** installed globally on machine

## Installation
1. Install a fresh WordPress installation (setup database + follow generic WP install steps)
2. Using terminal, navigate (`cd`) into the fresh WordPress installation's `wp-content/themes` folder
3. Clone the theme repository by running the following:
``` bash
git clone https://github.com/brianotoole/bem-wordpack-boiler.git && cd bem-wordpack-boiler && npm i
```
4. *(optional)* Change the name of the theme folder and package.json to match your project's name
5. Change proxy location for BrowserSync. Open `webpack.config.js` file and change the proxy location for BrowserSync to work:

Change proxy location to match the name of your wordpress installation folder: "localhost/bem-wordpack-boiler"
``` bash
proxy: 'localhost/Your-New-Site-Name', 
```

6. Start server for development
The boilerplate comes preset with css/js file inclusions, base meta settings, and a basic semantic body with a few modules to get you started. However, to make full use of the site-start though, you'll want to use Webpack.

``` bash
npm run dev
```

This will open up a browser window with local site and watch for file changes. Ex - http://localhost:3000/bem-wordpack-boiler

### Build files for production
When you're ready to minify production files, run the following in the theme's root:
``` bash
npm run build
```

This will run webpack's production build flag, `-p` to minify bundled files.

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

##### Using Images in Stylesheet
Add images within the `./src/img/` folder.
To use the image within a stylesheet, use the relative path from the main entrypoint file, `./src/index.js`. An example:
``` css
.section--has-bg { background: url('../img/bg-brick.png') 0 0 repeat; }
```

### Packages Included
1. [Autoprefixer](https://www.npmjs.com/package/autoprefixer)
will use the data based on current browser popularity and property support to automatically apply prefixes. This requires the [postcss-loader](https://github.com/postcss/postcss-loader) loader to be installed & used within `webpack.config.js` file. This is already setup and includes the `postcss.config` file needed to work. See the postcss-loader [documentation](https://github.com/postcss/postcss-loader) for dealing with browser support / options.

2. Babel: [babel-core](https://github.com/babel/babel-loader) and [babel-loader](https://github.com/babel/babel-loader) are used with the [Babel-Preset-ES2015](https://www.npmjs.com/package/babel-preset-es2015-webpack) preset. This preset is used to enable code to be written in ES2015 (ES6) and compiled for browser support down to ES5.

3. [BrowserSync](https://www.npmjs.com/package/browser-sync-webpack-plugin): 
This boiler is using BrowserSync to serve the project and Webpack Dev Server is not needed. The setup is pretty easy: just pass the BrowserSync options to the plugin as the first argument within the `webpack.config.js` file.

## TODO
- [ ] Include ACF-JSON folder for acf updates within repo
- [ ] Include basic ACF data (options panel data)
- [ ] Include base icon set (font icon? other?)
- [ ] Create a better production build script: on run-script 'build prod', compress images + min assets, etc.
- [ ] Add modernizr / setup basic fallback classes for IE