const darkColorPallet = {
  '50': '#f7f6f6',
  '100': '#e5e2e3',
  '200': '#cac5c6',
  '300': '#a7a1a2',
  '400': '#857c7c',
  '500': '#6a6262',
  '600': '#544d4e',
  '700': '#454040',
  '800': '#393636',
  '900': '#232121',
};

const primaryColorPallet = {
  '50': '#fff7ed',
  '100': '#ffeed5',
  '200': '#ffd9a9',
  '300': '#feb45e',
  '400': '#fd973a',
  '500': '#fb7914',
  '600': '#ec5d0a',
  '700': '#c4450a',
  '800': '#9b3711',
  '900': '#7d3011',
};

const secondaryColorPallet = {
  '50': '#fcfbea',
  '100': '#f7f7ca',
  '200': '#f1ed97',
  '300': '#e9dd5b',
  '400': '#e0cb2f',
  '500': '#d1b421',
  '600': '#b48e1a',
  '700': '#906818',
  '800': '#78531b',
  '900': '#442e13',
};

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.{blade.php, js}"],
  theme: {
    extend: {
      colors: {
        dark: darkColorPallet,
        primary: primaryColorPallet,
        secondary: secondaryColorPallet
      },
      fontFamily: {
        sans: ['Poppins', 'sans-serif']
      }
    },
  },
  plugins: [],
}
