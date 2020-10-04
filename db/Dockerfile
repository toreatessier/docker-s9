# Alpine 3.7 as base image as 3.1x seems to be buggy for MySQL
FROM alpine:3.7
LABEL author="Torea TESSIER <torea.tessier2@gmail.com>"

# Set up MySQL environment variables
ENV TIMEZONE Europe/Paris
ENV MYSQL_ROOT_PASSWORD root
ENV MYSQL_DATABASE app
ENV MYSQL_USER app
ENV MYSQL_PASSWORD app
# (Those 2 are mandatory in order to avoid a connection deny)
ENV MYSQL_USER_MONITORING monitoring
ENV MYSQL_PASSWORD_MONITORING monitoring

# Install required packages and dependancies
RUN apk add --no-cache libaio \
    libgcc \
    libstdc++ \
    mariadb \
    mariadb-common \
    mysql \
    ncurses-libs \
    ncurses-terminfo \
    ncurses-terminfo-base
RUN addgroup mysql mysql

# Set up work path
WORKDIR /setup

# Copy the setup shell script on container
COPY setup/setup.sh setup.sh

# Create the persistent volume
VOLUME [ "/var/lib/mysql" ]

EXPOSE 3306

# Run the shell script for MySQL install
CMD [ "./setup.sh" ]
