.PHONY: deploy installNoDev installWithDev server

installNoDev:
	-composer install -o --no-dev

installWithDev:
	-composer install -o

deploy: installNoDev
	-gcloud app deploy -v 'prod'  --project='molten-gantry-844'

server: installWithDev
	php -S localhost:8080  -t public public/index.php
