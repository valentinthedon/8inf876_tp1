# TP1 - 8INF876

## Introduction
* Étudiant : Valentin THEDON
* Code Permanent : THEV10079801

Ce dépôt contient l'ensemble des sources et livrables pour le choix 1 du TP1

## Prérequis

Afin de pouvoir lancer ce projet vous devez disposez de `docker` installé sur votre machine. Si ce n'est pas le cas, merci de vous réferez à la documentation suivante : 
* [Docker](https://docs.docker.com/get-docker/)

## Installation

Pour pouvoir lancer l'application : 
- Ouvrez un terminal
- Assurer vous que le docker daemon est bien lancé (tapez la commande docker, si l'aide apparait alors le daemon est bien lancé)
- Placez vous dans à la racine de répertoire de projet (dans le dossier où est présent le ficher `compose.yaml`)
- Lancer `docker compose up`
- Via votre naviguateur favori, tapez `localhost` ou `127.0.0.1` dans la barre de recherche

## Concept

Pour réaliser cette application, nous avons utilisé le célèbre service Docker, qui repose sur des principes de conteneurisation (en gros, de la virtualisation de manière allégé). Pour creer une application de calcul de l'IMC, nous avons identifier 3 services qui seront nécéssaires : 
* **nginx :** applicatif permettant de mettre en place en un serveur web.
* **php-fpm :** ce service nous permet de traiter les réquetes PHP dans le backends, notamment la recpetion et le traitement des formulaires. Vous pourrez noter que nous recréeons une image PHP (via Dockerfile), via l'instruction `build` dans `compose.yaml`, ce aui nous permet de construire une image de PHP, avec l'extensions `mysqli` nécessaire.
* **mariadb :** conteneur qui contiendra la base de donnée. Dans notre cas, une seule table : imc. Cette table contient, le pseudo, la taille et le poids.

Cette ensemble fonctionne de facon à ce que seulement un port de notre machine hôte soit exposé (ici le port 80), l'ensemble des communications inter-conteneur est réalisé de manière opaque depuis l'extèrieur, ce qui nous apporte des garanties supplémentaire

