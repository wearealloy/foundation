# Craft CMS 5: Foundation

Foundation is a starter project built to streamline development with Craft CMS 5. It serves as a flexible and robust foundation, providing essential configurations, templates, and tools to kickstart your Craft CMS projects efficiently. Whether you're building a simple website or a complex application, this base project aims to save time and ensure best practices are followed from the start.

## Features:

- Pre-configured Craft CMS 5 setup.
- Customizable templates and components.
- Ready-to-use development environment setup.

## Requirements:

Before installing this repository, **ensure that the following tools are installed and properly configured**:

- Docker: [OrbStack](https://orbstack.dev/), [Lima](https://github.com/lima-vm/lima), [Docker Desktop](https://www.docker.com/products/docker-desktop/), [Rancher Desktop](https://rancherdesktop.io/), [Colima](https://github.com/abiosoft/colima). **[Follow the recommended settings](https://ddev.readthedocs.io/en/stable/users/install/docker-installation/#macos)**.
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
composer create-project heyblackmagic/foundation ./YOUR_PATH --no-install
# Replace `./YOUR_PATH` with the project directory path.
# The --no-install option in Composer prevents the installation step
# from running after the composer.lock file is updated
```

2. Set the project name and any other [DDEV config options](https://ddev.readthedocs.io/en/stable/users/configuration/config/).

```bash
ddev config --project-name=YOUR_PROJECT_NAME
# Replace YOUR_PROJECT_NAME with the name of your project.
```

3. Boot the project:

```bash
ddev start
```

4. Install Craft CMS.

```bash
ddev craft install
# or
ddev craft install \
  --username="YOUR_USERNAME" \
  --email="YOUR_EMAIL@DOMAIN.COM" \
  --password="YOUR_PASSWORD"
```

5. Open project with VSCode.

```bash
ddev code
```

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
