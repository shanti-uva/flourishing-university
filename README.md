# UNIVERSITY OF FLOURISHING WEBSITE

WordPress site built using [Lando](https://docs.lando.dev/) for local development and [Understrap](https://github.com/understrap/understrap) for the starter theme.

## SETUP
Lando has to installed before this repository is cloned or used. If you already have Docker installed on your computer, DON'T use Homebrew to install Lando as it will try to reinstall Docker and fail. In this case, you need to download and install Lando manually using the following steps:

### Install DMG via direct download (recommended)
1. Download the latest .dmg or exe package from [GitHub](https://github.com/lando/lando/releases). Every release has an Assets dropdown with the downloads. Don't worry about Lando still being a Release Candidate. It is very stable.
2. Mount the DMG by double-clicking it
3. Double-click on the `LandoInstaller.pkg`
4. Go through the setup workflow. Make sure you click `Customize` on the Installation Type and un-check Docker Desktop since you already have Docker Desktop installed.
5. Enter your username and password when prompted

If you don't have Docker Desktop already installed, you can install both Docker and Lando using Homebrew:

### Install via HomeBrew
1. sure homebrew is installed and up-to-date.
2. Add the lando cask: `brew cask install lando`

## WORKFLOW
1. Clone this repository.
2. There is a .lando.yml file at the root of this repo that contains Lando settings. We will not be making changes to this file. The best way to see your Lando setup is to run  `lando info` from the root path. This will show you all the settings you need for all the services installed. The database service will show all the credentials like database name, database user and database password.
3. Run `lando start` to download and setup the Docker containers. This will take a while to run the first time as it has to download all the containers and run setup. Once it is done, the console will show the link to the site. It is http://flourishing-university.lndo.site. The end .lnd.site is important as Lando has the capability to proxy and share your local site with anyone using this link if you want.
4. The WordPress Database is included in the Repo for now. Run this command to import the database to your local instance: `lando db-import lando-db.sql.gz`.
5. The theme is located in wp-content/themes/flourishing-university. There is a gulp task to run and compile css and js. To watch and recompile while developing the theme, run: `lando compile`. This has BrowserSync built-in and gives a new URL which auto refreshes on CSS or JS changes. The watch URL is: http://flourishing-university.lndo.site:3003. You can also use http://localhost:3003.
6. When done developing, you need to stop lando using `lando stop`.
7. Remember that stopping lando only stops your app. Lando has other services still running. To completely stop lando run `lando poweroff` to completely shutdown all lando containers.
