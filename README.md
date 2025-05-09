# Craft CMS 5: Foundation

Foundation is a starter project built to streamline development with Craft CMS 5. It serves as a flexible and robust foundation, providing essential configurations, templates, and tools to kickstart your Craft CMS projects efficiently. Whether you're building a simple website or a complex application, this base project aims to save time and ensure best practices are followed from the start.

## Features:

- Pre-configured Craft CMS 5 setup.
- Customizable templates and components.
- Ready-to-use development environment setup.

## Requirements:

Before installing this repository, **ensure that the following tools are installed and properly configured**:

- Docker: You only need one Docker provider installed. We recommend using [OrbStack](https://orbstack.dev/), but other options like [Lima](https://github.com/lima-vm/lima), [Docker Desktop](https://www.docker.com/products/docker-desktop/), [Rancher Desktop](https://rancherdesktop.io/), or [Colima](https://github.com/abiosoft/colima) are also compatible. **[Follow the recommended settings](https://ddev.readthedocs.io/en/stable/users/install/docker-installation/#macos)**.
- [DDEV](https://ddev.readthedocs.io/en/stable/users/install/ddev-installation/#macos).
- [Visual Studio Code](https://code.visualstudio.com/).
- [Dev Containers extension](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers).

## DDEV global setup

After installing DDEV, or before installing this repository, **it is highly recommended to configure your current git settings in DDEV**.

Run the following command:

```bash
ln -s ~/.gitconfig ~/.ddev/homeadditions/.gitconfig
```

## Installation:

There are two cases where you might need to install this repo:

- [Creating a project from scratch](#installing-from-scratch).
- [Setting up an existing project via `git pull`](#installing-existing-project-from-git-pull).

### Installing from scratch:

1. Create project with [Composer's](https://getcomposer.org/) `create-project` command:

```bash
# Create a project directory and move into it:
mkdir my-craft-site && cd my-craft-site

# Set up the DDEV environment:
ddev config --project-type=craftcms --docroot=public_html

# Boot the project and install the starter project:
ddev start
ddev composer create --no-scripts heyblackmagic/foundation
```

2. Set the project name and any other [DDEV config options](https://ddev.readthedocs.io/en/stable/users/configuration/config/).

```bash
# Replace YOUR_PROJECT_NAME with the name of your project.
ddev config --project-name=YOUR_PROJECT_NAME

# Restart DDEV
ddev restart
```

3. Install Craft CMS. **IMPORTANT:** During the installation, the Craft CLI will prompt for information such as database credentials (name, password, user, and database driver) or the project URL. These values are pre-configured and should not be edited.

```bash
ddev craft install
# or
ddev craft install \
  --username="YOUR_USERNAME" \
  --email="YOUR_EMAIL@DOMAIN.COM" \
  --password="YOUR_PASSWORD" \
  --site-url='$DDEV_PRIMARY_URL'
```

4. Open project with VSCode.

```bash
ddev code
```

**It’s possible that VSCode will ask if you want to install the recommended extensions for this repository.**

![VSCode recommended extensions notification](/.vscode/vscode-recommended-prompt.png)

We highly recommend installing the suggested extensions. [You can see a full list of recommended extensions here.](#vscode-extensions)

If VSCode doesn’t prompt you about the recommended extensions, you can check them manually by going to Extensions (shift + command + X). In the search bar, filter by “Recommended.”

![VSCode extensions panel](/.vscode/vscode-filter-recommended.png)

____

At this point, running `ddev launch` or `ddev launch /admin` will open your project's URL in the default browser.

Happy coding! 😊

### Installing existing project (from `git pull`):

If you are installing an existing project from a `git pull` or `git clone`, follow these steps.

1. Pull or clone the project from GitHub.

2. To avoid discrepancies between environments when working collaboratively, avoid changing the name of the DDEV project. Any changes you make to the repo configuration should be communicated to your team.

3. Boot the project.

```bash
ddev start
```

4. Import project db.

```bash
ddev craft db/restore ./YOUR_DB_BACKUP_PATH
```

5. Open project with VSCode.

```bash
ddev code
```

**It’s possible that VSCode will ask if you want to install the recommended extensions for this repository.**

![VSCode recommended extensions notification](/.vscode/vscode-recommended-prompt.png)

We highly recommend installing the suggested extensions. [You can see a full list of recommended extensions here.](#vscode-extensions)

If VSCode doesn’t prompt you about the recommended extensions, you can check them manually by going to Extensions (shift + command + X). In the search bar, filter by “Recommended.”

![VSCode extensions panel](/.vscode/vscode-filter-recommended.png)

____

You’re ready to continue developing on your existing project.

Happy coding!

## Resolving ambiguities about commands

In order for DDEV to be able to execute the commands in their respective context, you must prefix each command with ddev. For example, instead of typing npm run dev, you should type ddev npm run dev.
Ref: [FAQS, DDEV docs](https://ddev.readthedocs.io/en/stable/users/usage/faq/#why-do-i-have-to-type-ddev-in-front-of-so-many-commands).

However, when you run the `ddev code` command, VSCode opens the project with the Dev Containers extension, i.e. it opens the docker container directly. This means that any actions in the project will be in the docker / DDEV context, so if you open a VSCode terminal, you won't need the `ddev` prefix when running your commands.

## Workflow commands

- `ddev npm run dev`: Start Vite development server.
- `ddev npm run build`: Compile JS and CSS with Vite.
- `ddev craft`: Craft console app.

## VSCode Extensions

We strongly recommend installing the following extensions for a better development experience:

- [DEV Containers](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers): The Dev Containers extension lets you use a Docker container as a full-featured development environment.
- [EditorConfig for VSCode](https://marketplace.visualstudio.com/items?itemName=EditorConfig.EditorConfig): This plugin attempts to override user/workspace settings with settings found in .editorconfig files.
- [Prettier - Code formatter](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode): Prettier is an opinionated code formatter. It enforces a consistent style by parsing your code and re-printing it with its own rules that take the maximum line length into account, wrapping code when necessary.
- [Tailwind CSS IntelliSense](https://marketplace.visualstudio.com/items?itemName=bradlc.vscode-tailwindcss): Tailwind CSS IntelliSense enhances the Tailwind development experience by providing Visual Studio Code users with advanced features such as autocomplete, syntax highlighting, and linting.
- [Twiggy](https://marketplace.visualstudio.com/items?itemName=moetelo.twiggy): Twiggy Language Server provides syntax highlighting, autocompletion, and formatting for Twig. It is recommended to uninstall any other Twig extensions.
