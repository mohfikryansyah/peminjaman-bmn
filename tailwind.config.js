// /** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    fontFamily: {
      'poppins': [
        'Poppins',
        'sans-serif'
      ],
      'inter': [
        'Inter',
        'sans-serif'
      ]
    }
  },
  plugins: [
      require('flowbite/plugin')
  ],
}
  
  