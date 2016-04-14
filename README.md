# Project-for-LO07-A16
Student project in UTT

Presentation
◾ L'objectif de ce projet est de concevoir, de développer et de tester un site Web dynamique pour la gestion des publications des enseignants-chercheurs de l'UTT. Pour information, l'ensemble des publications de l'UTT sont visibles sur le site suivant : https://publications.icd.utt.fr. 
◾ Seuls des enseignants-chercheurs de l'UTT disposant d'un compte ont le droit d’effectuer des insertions ou des mises à jour. Il faudra donc prévoir une solution pour l'enregistrement des chercheurs. Les internautes peuvent accéder au site sans possibilité de modification. 

Contraintes
◾Le projet sera réalisé en utilisant exclusivement l'une des suites suivantes WAMP / LAMP / MAMP. De préférence, vous hébergerez votre site sur notre serveur dev-isi.utt.fr. Cependant, vous êtes autorisés à effectuer la soutenance en utilisant votre ordinateur.
◾ Votre site devra obligatoirement utiliser les éléments suivants présentés en cours :
◾un serveur Apache
◾des scripts PHP
◾des pages HTML
◾des feuilles de styles CSS pour toutes les pages de votre site
◾des instructions Javascript
◾la persistance des données sera assurée obligatoirement par l'utilisation d'une base de données relationnelle
◾l'authentification des utilisateurs sera fondée sur l'utilisation de variables de session
◾les autres éléments vus en cours ne sont pas obligatoires (approche objet, XML, Ajax, ...)
◾Si vous utilisez un framework de développement, vous devrez expliquer dans le rapport pourquoi vous avez sélectionné ce framework en particulier.

Cahier_des_charges

Fonctionnement de l'application
◾ Le chercheurs de l'UTT effectuent des travaux de recherche au sein d'un UMR (Unité Mixte de Recherche) dont le nom est l'ICD (Institut Charles Delaunay). Le site Web de ICD est http://icd.utt.fr. L’ICD regroupe huit équipes de recherche : 
◾CREIDD : Centre de Recherches et d'Etudes Interdisciplinaires sur le Développement Durable
◾ERA : Environnement de Réseaux Autonomes
◾GAMMA3 : Génération Automatique de Maillage et Méthodes Avancées
◾LASMIS : Systèmes Mécaniques et Ingénierie Simultanée
◾LM2S : Modélisation et Sûreté des Systèmes
◾LNIO : Nanotechnologie et Instrumentation Optique
◾LOSI : Optimisation des Systèmes Industriels
◾Tech-CICO : Technologies pour la Coopération, l'Interaction et les COnnaissances dans les collectifs
◾ Un chercheur de l'UTT ou d'une autre université appartient donc toujours à une organisation et à une équipe. Par exemple Marc LEMERCIER a pour organisation l'UTT et ERA comme équipe de l'ICD. Monsieur Guy Pujolle est un chercheur de l'Université Paris 6 qui effectue ses recherches au sein du laboratoire LIP6. 
◾ Les chercheurs présentent et valorisent les résultats de leurs travaux de recherche par la rédaction d'articles de recherche. Ceux-ci sont ensuite soumis à des jurys d'experts responsables d'une publication (revue, conférence, ....). Les meilleurs articles sont ensuite publiés dans la publication. Les publications sont organisées par catégorie : 
◾RI : Article dans des Revues Internationales
◾CI : Article dans des Conférences Internationales
◾RF : Article dans des Revues Françaises
◾CF : Article dans des Conférences Françaises
◾OS : Ouvrage Scientifique (Chapitre de Livre, ...)
◾TD : Thèse de Doctorat
◾BV : Brevet
◾AP : Autre Production
◾ Une publication sur notre site sera décrite par les éléments suivants : 
◾Une liste variable d'auteurs (de l'UTT ou de l'extérieur), sachant que pour que l'article soit présent dans la base, il faut au moins un auteur de l'UTT.
◾Le titre de l'article
◾Le titre ou la référence à une publication
◾L'année de la publication
◾Le lieu de la conférence (donc uniquement valable pour les conférences)
◾Un statut (soumis, en révision, publié). Ce statut permet de connaître l'état de la publication.

Fonctionnalités pour les chercheurs de l'UTT
◾ Création d'un nouveau compte : Il faut créer un compte pour chaque utilisateur de l'UTT qui souhaite ajouter ou modifier une publication. La création d'un compte pour un auteur permet de collecter des informations sur l'auteur : nom, prénom, login, mot de passe, organisation, équipe de recherche, .... Vous êtes libres de demander d'autres informations à l'utilisateur via des formulaires et/ou d'ajouter des informations automatiquement pour compléter les caractéristiques du compte. 
◾ Ajout d'une nouvelle publication : Il s'agit d'enregistrer toutes les informations pour une nouvelle publication. Le nombre d'auteurs est variable, d'ordre des auteurs est important et doit être memorisé. Un document doit aussi être transmis du client vers le serveur et y être sauvegardé pour un affichage ultérieur. Attention pas de redondance d'information. Avant de rajouter un auteur dans la base, vous devez vérifier qu'il n'est pas déjà présent. Même chose pour les organisations, les laboratoires, les noms des conférences, ... 
◾ Mise à jour d'une publication : Uniquement les auteurs de la publication sont autorisés à modifier une publication. Il peut s'agir de modifier le statut, le titre mais aussi de modifier l'ordre des auteurs et le nombre d'auteurs (+1 ou -1). 

Fonctionnalités pour l'administrateur du site
◾ Visualisation de la liste des comptes : l'administrateur dispose d'un compte particulier lui permettant de superviser le fonctionnement de son site. La première fonctionnalité est la présentation à l'écran de la liste des utilisateurs avec l'ensemble des données de leurs comptes. 
◾ Cohérence des données : proposez une solution pour détecter les anomalies dans les publications, par exemples article avec deux fois le même auteur, article présent deux fois dans la base, article dont aucun auteur n'est un chercheur de l'UTT. Votre outil présentera à l'écran la liste des anomalies sans chercher à les corriger. Il s'agit donc d'identifier une liste d'anomalies possibles et de proposer les algorithmes PHP permettant de les détecter. 
◾ Statistique sur les publications : Proposez une mesure originale de la performance des enseignants chercheurs. Libre choix de l'algorithme ! 

Fonctionnalités pour les visiteurs du site (donc pour tous)
◾ Fonction de recherche : Vous devez proposer un ensemble de fonction de recherche de publication. Une fonction de recherche renvoie toujours une liste de publications catégorisés. La présentation des informations à l'écran doit permettre une navigation dans la base de données des publications. Ainsi : ◾En cliquant sur le titre de la publication il est possible de récupérer le document
◾En cliquant sur l'un des auteurs, il est possible de récupérer l'ensemble des publications de cet auteur
◾En cliquant sur un lien ou une image associé à la publication, il est possible d'obtenir les informations complètes sur cette publication : liste des auteurs avec leur organisation et leur équipe, titre, .....

◾Il est demandé de construire au moins les fonctions de recherche suivantes : 
◾Liste des publications présente dans la base dans l'ordre chronologique (ordonnée par catégorie et par année)
◾Liste des publications pour un laboratoire donné et à partir d'une année donnée (donc formulaire avec deux paramètres)
◾Liste des publications d'un chercheur donné (ordonnée par catégorie et par année)
◾Liste des collaborations extérieures à l'UTT d'un chercheur donné.
◾Liste des co-auteurs d'un chercheur donné ordonnée par nombre de co-publications décroissante.

Travail
◾Plan du rapport
◾Page de garde type rapport de stage (logo UTT, noms, prénoms, programmes (TC4, ISI2, ..) du binôme, ... (cf modèle sur l'ent)
◾Table des matières (avec pages numérotées)
◾1. Introduction
◾Résumé du sujet du projet
◾Problématiques à résoudre
◾2. Analyse des contraintes et des besoins du cahier des charges : points importants
◾3. Modélisation des fonctionnalités demandées : diagramme de fonctionnement, des différentes parties / sous-parties 
◾4. Etapes de conception de votre projet : aspect web, technologies et outils utilisés, ...
◾5. Etapes de conception de la base de données : schéma de la base de données, modèle physique des données (fichier SQL de création des relations
◾6. Conclusion
◾Rappel de la mission et des contraintes
◾Vos contributions et points clés du projet
◾Ouverture du sujet
◾Documents transmis
◾Le document transmis sur le site de moodle sera un document zipé portant vos noms. Exemple dupont_durant.zip 
◾Ce document contiendra : 
◾votre rapport au format pdf
◾votre présentation au format pdf
◾un zip du répertoire de votre projet sous Netbeans
◾Conseils
◾Vous devez proposer une solution pour la persistance des données dans la base relationnelle. Votre solution doit permettre de répondre à toutes les contraintes du projet en évitant la redondance d'information. Vous pouvez utiliser des outils open source pour concevoir votre base.
◾Développez uniquement les fonctionnalités demandées par le projet. Vos propositions d'extensions ne seront pas évaluées !
◾En cas de grandes difficultés, n'essayer pas de tout faire mais sélectionnez quelques fonctionnalités du projet qui devront fonctionner correctement.

Evaluation
◾Date limite pour la remise du rapport : le jour de la soutenance. Les pénalités seront de 1 point par jour de retard.
◾Les soutenances auront lieu entre le 13 juin et le 29 juin 2016 binôme par binôme après inscription. 
◾Une soutenance est constituée : 
◾d'une présentation par transparents de 15 minutes directement sur un ordinateur
◾de la démonstration du projet (10 minutes)
◾de quelques questions
