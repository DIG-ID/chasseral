/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './header.php',
    './footer.php',
    './inc/*.php',
    './page-templates/**/*.php',
    './template-parts/**/*.php',
  ],
  theme: {
    colors: {
      'main-green': '#00944E',
      'main-blue': '#0071BA',
      'main-red': '#D12329',
      'bg-color': '#EFF3F6',
      'white': '#FFFFFF',
      'black': '#000000',
    },
    fontFamily: {
      sans: ['Montserrat', 'sans-serif'],
    },

    extend: {
      letterSpacing: {
        wider: '0.05em',
        widest: '.11em',
      },
    },
  },
  plugins: [],
}
