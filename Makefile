ruby: smaregi-api.yaml
	docker run --rm -v "$(PWD):/local" openapitools/openapi-generator-cli:v5.1.1 generate \
		--input-spec /local/smaregi-api.yaml \
		--package-name smaregi-api \
		--generator-name ruby \
		--output /local/ruby
