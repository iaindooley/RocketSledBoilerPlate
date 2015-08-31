RocketSledBoilerPlate is a suggested starting point for creating an application
with https://github.com/iaindooley/RocketSled and https://github.com/iaindooley/RocketPack

Also see this package for an alternative routing solution: https://github.com/bh-chaker/RocketPath

## Typical usage

* Update dirs.php with some hosts/dirs you'll use (eg. your local dev server where
  everything is in the parent directory, and the staging server where 
  all your RocketSled packages and other dependencies are shared)

* Update your base rocketpack.config.php with any git repositories you want to deploy,
  for example your own application packages

* Run php install.php from the command line

* Now you can run php index.php SomeClass to execute your classes or hit 
  http://localhost/?r=SomeClass from a browser
