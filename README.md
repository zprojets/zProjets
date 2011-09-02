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

Dans le dossier que vous souhaitez, ouvrez Git Bash
Tapez la commande :
    git clone git@github.com:zprojets/zProjets.git

Pour récupérer les dernières modifications avant de travailler, tapez la commande :
    git pull

La première fois, installez les vendors et générez le bootstrap via ces commandes :
    php bin/vendors install
    php vendor/bundles/Sensio/Bundle/DistributionBundle/Resources/bin/build_bootstrap.php

Pour mettre à jour les vendors
    php bin/vendors update

Créez le fichier app/config/parameters.ini, et configurez-le :

```
[parameters]
    database_driver="pdo_mysql"
    database_host=""
    database_port=""
    database_name=""
    database_user="root"
    database_password=""
    mailer_transport="smtp"
    mailer_host="localhost"
    mailer_user=""
    mailer_password=""
    locale="fr"
    secret=""
```