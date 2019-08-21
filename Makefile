all: install

.PHONY: install tests

install: composer.lock

composer.lock:
	@echo "Installing composer dependencies"
	composer install

tests:
	@echo "Running PHPUnit"
	bin/phpunit
	@echo "Results file generated file://$(current_dir)/var/phpunit/build/coverage/index.html"
