1. VERIFICATION DE L'INFRA AVEC DOCKER-COMPOSE :
  1.1 sudo ./build.sh pour obtenir mes images
  1.2 sudo docker-compose up -d
  1.3 http://127.0.0.1:8080 ou IP du serveur docker:8080 dans un naviguateur

-------------------------------------------------------------------------------

2. VERIFICATION DE L'INFRA SANS DOCKER-COMPOSE :
  2.1 sudo ./build.sh
  2.2 sudo ./run.sh
  2.3 http://127.0.0.1:8080 ou IP du serveur docker:8080 dans un naviguateur
  /!\Sans docker-compose, il faut hardcoder l'ip de la DB dans webapp/superapp.php (pas le choix). 
  J'aurais pu mettre une IP par défaut, mais le dockernet n'est pas en 172.17.0.0/16 dans tous les environnements
  (d'ou la necessite d'un orchestrateur type docker-compose).
