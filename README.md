# Mantis Bug Tracker
**version 0.1**

![](http://new.tinygrab.com/7020c0e8b0fd99ace270dd880e44ab8619a53dacaf.png)

-----------------------------------------------

## Setup

> ### on local:
> ```bash
> $ boot2docker up
> $ make PORT=1234
> ```
> 
> ### on stage:
> ```bash
> $ curl -sSL https://get.docker.com/ | sh
> $ docker -v
> $ sudo service docker restart
> $ git clone https://github.com/itspoma/mantis-docker mantis-docker/
> $ cd mantis-docker/ && make PORT=1234
> $ open http://site:1234/
> ```
> 
> ### to proceed setup from scratch:
> ```bash
> $ open http://{site}/admin/install.php
> ```

## Access

> ### MantisBT credentials:
> ```
> login: administrator
> password: root
> ```
> 
> ### MySQL credentials:
> ```
> login: root
> password: toortoor
> ```

## Build a docker
if you want to build an instance that works with an external MySQL.

```
 docker build -t docker/mantis:1.2.19 -f DockerfileNoMysql .
```
a sample deployment script is in envi