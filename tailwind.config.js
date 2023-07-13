/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      boxShadow: {
        'shmenu': '0px -2px 0px #ffffff80 inset',
        'shmenuHov': '0px 2px 0px white inset',
      }
    },
  },
  plugins: [
      require('@tailwindcss/typography'),

  ],
}

