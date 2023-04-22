setup: install validate

install:
	composer install

validate:
	composer validate

start:
	./bin/brain-games

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin