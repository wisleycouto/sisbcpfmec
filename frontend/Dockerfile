#FROM centos as build
FROM node as build

ARG NPM_CONFIG_REGISTRY=http://nexus.builder.mec.gov.br/repository/npm-registry/

WORKDIR /usr/src/app

ADD ./react ./

RUN set -eux && \
    npm install --registry=$NPM_CONFIG_REGISTRY --verbose && \
    npm run build --verbose

FROM nginx:stable

COPY nginx.default.conf /etc/nginx/nginx.conf

WORKDIR /usr/share/nginx/html/

COPY --from=build /usr/src/app/build ./

EXPOSE 80
