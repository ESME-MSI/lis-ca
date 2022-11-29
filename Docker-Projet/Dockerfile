# It sets the base image for the container.
FROM ubuntu:latest

# It sets the author of the Dockerfile.
MAINTAINER Antoine Lorreyte <antoine.lorreyte@esme.fr>

# It creates a directory `/root/workspace` and sets it as the working directory.
RUN mkdir -p /root/workspace
WORKDIR /root/workspace

# It updates the list of available packages and their versions, but it does not install or upgrade any packages.
RUN apt update -y
# A workaround to avoid the following error.
RUN UBUNTU_FRONTEND=noninteractive apt-get -y install tzdata
# It installs the packages.
RUN apt install -y nano vim iproute2 tmux
RUN apt -y install apache2
RUN apt -y install php libapache2-mod-php php-mbstring php-mysql php-curl php-gd php-zip
RUN apt install -y python3 python3-pip python3-opencv tesseract-ocr

# It adds the user `root` to the group `www-data`.
RUN usermod -a -G www-data root
# It changes the owner of the directory `/var/www/html` to the user `www-data` and the group `www-data`.
RUN chown -R -f www-data:www-data /var/www/html
# It displays the IP address of the container.
RUN hostname -I

# It copies the file `requirements.txt` from the current directory to the directory `/root/workspace`.
COPY ./requirements.txt /root/workspace/
# It installs the Python packages listed in the file `requirements.txt`.
RUN pip3 install -r /root/workspace/requirements.txt

# It exposes the port 8080 of the container.
EXPOSE 8080

# It starts the Apache HTTP server.
CMD ["/usr/sbin/apachectl", "-D", "FOREGROUND"]