start: composer_install

composer_install:
	composer install

brain-games:
	php ./bin/brain-games

validate:
	composer validate
