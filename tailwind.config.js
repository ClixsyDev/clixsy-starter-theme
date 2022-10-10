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
    },
    screens: {
      '2xl': { max: '1432px' },
      xl: { max: '1280px' },
      lg: { max: '1024px' },
      mdt: { max: '992px' },
      md: { max: '768px' },
      sm: { max: '640px' },
      xs: { max: '540px' },
    },
    fontFamily: {
      helvetica: ['Helvetica Neue', 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica', 'Arial', 'Lucida Grande', 'sans-serif'],
      avenir: ['Avenir'],
    },
    extend: {
      transitionProperty: {
        width: 'width',
      },
      boxShadow: {
        siteWide: '0px 3px 6px rgba(0, 0, 0, 0.16)',
      },
      colors: {
        kennySmoke: '#A5ACAF',
        kennyGreen: '#69BE26',
        kennyBlue: '#021A33',
        kennyBlueSecond: '#002244',
        kennyBlueThird: '#032241',
        kennyGrayText: '#024',
        smoke: '#f4f2f2',
        bordercolor: '#f0eded',
        semiWhite: '#fdfdfd',
        semiblue: '#264c6d',
        darkblue: '#000261',
        accent: '#041e42',
        reviewText: '#707070',
        yellow: '#ffe900',
        lightBlueOpacity: 'rgba(255, 255, 255, 0.1)',
        whiteOpacity: 'rgba(255, 255, 255, 0.9)',
        caseSubtitle: 'rgba(4, 30, 66, 0.28)',
        
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
    },
    container: {
      center: true,
      padding: '1rem',
      screens: {
        sm: '600px',
        md: '728px',
        lg: '984px',
        xl: '1432px',
      },
    },
    plugins: [
      function ({ addVariant }) {
          addVariant('child', '& > *');
          addVariant('child-hover', '& > *:hover');
      }
    ],
  },
};
