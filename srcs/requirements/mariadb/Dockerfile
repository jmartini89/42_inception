FROM alpine:3.14.4

RUN apk update
RUN apk add --no-cache mariadb mariadb-client

COPY tools /

ENTRYPOINT ["sh", "entrypoint.sh"]