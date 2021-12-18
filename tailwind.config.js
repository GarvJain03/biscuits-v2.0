module.exports = {
  purge: ['./resources/**/*.edge', './resources/**/*.js', './resources/**/*.tsx'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'dark-bg': '#121212',
        'heading-green': '#1DB954',
        'text-green': '#1ED760',
        'button-gray': '#272727',
        'cool-gray': '#3D3C3C',
        'gray-light': '#202020',
      },
      fontFamily: {
        sans: ['Chakra Petch', 'sans-serif'],
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
