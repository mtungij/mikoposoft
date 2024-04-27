// tailwind.config.js
module.exports = {
  purge: [
    './application/views/**/*.php',
    './application/controllers/**/*.php',
    // Add your Flowbite JavaScript paths here:
    './node_modules/flowbite/**/*.js',
    "./node_modules/tw-elements/js/**/*.js"
  ],
  
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [
    require('flowbite/plugin'),
    require("tw-elements/plugin.cjs")
  ],
};




