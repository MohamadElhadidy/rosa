/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors:{
            'hero': '#F8F7F5'
        },
        fontFamily:{
            'rubik': ['Rubik', 'sans-serif']
        }
    },
  },
  plugins: [],
}
