module.exports = {
  prefix: 'tw-',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      'sm': '576px',
      'md': '768px',
      'lg': '992px',
      'xl': '1200px',
      'xxl': '1400px',
    },
    extend: {
      fontFamily: {
        roboto: "'oboto',serif",
      },
      colors: {
        white: '#ffffff',
        primary: '#1c9fa7',
        primary2: '#0e6095',
      },
    },
  },
  plugins: [],
}
