zProjets V2
===========

Site communautaire visant à permettre la présentation des projets des membres au grand public. Chaque projet a sa propre page mettant à disposition un forum, un système de news, ainsi qu'un système d'évaluation du projet par les autres membres.



Les modules prévus
---------------------

* Membres
* Messagerie Privée
* Projets
* Recrutements
* Forum
* News
* Livre d'or
* Bug Tracker
* Administration



Comment cloner le dépot (dev only)
----------------------------------

* Dans le dossier que vous souhaitez, ouvrez Git Bash
* Tapez la commande :
    git clone git@github.com:zprojets/zProjets.git

* Pour récupérer les dernières modifications avant de travailler, tapez la commande :
    git pull

* La première fois, installez les vendors via la commande :
    php bin/vendors install

* Pour mettre à jour les vendors
    php bin/vendors update