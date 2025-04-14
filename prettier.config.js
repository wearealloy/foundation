/**
 * @see https://prettier.io/docs/en/configuration.html
 * @type {import("prettier").Config}
 */
const config = {
  useTabs: false,
  tabWidth: 2,
  semi: true,
  singleQuote: false,
  twigSingleQuote: false,
  trailingComma: "es5",
  bracketSameLine: true,
  singleAttributePerLine: false,
  twigAlwaysBreakObjects: false,
  printWidth: 100,
  htmlWhitespaceSensitivity: "css",
  twigMultiTags: [
    "nav,endnav",
    "switch,case,default,endswitch",
    "ifchildren,endifchildren",
    "cache,endcache",
    "js,endjs",
    "css,endcss",
    "set,endset",
    "apply,endapply",
    "profile,endprofile",
  ],
  overrides: [
    {
      files: "*.php",
      options: {
        phpVersion: "8.2",
        tabWidth: 4,
        singleQuote: false,
      },
    },
    {
      files: "*.twig",
      options: {
        tabWidth: 4,
      },
    },
  ],
  plugins: ["@zackad/prettier-plugin-twig", "@prettier/plugin-php", "prettier-plugin-tailwindcss"],
};

export default config;
