FROM node:carbon

RUN mkdir -p /home/node/app
WORKDIR /home/node/app
COPY package.json /home/node/app
# COPY package-lock.json /home/node/app
RUN npm install nodemon --save
RUN npm install && npm cache clean --force
EXPOSE 3000

CMD ["npm", "start"]
