export default {
  plugins: {
    'postcss-import': {}, // allows us to use @import in pcss
    'tailwindcss/nesting': {},
    tailwindcss: {}, // enables @tailwind directives in pcss
    autoprefixer: {}, // auto-add browser prefixes to generated css
  },
};
