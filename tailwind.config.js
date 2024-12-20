/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1440px',
      },
      extend: {
        colors: {
          'primary': '#0097CE',
        },
        fontFamily: {
          'Poppins': ['Poppins', 'sans-serif'],
          'worksans': ['Work Sans', 'sans-serif'],
          'inter': ['Inter', 'sans-serif'],
        },
      },
    },
  plugins: [],
}

