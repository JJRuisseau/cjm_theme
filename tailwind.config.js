module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [],
  theme: {
    extend: {
      colors: {
        bleunoir: '#142144',
        rouge: '#E6232B',
        grisnoir: '#404040',
        gris: '#E5E5E5'
      },
      width: {
        '333': '333px'
      }
    },
    fontFamily: {
      'body': ['Open Sans'],
      'title': ['Martel Sans']
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
