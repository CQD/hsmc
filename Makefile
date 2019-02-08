.PHONY: deploy installNoDev installWithDev server sitemap

SITEMAP=public/d/sitemaps.txt

installNoDev:
	-composer install -o --no-dev

installWithDev:
	-composer install -o

deploy: installNoDev
	-gcloud app deploy -v 'prod'  --project='molten-gantry-844'

server: installWithDev
	php -S localhost:8080  -t public public/index.php

sitemap:
	( \
		echo 'https://hw.hiigara.net/' ; \
		find public -name '**.php' | grep -v '/home.php\|/index.php' | sed 's/^public/https:\/\/hw.hiigara.net/' | sed 's/\.php//' ; \
		echo 'https://hw.hiigara.net/concept_art/hw' ; \
		echo 'https://hw.hiigara.net/concept_art/cat' ; \
		echo 'https://hw.hiigara.net/concept_art/hw2' \
	) | sort > $(SITEMAP)
