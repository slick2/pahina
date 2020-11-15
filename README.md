# Pahina
A WordPress starter theme based on [Underscores](https://underscores.me/) and [Boostratap 5](https://v5.getbootstrap.com)

# Demo
[https://josephlariosa.com/pahina](https://josephlariosa.com/pahina)

# Basic Features
* Combines Underscore’s PHP/JS files and Bootstrap’s HTML/CSS/JS.
* Comes with Bootstrap (v5) Sass source files and additional .scss files. Nicely sorted and ready to add your own variables and customize the Bootstrap variables.
* Uses a single minified CSS file for all the basic stuff.
* Font Awesome integration (v6)
* Jetpack ready.
* WooCommerce support.
* Child Theme ready.
* Translation ready.

# Installation
Download or clone the repo to wp-content/themes/**pahina** then navigate to wp-admin->themes and activate the theme.

# Customization
***Please do not use this as your primary theme, as all your changes will be overwritten when the pahina theme updates, instead use the [childtheme - https://github.com/jahzlariosa/pahina-child](https://github.com/jahzlariosa/pahina-child)***

* Your design goes into: /sass/theme.**
* Add your styles to the /sass/theme/custom.scss file
* And your variables to the /sass/theme/variables.scss
* Or add other .scss files into it and @import it into /sass/theme/theme.scss.
* Add your custom javascripts into ./js/theme.js

## Compile

**Requirements**
* [node.js](https://nodejs.org/) make sure node.js is installed to your machince/pc
* [gulp.js](https://gulpjs.com/docs/en/getting-started/quick-start) make things easier install gulp cli
```
npm install --global gulp-cli
```

* Move the dependencies to the src folder, This includes bootstrap 5 & fontawesome source files
```
gulp get-src
```

**Commands**
* Compile SaSS & Minify the css files
```
gulp styles
```
* Compile and minify js files
```
gulp scripts
```
* Run styles and scripts at once
```
gulp build-assets
```

## Use browserSync | Edit gulpconfig.json
* Serving from a server environment
```
"proxy": "localhost:3000" //replace this with your environment url
```
* Run the server
```
gulp start
```

## License

Pahina is licensed under GNU General Public License v2 - <https://opensource.org/licenses/GPL-2.0>

## Author

Pahina is Developed and Maintained by **[Joseph Lariosa](https://github.com/jahzlariosa)**

[![Facebook](https://img.shields.io/badge/facebook-%231877F2.svg?&style=for-the-badge&logo=facebook&logoColor=white)](https://facebook.com/webdesignsbyjahz)
[![Twitter](https://img.shields.io/badge/twitter-%231DA1F2.svg?&style=for-the-badge&logo=twitter&logoColor=white)](https://twitter.com/jahzlariosa)
[![LinkedIn](https://img.shields.io/badge/linkedin-%230077B5.svg?&style=for-the-badge&logo=linkedin&logoColor=white)](https://linkedin.com/in/jahz)

## Donate or Support
If this project helps you please consider to donate or **support the developer**

[![Donate](https://img.shields.io/badge/Donate-PayPal-blue.svg?style=for-the-badge)](https://paypal.me/josephlariosa) [![Support](https://img.shields.io/badge/Support-Buy%20Me%20A%20Coffee-green.svg?style=for-the-badge)](https://buymeacoff.ee/josephlariosa) [![Send](https://img.shields.io/badge/send-btc-yellow.svg?style=for-the-badge)](https://jahz.bitcoinwallet.com/)

Crafted with :heart: and :coffee: by Joseph Lariosa | :philippines:
