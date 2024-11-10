const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const webpack = require('webpack');
const fs = require('fs');
const CleanCSS = require('clean-css');
const WriteFilePlugin = require('write-file-webpack-plugin');

module.exports = {
  entry: {
    style: './src/sass/style.scss', 
    customizer: './src/js/customizer.js',
    navigation: './src/js/navigation.js',
    scripts: './src/js/scripts.js',
  },
  output: {
    filename: 'js/[name].bundle.js',
    path: path.resolve(__dirname, 'dist'),
  },
  module: {
    rules: [
      {
        test: /\.s[ac]ss$/i,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader',
        ],
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env'],
          },
        },
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/i,
        type: 'asset/resource',
        generator: {
          filename: 'fonts/[hash][ext][query]',
        },
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'css/[name].css',
    }),
    new WriteFilePlugin(),
    new webpack.ProgressPlugin(),
    function () {
      this.hooks.done.tap('MinifyPlugin', () => {
        const cssFiles = ['style'];

        cssFiles.forEach((file) => {
          const cssPath = path.resolve(__dirname, `dist/css/${file}.css`);
          const minCssPath = path.resolve(__dirname, `dist/css/${file}.min.css`);

          if (fs.existsSync(cssPath)) {
            const css = fs.readFileSync(cssPath, 'utf8');
            const minifiedCss = new CleanCSS({ level: { 1: { specialComments: 0 }, 2: {} } }).minify(css).styles;
            fs.writeFileSync(minCssPath, minifiedCss);
          } else {
            console.error(`File dist/css/${file}.css not found, minification skipped.`);
          }
        });
      });
    },
  ],
  optimization: {
    minimize: true,
    minimizer: [
      new TerserPlugin({
        terserOptions: {
          format: {
            comments: false,
          },
        },
        extractComments: false,
      }),
    ],
  },
  resolve: {
    alias: {
      '@img': path.resolve(__dirname, 'img'), // Alias dla katalogu img
    },
  },
  devtool: 'source-map',
  mode: 'development',
  watch: true,
  stats: {
    errorDetails: true, // Włącz szczegóły błędów
  },
};
