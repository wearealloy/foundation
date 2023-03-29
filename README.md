# Craft CMS 4 Foundation

## Contents

- [Command reference](#command-reference)
- [SASS reference](./resources/sass/README.md)
- [Code Style reference](https://github.com/airbnb/javascript)

## Getting started

Run `composer create-project heyblackmagic/foundation ./PATH` to create your Craft CMS instance.

## Features

When running `git commit -m 'some message'` or `git push` in terminal, Husky will take care of running prettier (pre-commit) and eslint (pre-push) before allowing to execute the commit and push. If there are any errors in the code syntax you will need to fix them before you can commit code to the repository.

## Command reference

- Run `npx mix watch` or `npm run dev` to watch files to start development.
- Run `npx mix` or `npm run staging` to build assets for staging server.
- Run `npx mix --production` or `npm run production`  to build assets for production.
