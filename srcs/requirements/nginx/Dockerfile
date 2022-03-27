FROM alpine:3.14.4

RUN apk update
RUN apk add --no-cache nginx

COPY conf/default.conf /etc/nginx/http.d

ENTRYPOINT ["nginx", "-g", "daemon off;"]