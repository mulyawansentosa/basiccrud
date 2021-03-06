const rollup = require('rollup').rollup
const babel = require('rollup-plugin-babel')
const pack = require('../package.json')
const banner = require('./banner.js')
const fs = require('fs')
const zlib = require('zlib')
const uglify = require('uglify-js')

const toUpper = (_, c) => {
  return c ? c.toUpperCase() : ''
}

const classifyRE = /(?:^|[-_\/])(\w)/g
const classify = (str) => {
  return str.replace(classifyRE, toUpper)
}

const zip = () => {
  return new Promise((resolve, reject) => {
    fs.readFile('dist/' + pack.name + '.min.js', (err, buf) => {
      if (err) return reject(err)
      zlib.gzip(buf, (err, buf) => {
        if (err) return reject(err)
        write('dist/' + pack.name + '.min.js.gz', buf).then(resolve)
      })
    })
  })
}

const write = (dest, code) => {
  return new Promise((resolve, reject) => {
    fs.writeFile(dest, code, (err) => {
      if (err) return reject(err)
      resolve()
    })
  })
}

const packageRollup = (options) => {
  const moduleId = classify(pack.name)
  return rollup({
    entry: 'src/sweetalert2.js',
    plugins: [
      babel({
        exclude: 'node_modules/**'
      })
    ]
  })
  .then((bundle) => {
    let code = bundle.generate({
      format: options.format,
      banner: banner,
      moduleName: classify(pack.name),
      footer: `if (window.${moduleId}) window.sweetAlert = window.swal = window.${moduleId};`
    }).code.replace(/sweetAlert\.version = '(.*)'/, "sweetAlert.version = '" + pack.version + "'")

    if (options.minify) {
      code = uglify.minify(code, {
        fromString: true
      }).code
    }
    return write(options.dest, code)
  })
}

module.exports = {
  packageRollup: packageRollup,
  write: write,
  zip: zip,
  classify: classify,
  toUpper: toUpper
}
