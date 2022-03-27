FROM alpine:3.14.4

RUN apk update
RUN apk add --no-cache nginx

COPY conf/nginx.conf /etc/nginx

ENTRYPOINT ["nginx", "-g", "daemon off;"]