.PHONY: deploy installNoDev installWithDev server

installNoDev:
	-composer install -o --no-dev

installWithDev:
	-composer install -o

deploy: installNoDev
	-gcloud app deploy -v 'prod'  --project='molten-gantry-844'

server: installWithDev
	-dev_appserver.py app.yaml -A 'local-dev-app-id'
