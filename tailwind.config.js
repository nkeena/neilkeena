module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true,
  },
  purge: ['source/**/*.html', 'source/**/*.md', 'source/**/*.js', 'source/**/*.php', 'source/**/*.vue'],
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui')
  ],
}
