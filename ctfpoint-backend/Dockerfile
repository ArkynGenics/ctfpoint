FROM node:16

#creating app director

WORKDIR /usr/src/app

COPY package*.json ./
#running npm install
RUN npm install
#if production RUN npm ci --only=production

RUN npm ci --only=production
#
COPY . .
RUN touch .env

RUN echo "PORT=8000" >> .env \
    && echo "DB_NAME=ctfpoint" >> .env \
    && echo "DB_PORT=3306" >> .env \
    #diganti DB_HOST sesuai dengan ip database
    && echo "DB_HOST=172.18.0.2" >> .env \
    && echo "DB_USER=root" >> .env \
    && echo "DB_PASS=root" >> .env \
    && echo "JWT_TOKEN_KEY=testingctfcontest" >> .env 

EXPOSE 8000

CMD npm start
