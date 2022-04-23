module.exports = {
  content: [
    './**/*.{html,js}',
  ],
  theme: {
    extend: {
      colors: {
        'gray': '#E5E5E5',
        'blue': '#385987',
        'ivory': 'rgb(255, 255, 240)',
      },
      inset: {
      },
      fontFamily: {
        'oswald': ['Oswald', 'sans-serif'],
        'sans': ['Arial', 'Helvetica', 'sans-serif'],
      },
      transformOrigin: {
        'center-right': "center right",
        'tRect': "10% 10%",
        'bRect': "10% 90%"
      },
      spacing:{
        '1/20': "5%",
        '2/20': "10%",
        '3/20': "15%",
        '4/20': "20%",
        '5/20': "25%",
        '6/20': "30%",
        '7/20': "35%",
        '8/20': "40%",
        '9/20': "45%",
        '10/20': "50%",
        '11/20': "55%",
        '12/20': "60%",
        '13/20': "65%",
        '14/20': "70%",
        '15/20': "75%",
        '16/20': "80%",
        '17/20': "85%",
        '18/20': "90%",
        '19/20': "95%",
      },
      scale: {
        'flip': '-1',
      },
      dropShadow: {
        'img': '5px 5px 5px black',
      },
      borderRadius: {
        'custom': '50% 30%',
      }
    }
  },
  plugins: [],
  darkMode: 'class'
}