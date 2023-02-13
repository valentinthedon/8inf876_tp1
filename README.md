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
* *nginx :* 

