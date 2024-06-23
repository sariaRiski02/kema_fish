/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
    theme: {  
      
      extend: {
        fontFamily:{
          'outfit': ['Outfit','sans-serif'],
        },
        flexGrow: {
          '3': 3,
        }
      }
      
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

