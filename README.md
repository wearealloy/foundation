# Craft CMS 4 Foundation

## Contents

- [Command reference](#command-reference)
- [SASS reference](./resources/sass/README.md)
- [Code Style reference](https://github.com/airbnb/javascript)

## Getting started

 - Create mysql Database.
 - Run `composer create-project heyblackmagic/foundation ./PATH` to
   create your Craft CMS instance.
 - Setup DB.
 - Run `npm install`.
 - Create your local server: Run `valet link` +  `the.name.of.your.route`.
 - Run `craft project-config/rebuild`
 - Push to GitHub repository.
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

## Existing Project

 - Inside your **Sites** folder run the command: `git clone + project path`
 - Run `composer install` 
 - Run  `npm install`
 - [.env setup](#env-setup) 
 -  Import Database. (Request the DB to the project collaborator).
 - Run `valet link`

 ## .env Setup
We have two options to configure it:

- Share it from one team member to another via slack, email... 
- Use encryption method using [ssh-vault](https://ssh-vault.com/about/). We will use this to share the .env file securely:

1.  Both sender and receiver need to install [ssh-vault](https://ssh-vault.com/mac/).
2.  The receiver needs to [add an ssh key to their github account](https://docs.github.com/en/github/authenticating-to-github/adding-a-new-ssh-key-to-your-github-account) if they haven't already.
3.  The sender creates an encrypted file. `cat .env | ssh-vault -u [receivers github account name] create [output file]`
4.  The sender sends the encrypted file to the receiver.
5.  The receiver decrypts the file. `ssh-vault -o .env view [encrypted file]`

Make sure to delete the encrypted files after you are done.

If you have any trouble, you can run `ssh-vault -h` or go to [ssh-vault how it works](https://ssh-vault.com/post/how-it-works/).
