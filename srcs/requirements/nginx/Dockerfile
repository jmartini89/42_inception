FROM alpine:3.15.2

RUN apk update
RUN apk add nginx

COPY conf/nginx.conf /etc/nginx
COPY tools /

ENTRYPOINT ["nginx", "-g", "daemon off;"]