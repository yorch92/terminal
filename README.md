# Terminal interview challenge

This project uses Lumen, to be able to run it we first need to run the following

composer install
php migrate



the working curls calls are as follow

curl -X POST -d "{\"url\": \"http://localhost:8000/event\"}" http://localhost:8000/subscribe/topic2
curl -X POST -H "Content-Type: application/json" -d "{\"message\": \"hello\"}" http://localhost:8000/publish/topic1