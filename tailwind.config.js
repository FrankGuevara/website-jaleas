/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      screens: {
        'small': {max:'414px'}, // Define un breakpoint para pantallas de 414px
      },
    },
  },
  plugins: [],
}

