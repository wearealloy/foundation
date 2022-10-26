const mix = require("laravel-mix");
require("laravel-mix-criticalcss");
require("laravel-mix-purgecss");

const path = require("path");

mix
  .js("resources/js/app.js", "js/")
  .sass("resources/sass/app.scss", "css/")
  .options({
    postCss: [require("cssnano")()]
  })
  .setPublicPath("public")
  .purgeCss({
    extend: {
      content: [
        path.join(__dirname, "./templates/**/*.twig"),
        path.join(__dirname, "./resources/**/*.js"),
        path.join(__dirname, "./resources/**/*.scss")
      ],
      extensions: ["twig", "html", "js", "scss", "svg"],
      safelist: ["splide", "splide--loop", "splide--fade", "splide--ltr", "splide--draggable", "is-active", "is-initialized", "splide__track", "splide__track--loop", "splide__track--fade", "splide__track--ltr", "splide__track--draggable", "splide__list", "splide__slide", "splide__slide--clone", "is-visible", "is-prev", "is-next"]
    }
  })
  .browserSync({
    proxy: process.env.PRIMARY_SITE_URL,
    files: ["templates/**/*.twig", "public/css/**/*.css", "public/js/**/*.js"],
    browser: "google chrome"
  })
  .criticalCss({
    enabled: false,
    paths: {
      base: process.env.PRIMARY_SITE_URL,
      templates: "./templates/_/critical/",
      suffix: "-critical.min"
    },
    urls: [
      {
        url: "/",
        template: "home"
      },
    ],
    options: {
      minify: true,
      width: 1440,
      height: 1200
    },
  })
  .extract()
  .version()
  .sourceMaps(true, "source-map");