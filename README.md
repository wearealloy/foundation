# Craft CMS 4 Foundation

## Getting started

Run `composer create-project heyblackmagic/foundation ./PATH` to create your Craft CMS instance.

## Setup

After installing and configuring your Craft CMS instance, set the ./public_html directory as the project webroot. For example, if your virtual host is "<http://foundation.test>", run the following in your terminal:

```zsh
~/Sites/foundation main
❯ cd public_html && valet link foundation
```

## Command reference

- Run `npm run dev` to watch files to start development.
- Run `npm run build` to build assets.
