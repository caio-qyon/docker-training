FROM node:14.17.6-alpine as build

WORKDIR /app

COPY . ./

RUN npm install
RUN npm install -g @angular/cli@latest
RUN ng build

FROM nginx:1.21.6

COPY --from=build /app/dist/web/ /usr/share/nginx/html/

EXPOSE 80
