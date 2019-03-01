# October Tricks

This is the source code of octobertricks.com

## Development

You can use [`oc-bootstrapper`](https://github.com/OFFLINE-GmbH/oc-bootstrapper) to get this project up and running.

Simply install it via composer: 

```bash
composer global require offline/oc-bootstrapper
```

1. Clone this repo
1. Create a local database
1. Edit the hostname and database settings in `october.yaml`
1. Run `october install` from the repo's root directory
1. Done!

### Compile theme assets

1. Run `npm i` in `themes/october-tricks`
1. Use `gulp browser-sync` for development or `gulp --production` to build production assets.

**Note:** If you create a 
PR you don't have to compile the assets manually. This is done during the deployment process.