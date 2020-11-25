
https://www.digitalocean.com/community/tutorials/how-to-scale-and-secure-a-django-application-with-docker-nginx-and-let-s-encrypt

0.
docker network create -d bridge my_bridge
docker network ls

1.
docker run \
--network=my_bridge \
--name db \
-d \
-e POSTGRES_DB=polls \
-e POSTGRES_USER=polls \
-e POSTGRES_PASSWORD=polls \
postgres

2.
docker build -t polls .

3.
docker run \
--network=my_bridge \
--env-file env \
polls \
sh -c "python manage.py makemigrations && python manage.py migrate"

4.
docker run \
--network=my_bridge \
-i -t \
--env-file env \
polls \
sh

5.
python manage.py createsuperuser

6.
docker run \
--network=my_bridge \
--env-file env \
polls sh -c "python manage.py collectstatic --noinput"
