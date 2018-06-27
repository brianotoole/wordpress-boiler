var ExtractText = require('extract-text-webpack-plugin');
var BrowserSyncPlugin = require('browser-sync-webpack-plugin');

var config = {
  entry: ['./src/js/main.js', './src/scss/main.scss'],
  output: {
    filename: 'dist/js/[name].js'
  },
  module: {

    rules: [
      { // STYLE LOADERS
        test: /\.(css|sass|scss)$/,
        use: ExtractText.extract({
          use: ['css-loader', 'sass-loader'],
        })
      },
      { // SCRIPT LOADERS
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        loader: 'babel-loader',
        query: {
          presets: ['env']
        }
      },
      { // URL LOADER, IMAGE FILES
        test: /\.(jpe?g|png|svg)/,
        loader: 'url-loader?limit=10000&name=dist/img/[name].[ext]', //if < 10 kb, base64 encode img to css
      },
      { // URL LOADER, FONT FILES
        test: /\.(woff|woff2|eot|ttf)/,
        loader: 'url-loader?limit=10000&name=dist/fonts/[name].[ext]', //font files to './dist/fonts/**.'
      },
    ]
  },
  plugins: [
    new ExtractText({
      filename: 'dist/css/[name].css',
      allChunks: true,
    }),
    new BrowserSyncPlugin({
      host: 'localhost',
      port: 3000,
      // @NOTE: make sure this proxy matches the folder name of your wordpress installation
      proxy: 'http://localhost/wordpress-boiler',
      files: ['**/*.php'],
      ghostMode: {
        clicks: false,
        forms: false
      }
    })
  ]
};

module.exports = config;
