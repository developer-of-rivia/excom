/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./app/*.html", 
    "./app/**/*.{html,js}"
  ],
  theme: {
    screens: {
      'sm': '576px',
      // => @media (min-width: 576px) { ... }
      'md': '768px',
      // => @media (min-width: 768px) { ... }
      'lg': '992px',
      // => @media (min-width: 992px) { ... }
      'xl': '1260px',
      // => @media (min-width: 1260px) { ... }
    },
    extend: {
      fontFamily: {
        montserrat: 'montserrat, sans-serif',
      },
      container:{
        center: true,
      },
      colors: {
        primary:{
          400: '#F27432',
          500: '#DF620D',
        },
        // black:{
        //   100: '#2B363B',
        //   200: '#344147',
        // },
        // gray:{
        //   100: '#3D6080'
        // }
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
  ],
}

