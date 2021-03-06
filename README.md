# Craft CMS 4 Foundation

## Contents

- [Command reference](#command-reference)
- [SASS reference](./resources/sass/README.md)

## Getting started

Run `composer create-project heyblackmagic/foundation ./PATH` to create your Craft CMS instance.

## Features

When running `git commit -m 'some message'` or `git push` in terminal, Husky will take care of running prettier (pre-commit) and eslint (pre-push) before allowing to execute the commit and push. If there are any errors in the code syntax you will need to fix them before you can commit code to the repository.

## Command reference

- Run `npx mix watch` to watch files to start development.
- Run `npx mix` to build assets for development.
- Run `npx mix --production` to build assets for production.
- Run `npm run lint` to analyzes your code to find problems (javascript).
- Run `npm run lint:fix` to analyze and fix problems in the code (javascript).
- Run `npm run stylelint` to analyzes your code to find problems (scss).
- Run `npm run stylelint:fix` to analyze and fix problems in the code (scss).
