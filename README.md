# InterfaceStage

Création d’une interface
d’administration avec Symfony ou
PHP.
Le but de ce projet est de créé un système de gestion des demandes de stage des apprenants.
En effet plutôt que de faire faire à chaque apprenant un fichier dans lequel il saisit toutes ses
recherches de stage pourquoi ne pas centraliser tout cela.
L’interface se découperait grossièrement ainsi (nous reviendrons sur les détails plus tard) :
Un apprenant arrivant sur la page devrait en premier lieu s’identifier, puis saisir les demandes
de stage qu’il a fait auprès des entreprises. Si jamais l’entreprise n’est pas dans la liste déjà
fournie alors il lui sera alors possible de l’ajouter. Par la suite l’apprenant pourrait mettre à jour
sa liste en ajoutant une nouvelle demande ou alors en indiquant qu’il a effectué une relance et
le cas échéant préciser si sa demande a été acceptée ou refusée.
Information sur le profil de l’apprenant :
Sur son profil, l’apprenant devrait renseigner les informations suivantes :
· Prénom
· Nom
· Adresse
· Code Postal
· Ville
· Téléphone
· Email
· Lien Portfolio
· Lien GitHUB
· Lien CV
· Promotion
· Avatar
· Compétences
· Mobile (oui / non)
· Zone de mobilité (Toute la France, Région, Départemet)
L’administrateur pourra voir la page de l’apprenant mise en forme récupérant toutes les
informations si dessus mais en y intégrant aussi l’API de gitHUB permettant de voir le profil
GitHUB de l’apprenant directement sur la page.
Ajout d’une entreprise
Si une entreprise ne figure pas dans la liste d’entreprise déjà saisie alors il devra être possible
de l’ajouter. Une entreprise se définit ainsi :
· Nom
· Adresse
· Code Postal
· Ville
· Téléphone
· Email
· Site internet
Ajout d’une candidature
· Entreprise contactée
· Date de la demande
· Date de la relance
· Date de l’entretien
· Statut
Par statut il est entendu :
En attente : Quand l’apprenant à fait sa demande, qu’il n’a pas fait de relance et qu’il n’a pas
encore de réponse
Relancée : Quand l’apprenant à fait sa demande, qu’il a fait une relance et qu’il n’a toujours pas
de réponse.
Positive : Quand il a reçu une réponse positive de l’entreprise
Négative : Quand il a reçu une réponse négative de l’entreprise.
Un code couleur pourra être mis en place :
En attente : pas de couleur
Relancée : en orange
Positive : en vert
Négative : en rouge
L’administration pour le super Utilisateur
Le super utilisateur pourra à son arrivé sur la page après authentification sélectionner une
promotion :
Une promotion est définie ainsi :
· Date
· Ville
Une fois la promo choisie il aura accès à la liste de tous les apprenants de celle-ci. Un rappel lui
indiquera combien de personnes ont déjà trouvé un stage, avec le nom de celle-ci et l’entreprise
l’ayant acceptée. Un autre les apprenants ayant un entretien et un dernier recensant les
apprenants n’ayant pas encore de stage avec la date de leur dernière candidature.
Un code couleur peut aussi être mis en place pour ces différentes box
Ensuite nous retrouverons en dessous les cards de chacun des apprenants. Avec les infos
suivantes :
· Avatar
· Nom
· Liens vers cv
· Lien vers portfolio
· Lien vers la fiche détaillée
Fiche détaillée de l’apprenant :
Cette page reprendra toutes les informations présentes en base de données de l’apprenant,
l’API gitHub, ainsi qu’un tableau recensant toutes les demandes de stage qu’il a fait avec les
dates de candidature, de relance, d’entretien ainsi que les réponses.
Apprenant ayant trouvé un
stage
Apprenant ayant un
entretien
Apprenant n’ayant pas
trouvé un stage
Apprenant – Entreprise
Apprenant – Entreprise
Apprenant – Entreprise
Apprenant – Entreprise
Apprenant – Entreprise
Apprenant – Entreprise
Apprenant -date dernière
candidature
Apprenant -date dernière
candidature
Apprenant -date dernière
candidature
Apprenant -date dernière
candidature
Apprenant -date dernière
candidature
Apprenant -date dernière
candidature
L’administrateur aura aussi la possibilité d’accéder à une page listant toutes les entreprises.
Des moteurs de tri lui permettront de tri les entreprises par ville, de faire une recherche par nom
d’entreprise, de nom de contact et de ne sélectionner que les entreprises ayant déjà accepté un
stagiaire.
Il aura aussi la possibilité d’ajouter une entreprise s’il le souhaite
Droits utilisateurs :
Le site sera composé de trois droits d’accès :
· L’accès utilisateur de base qui ne permettra que de consulter les profils des apprenants
sans qu’apparaisse leur recherche de stage
· L’accès apprenant qui permettra à l’apprenant d’éditer sa fiche, ajouter de nouvelles
demandes de stage, ainsi que d’ajouter une nouvelle entreprise si elle ne figure pas dans la
liste déjà présente.
· L’accès administrateur qui permettra à l’admin ou a toute personne ayant se droit de
consulter tous les profils des apprenants mais aussi d’ajouter des entreprises à sa guise.
Les Entreprises
Nous pouvons penser un nouveau rôle. Celui des entreprises. En effet elles pourraient se
connecter sur le site internet et arriverai sur une interface particulière. Celle-ci listerait tous les
apprenants à la recherche d’un stage. Les entreprises pourraient alors utiliser des moteurs de
recherche pour filtrer les apprenants. Par ville, Par zone de mobilité, par compétence. Ils
pourront aussi poster leurs propres offres pour des stages et des emplois que les apprenants
puissent voir.
Une annonce
Une annonce est définie ainsi :
· Titre
· Contenu
· Spécialités
Poster une annonce
Les entreprises pourront donc poster des offres de stage ou d’emploi, toutefois pour éviter
qu’une offre hors sujet soit posté sur la plateforme il faudra qu’elle soit validée par les
administrateurs avant d’être publiée. Par conséquent sont état devra être en attente avant d’être
publiée.
Envoi de notification
Quand une entreprise poste une offre de stage, il faudrait que tous les membres de la
plateforme en soit averti
Compétences
Nous pourrions créer une table de compétence pour éviter toute faute de saisie. Exemple HTML
et HTLM. Le but serait de permettre aux apprenants ou aux entreprises de choisir les
compétences qu’ils voudraient faire apparaitre. Bien entendu nous fournirions déjà un jeu
d’essai avec un panel conséquent de compétences WEB, tel que HTML, CSS, PHP, Bootstrap,
Symfony, Vue… Mais si jamais il sera possible d’en rajouter. Toutefois il serait bien qu’il y ait
une vérification avant l’ajout, pour voir si celle-ci n’existe pas pour éviter les doublons. Il serait
bien aussi qu’il y ait une vérification sur la syntaxe pour éviter les erreurs du genre si la
personne tape HTLM alors que c’est en fait HTML. Pour nous simplifier un peu le travaille nous
sauvegarderons et enregistrerons tout en MAJUSCULE pour que par exemple nous évitions les
répétitions : HTML / Html / html
Sécurité
Un attention toute particulière devra être apportée à la sécurité. En effet or les différents rôles
cités plus haut, il faudra aussi que les formulaires soient sécurisés, vérifiés avant d’être validé.
Rendu graphique.
Il est attendu de ce projet une interface, moderne et novatrice. Elle devra être simple
d’utilisation tant pour les apprenants que les administrateurs et les entreprises.
Il n’y a aucune contrainte pour l’intégration de votre projet. Vous pouvez utiliser twig ou vue
comme vous le souhaiter.
Livrables attendus :
Le projet devra être versionné sur GIT et présent en ligne.
Modalités
Le travail se fera en groupe de 2 ou 3 personnes. Dans chaque groupe sera désigné un chef de
projet qui aura pour mission d’échanger avec le client et de répartir le travail à faire avec les
différents membres de son équipe.
