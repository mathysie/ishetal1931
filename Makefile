COMPOSER=composer

RM=rm -rf

REACTOR=php app/reactor

PORT=8000

all: vendor

clean:
	$(RM) composer.lock
	$(RM) vendor/

vendor: composer.lock $(COMPOSERFILE)
	$(COMPOSER) install
	@touch vendor/

composer.lock: composer.json $(COMPOSERFILE)
	$(COMPOSER) update

server: all
	$(REACTOR) server --port=$(PORT)

server-public: all
	$(REACTOR) server --port=$(PORT) --address=0.0.0.0
