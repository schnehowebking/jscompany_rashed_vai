<p align="center">
<a href="https://www.npmjs.com/package/laravel-mix-eslint-config"><img src="https://img.shields.io/npm/v/laravel-mix-eslint-config.svg" alt="NPM"></a>
<a href="https://npmcharts.com/compare/laravel-mix-eslint-config?minimal=true"><img src="https://img.shields.io/npm/dt/laravel-mix-eslint-config.svg" alt="NPM"></a>
<a href="https://www.npmjs.com/package/laravel-mix-eslint-config"><img src="https://img.shields.io/npm/l/laravel-mix-eslint-config.svg" alt="NPM"></a>
</p>


# Laravel Mix Eslint Config

This is a modified/extended version of laravel-mix-eslint -- which allows for more customization,
or you can just use the defaults configuration settings.


The original extension could only customize config.options but all other config options were not editable, e.g.: 'compiler', 'enforce', 'exclude', 'include', 'issuer', 'loader', 'loaders', 'oneOf', 'options', 'parser', 'query', 'resolve', 'resource', 'resourceQuery', 'rules', 'sideEffects', 'test', 'type', 'use'. 

This extension provides instant Eslint support to your Mix (v2.1 and up) builds, and is configurable for both react and vue.

## Usage

First, install the extension.

```
npm install laravel-mix-eslint-config --save-dev
```
or 
```
yarn add laravel-mix-eslint-config -D 
```

Then, require it within your `webpack.mix.js` file, like so:

```js
let mix = require('laravel-mix');

require('laravel-mix-eslint-config');

mix
    .js('resources/assets/js/app.js', 'public/js').eslint({
        enforce: 'pre',
        test: ['js', 'vue'], // will convert to /\.(js|vue)$/ or you can use /\.(js|vue)$/ by itself. 
        exclude: ['node_modules', 'some/other/dir'], // will convert to regexp and work. or you can use a regular expression like /node_modules/,
        loader: 'eslint-loader',
        options: {
            fix: true,
            cache: false,
            //...
        }
    })
    .less('resources/assets/less/app.less', 'public/css');
```

You can pass an object with options for the [eslint-loader](https://github.com/webpack-contrib/eslint-loader) to the `mix.eslint()` function.

Passing in a config object is optional, if you choose not to go that route, you can just use mix.eslint(), which will use the defaults: 

```js
  {  
    enforce: 'pre',
    test: /\.(js|vue)$/,
    exclude: /node_modules/,
    loader: 'eslint-loader',
    options: {}
  }
```

And you're done! Compile everything down with `npm run dev`.
