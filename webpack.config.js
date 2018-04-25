var ExtractText = require('extract-text-webpack-plugin');
var BrowserSyncPlugin = require('browser-sync-webpack-plugin');

var config = {
  entry: ['./src/js/main.js', './src/scss/main.scss'],
  output: {
    filename: 'assets/js/[name].js'
  },
  module: {

    rules: [
      {
        test: /\.(css|sass|scss)$/,
        use: ExtractText.extract({
          use: ['css-loader', 'sass-loader'],
        })
      },
      {
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        loader: 'babel-loader',
        query: {
          presets: ['env']
        }
      },
    ]
  },
  plugins: [
    new ExtractText({
      filename: 'assets/css/[name].css',
      allChunks: true,
    }),
    new BrowserSyncPlugin({
      host: 'localhost',
      port: 3000,
      // @NOTE: make sure this proxy matches the folder name of your wordpress installation
      proxy: 'http://localhost/bem-wordpack-boiler',
      files: ['**/*.php'],
      ghostMode: {
        clicks: false,
        forms: false
      }
    })
  ]
};

module.exports = config;
