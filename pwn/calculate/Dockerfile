FROM python:3.8-alpine3.12
ENV DEBIAN_FRONTEND noninteractive

COPY files /home/ctf
COPY shell /
WORKDIR /home/ctf

RUN echo -e http://mirrors.ustc.edu.cn/alpine/v3.12/main/ > /etc/apk/repositories
RUN apk update && \
 apk add socat bash
RUN addgroup ctf && adduser -D -S -G ctf ctf && \
chmod 500 /home/ctf/server.py && \
chown ctf:root . -R && \
chmod 666 /flag && \
chmod 755 /start.sh && \
chmod 777 /flag.sh

#USER ctf
ENTRYPOINT ["/bin/bash","/start.sh"]
EXPOSE 10000