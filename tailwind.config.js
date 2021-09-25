// const defaultTheme = require("tailwindcss/defualtTheme")

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    // screens:{
    //     xs: "540px",
    //     ...defaultTheme.screens,
    // },
    extend: {
        backgroundImage:{
            'homepage-banner': "url('/images/cover.png')"
        },
    },
  },
  variants: {
    extend: {},
},
  plugins: [],
}
