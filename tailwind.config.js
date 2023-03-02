const colors = require('./tailwind-colors');
const fonts = require('./tailwind-fonts');
module.exports = {
  content: ['./clixsy_src/**/*.{js,ts,jsx,tsx}', '**/*.php'],
  corePlugins: {
    container: true,
  },
  theme: {
    fontSize: {
      xs: '.75rem',
      sm: '.875rem',
      tiny: '.875rem',
      base: '1rem',
      lg: '1.125rem',
      xl: '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.875rem',
      '4xl': '2.25rem',
      '5xl': '3rem',
      '6xl': '4rem',
      '7xl': '5rem',
      '8xl': '80px',
      '10xl': '100px',
      '12xl': '125px',
      '13xl': '150px',
      '15xl': '250px',
      '17xl': '350px',
      '20xl': '500px',
    },
    screens: {
      fhd: { max: '1920px' },
      xxxl: { max: '1750px' },
      xxl: { max: '1630px' },
      '2xl': { max: '1496px' },
      xl: { max: '1280px' },
      'xl1240': { max: '1240px' },
      uniq_xl: { max: '1200px' },
      lg: { max: '1024px' },
      mdt: { max: '992px' },
      md: { max: '768px' },
      sm: { max: '640px' },
      xs: { max: '540px' },
      bxs: { max: '470px' },
      xxs: { max: '380px' }
    },

    extend: {
      transitionProperty: {
        width: 'width',
      },
      boxShadow: {
        siteWide: '0px 3px 6px rgba(0, 0, 0, 0.16)',
        reviews: '3px 3px 15px rgba(141, 141, 141, 0.47)',
      },
      dropShadow: {
        circleShadow: '0px 3px 6px rgba(0, 0, 0, 0.16)',
      },
      colors: colors,
      fontFamily: {
        main: fonts['main'],
        second: fonts['second'],
        third: fonts['third'],
        // fourth: fonts['fourth'],
      },
      width: {
        '1/24': '4.1666667%',
        '2/24': '8.3333333%',
        '3/24': '12.5%',
        '4/24': '16.6666667%',
        '5/24': '20.833333333%',
        '6/24': '25%',
        '7/24': '29.166666667%',
        '8/24': '33.333333333%',
        '9/24': '37.5%',
        '10/24': '41.666666667%',
        '11/24': '45.833333333%',
        '12/24': '50%',
        '13/24': '54.166666667%',
        '14/24': '58.333333333%',
        '15/24': '62.5%',
        '16/24': '66.666666667%',
        '17/24': '70.833333333%',
        '18/24': '75%',
        '19/24': '79.166666667%',
        '20/24': '83.333333333%',
        '21/24': '87.5%',
        '22/24': '91.666666667%',
        '23/24': '95.833333333%',
        '24/24': '100%',
      },
      height: {
        hero: '658px',
      },
      inset: {
        '7%': '7%',
        '11%': '11%',
        '17%': '17%',
        '25%': '25%',
        '10%': '10%',
        '55%': '55%',
        '45%': '45%',
        '35%': '35%',
        '50%': '50%',
        '57%': '57%',
        '58%': '58%',
      },
      content: {
        'content-dedicat': 'url("/assets/img/quote_dedicated.png")',
      },
      borderWidth: {
        1: '1px',
      },
    },
    container: {
      center: true,
      padding: '1rem',
      screens: {
        sm: '1200px',
        md: '1200px',
        lg: '1200px',
        xl: '1240px',
        '2xl': '1496px',
      },
    },
    plugins: [
      function ({ addVariant }) {
        addVariant('child', '& > *');
        addVariant('child-hover', '& > *:hover');
      },
    ],
  },
  plugins: [require('@tailwindcss/typography')],
};