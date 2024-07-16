/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    ".resources/**/*.{html, js}",
    ".resources/views/**/*/.{html, js}",
    ".resources/views/components/**/*.{html, js}",
    ".public/**/*.{html, js}",
    ".public/index.html",

  ],
  theme: {
    extend: {
      fontFamily: {
        nunito: ['Nunito', 'sans-serif'],
        poppins: ['Poppins', 'sans-serif'],
        raleway: ['Raleway', 'sans-serif'],
        playfairdisplay: ['Playfair Display', 'sans-serif']
      }
    },
  },
  plugins: [
    function ( { addUtilities } ) {
      addUtilities({
        '.no-scrollbar': {
          '-ms-overflow-style': 'none',
          'scrollbar-width': 'none'
        },
        '.no-scrollbar::-webkit-scrollbar': {
          'display': 'none'
        }
      })
    }
  ],
}