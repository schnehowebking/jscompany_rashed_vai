let mix = require('laravel-mix')
class Eslint {
  dependencies () {
    this.requiresReload = `
            Dependencies have been installed. Please run "npm run dev" again.
        `
    let dependencies = ['eslint', 'eslint-loader']
    if (Array.isArray(this.plugins) && this.plugins.length > 0) {
      this.plugins.forEach(plugin => {
        if (plugin === 'vue') { dependencies.push('eslint-plugin-vue') }
        if (plugin === 'react') { dependencies.push('eslint-plugin-react') }
      })
    }
    return dependencies
  }

  register (config = {}) {
    this.plugins = (config && Array.isArray(config.plugins)) ? config.plugins : ['vue']
    const defaultConfig = {
      enforce: 'pre',
      test: /\.(js|vue)$/,
      exclude: /node_modules/,
      loader: 'eslint-loader',
      options: {}
    }
    // If no config is passed used default.
    config = (Object.keys(config).length > 0) ? config : defaultConfig

    if (Object.keys(config).length > 0) {
      config.exclude = Array.isArray(config.exclude)
        ? config.exclude.map(ex => { return new RegExp(ex) })
        : config.exclude
      config.include = Array.isArray(config.include)
        ? config.include.map(ex => { return new RegExp(ex) })
        : config.include

      config.test = Array.isArray(config.test)
        ? (Regexp(RegExp(`\\.(${config.test.join('|')})$`)))
        : /\.(js|vue)$/
    }

    // Let's ensure all options passed to webpack are allowed by webpack's config contract
    const allowedKeys = ['compiler', 'enforce', 'exclude', 'include', 'issuer', 'loader', 'loaders', 'oneOf', 'options', 'parser', 'query', 'resolve', 'resource', 'resourceQuery', 'rules', 'sideEffects', 'test', 'type', 'use']
    const only = (obj, keys) => Object.keys(obj)
      .filter(i => keys.includes(i))
      .reduce((acc, key) => {
        acc[key] = obj[key]
        return acc
      }, {})

    // Remove extra features allowed by this plugin, but not webpack...
    // e.g. plugins: ['vue', 'react']
    config = only(config, allowedKeys)

    // Ensure required keys are set...
    Object.keys(defaultConfig).map(confKey => {
      // loader or loaders can be used for webpack.
      if (confKey === 'loader' && (config.loader || config.loaders)) {
        return false
      }
      if (!config[confKey]) {
        config[confKey] = defaultConfig[confKey]
      }
    })
    this.config = config
  }

  webpackRules () {
    return this.config
  }
}

mix.extend('eslint', new Eslint())
