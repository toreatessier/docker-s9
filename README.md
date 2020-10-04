# Infrastructure Docker - S9 ESEO


## Verification de l'infra avec docker-compose
```
./build.sh pour obtenir mes images
docker-compose up -d
http://127.0.0.1:8080 ou IP_du_serveur_docker:8080 dans un naviguateur
```


## Verification de l'infra sans docker-compose :
```
./build.sh
./run.sh
http://127.0.0.1:8080 ou IP_du_serveur_docker:8080 dans un naviguateur
```
  2.1 ./build.sh
  2.2 ./run.sh
  2.3 http://127.0.0.1:8080 ou IP du serveur docker:8080 dans un naviguateur


**Important** :  Sans docker-compose, il faut hardcoder l'ip de la DB dans webapp/superapp.php (pas le choix). 
J'aurais pu mettre une IP par défaut, mais le dockernet n'est pas en 172.17.0.0/16 dans tous les environnements
(d'ou la necessite d'un orchestrateur type docker-compose).

# Author Information

* **Toréa TESSIER** - <torea.tessier2@gmail.com>