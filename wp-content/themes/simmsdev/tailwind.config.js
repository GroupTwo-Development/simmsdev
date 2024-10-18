/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,react,js}'],
  theme: {
    container: {
      padding: {
        DEFAULT: '1rem',
        // sm: '1rem',
        // md: '1rem',
        // xl: '5rem',
        // '2xl': '6rem',
      },
    },
    extend: {
      colors: {
        'primary-green': '#00676D',
        'secondary-green': '#002829',
        'simms-gold': '#CEC778',
        'simms-rust': '#534E50',
        'simms-border-color': '#534e50',
      }, // Extend Tailwind's default colors
      fontFamily: {
        Playfair_Display: ['Playfair Display', 'serif'],
        Lato: ['Lato', 'sans-serif'],
      }, // Extend Tailwind's default font families
    },
  },
  plugins: [],
};

export default config;
