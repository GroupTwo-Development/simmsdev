module.exports = {
  root: true,
  extends: ['@roots/eslint-config/sage'],
  env: {
    browser: true,
    es6: true,
  },
  plugins: ['tailwindcss'],
  rules: {
    'tailwindcss/no-custom-classname': 'off',
  },
};
