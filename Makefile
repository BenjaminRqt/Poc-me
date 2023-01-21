.PHONY: start
start:
	docker-compose -p poc-me up -d
	symfony server:start -d --port=40013 --no-tls

.PHONY: stop
stop:
	docker-compose -p poc-me down -v
	symfony server:stop
