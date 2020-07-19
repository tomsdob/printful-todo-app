module.exports = {
  purge: {
    enabled: true,
    content: ['./resources/**/*.php'],
  },
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms')
  ]
}
