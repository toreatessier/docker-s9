docker run -d -p 3306:3306 torea/database
docker run -d -p 8080:80 torea/webapp

echo "RAPPEL : sans docker-compose, il faut hardcoder l'ip de la database dans webapp/superapp.php (pas le choix)"
echo "La connexion à la DB peut prendre quelques secondes, rafraichissez si message d'erreur"
