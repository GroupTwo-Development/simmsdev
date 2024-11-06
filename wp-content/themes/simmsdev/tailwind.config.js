/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,react,js}'],
  theme: {
    container: {
      padding: {
        DEFAULT: '1rem',
        lg: '[1rem]',
        sm: '[.5rem]',
        md: '0.5rem',
        xl: '2rem',
        '2xl': '3rem',
      },
    },
    extend: {
      colors: {
        'primary-green': '#00676D',
        'secondary-green': '#002829',
        'simms-lime': '#1C8484',
        'simms-gold': '#CEC778',
        'simms-rust': '#534E50',
        'simms-border-color': '#534e50',
      }, // Extend Tailwind's default colors
      backgroundColor: {
        overlay: 'rgba(0, 40, 41, 0.75)', // Add custom overlay color
        // pattern: "url('../../images/pattern.svg')",
        pattern_img: "url('images/pattern1.png')",
      },
      fontFamily: {
        agenda: ['agenda', 'sans-serif'],
        arno_pro_subhead: ['arno-pro-subhead', 'serif'],
        Playfair_Display: ['Playfair Display', 'serif'],
        Lato: ['Lato', 'sans-serif'],
      }, // Extend Tailwind's default font families
    },
  },
  plugins: [],
};

export default config;
