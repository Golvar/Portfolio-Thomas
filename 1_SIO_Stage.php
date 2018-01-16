<?php require 'inc/header.php'; ?>
<h1 style="text-align:center; margin-bottom:5%;">IXSIS</h1>

<p><a href='http://www.ixsis.fr/' target="_blank">IXSIS</a> accompagne les petites entreprises dans la mise en place de solutions CRM.</p>


<p>
Basée à Strasbourg, IXSIS intervient principalement pour les PME du Grand Est de la France sur des villes comme Mulhouse et plus globalement les régions Alsace,
Lorraine et Franche-Comté. Mais grâce aux facilités qu’offrent les outils de visioconférence, IXSIS travaille aussi avec des entreprises localisées dans
d’autres régions du territoire national (Paris, Bordeaux, etc.).</p>
<p>
IXSIS est le seul prestataire Zoho CRM du Grand Est à être labellisé Zoho Alliance Partner.
</p>
<br>
<p>
<ul class="inPara">
  <li>Effectif : 2</li>
  <li>Nombre de client : environ 50</li>
  <li>Date de création : 3 mars 2015</li>
  <li>Chiffre d’affaire : 50 en 2016</li>
  <li>Statut : SARL, seul gérant.</li>
  <li>Activité principale : Conseil en systèmes et logiciels informatiques (6202A)</li>
</ul>
</p>

<div class="list-group" style="margin-top:8%; margin-bottom:8%;">
  <a href="#" class="list-group-item list-group-item-action active disabled">
    Table des matières
  </a>
  <a href="#semaine1" class="list-group-item list-group-item-action">Semaine 1
  </a>
  <a href="#semaine2" class="list-group-item list-group-item-action ">Semaine 2
  </a>
  <a href="#semaine3" class="list-group-item list-group-item-action ">Semaine 3
  </a>
  <a href="#semaine4" class="list-group-item list-group-item-action ">Semaine 4
  </a>
  <a href="#semaine5" class="list-group-item list-group-item-action ">Semaine 5
  </a>
</div>
<div id="semaine1">
<h1>Semaine 1 </h1>
<p>Arrivé à 9h, une rapide présentation des locaux et de l’équipe.</p>
<p>Nous commençons directement avec une réunion de présentation complète de l’entreprise et de son fonctionnement. Différents thèmes sont abordés : L’aspect marketing, la production, le CRM (Customer Relationship Management) en lui même et la commercialisation avec les clients.</p>
<p>Après ça nous venons sur l’objectif de mon stage et des différents projets qu’il va falloir mener.</p>
<p>Le principal objectif est de créer une extension pour Zoho qui va permettre à l’utilisateur de faire des recherches sur des clients ou futurs clients et de les implémenter directement dans l’outil Zoho CRM.
Une fois la réunion terminée je me lance dans les différentes recherches pour commencer à avoir de la documentation et les connaissances requis pour cet outil.</p>
<p>Le langage de développement utilisé par Zoho CRM est Déluge. Mais il est possible de faire des scripts en php et d'implémenter une interface web directement dans Zoho
Une fois les bases de Déluge comprise je me lance dans la programmation de petits programmes simples pour appliquer les connaissance théorique que je viens de voir. </p>
<p>Je me rend vites comptes des différents problème que je vais pouvoir rencontrer, en effet Déluge est un langage propriétaire, la documentation est donc quasi exclusivement fourni par Zoho, la communautée n’est pas très conséquente et il est difficile de trouver de la documentation sur certaines parties de Déluge. </p>
<p>Après plusieurs tentatives infructueuses et quelques mails envoyés au support de Zoho pour avoir plus d’information sur l’utilisation de certaines fonctionnalitées nous décidons de ne plus utiliser Déluge qui est trop complexe à prendre en main car propriétaire.</p>
<p>Finalement je reprend un projet qui avait déjà été commencé en HTML et PHP, l’objectif reste le même : créer une interface graphique permettant la recherche et l’ajout de client et de l’intégrer à Zoho.

Je commence à m'imprégner du début de projet, je découvre le langage PHP et j’essaye de faire quelques améliorations. assez rapidement nous nous rendons compte qu’il est possible d’ajouter uniquement un client à la fois, or pour certaines entreprises il va être nécessaire d’ajouter massivement des listes de clients il est nécessaire de modifier l'algorithme d’ajout du client pour  ajouter autant de clients que l’utilisateur souhaite.</p>
<p>Une fois cette fonctionnalité ajoutée mon chef me confie le cahier des charges concernant les améliorations qu’il veut voir sur l’extension et me demande une présentation sur comment je compte faire les ajouts de manière graphique pour que l’interface web soit intuitive pour l’utilisateur.</p>
<p>Je fais différentes recherches pour voir comment agencer l’interface graphique et fais une sorte de “mockup” que je présenterais lors de la réunion pour confirmer ou non les idées.</p>
<p>Voici la présentation : </p><br>
<iframe  src="https://docs.google.com/presentation/d/e/2PACX-1vTWa3VWHxeGEDvACjkKWrPvpTa-CiN1z2TUKhM_7eV22rkPEeiaiJmjEstuZplzw0KpsM_J56RtqeSz/embed?start=false&loop=false&delayms=3000" frameborder="0" width="640" height="389"  allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" style="display:block;"></iframe>
<p>Après la présentation nous réfléchissons ensembles pour essayer de garder les meilleurs aspects de ces améliorations. Je commence à réfléchir sur comment intégrer ça de manière plus technique et savoir comment relier ces fonctionnalitées avec Zoho</p>
<p>La semaine se termine sur les ajouts graphiques de l’extension, je verrais pour approfondir l’aspect technique la semaine prochaine. </p>
</div>

<div id='semaine2' style="margin-top:10%;">
  <h1>Semaine 2</h1>
  <p>La semaine commence avec de la finalisation de la partie graphique de l’extension. Une fois cette partie terminée je me met à la recherche de documentation pour voir comment pouvoir faire les liens entre l’api de société info, Zoho CRM et l’extension. En effet l’extension sert de passerelle entre les deux.</p>
  <p>Le premier objectif était de pouvoir faire une recherche avec le numéro de Siret, le nom de domaine de l’entreprise ou tout simplement le nom de l’entreprise. Après avoir essayé d’intégrer différents moyens de recherche je me suis dis que le plus simple était d’avoir qu’un seul input où il est possible d’entrer le SIRET, le nom de domaine ou le nom de l’entreprise et la recherche se fait automatiquement en fonction de votre entrée :</p>
  <img src="inc/img/search.png" alt="recherche">
  <p>Ensuite le 2ème objectif était de pouvoir voir les informations de l'entreprise sur la 2ème page, il était inenvisageable de mettre les informations de l’entreprise à la suite sur la même ligne, l’aspect graphique et intuitif de l’extension reste une priorité ! A la base, nous étions  partis dans la création d’un pop-up nous nous sommes vite rendus compte que ce n’était ni jolie à avoir ni intuitif. Nous avons donc opté pour un système de bulle d’informations (type : tooltipe), dès que la souris passe sur l'icône avec le point d'interrogation une petite bulle s’ouvre pour donner les informations utile de l’entreprise, de plus il est possible de cliquer sur le site internet qui s’y trouve pour être directement redirigé sur une nouvelle page avec le site de l’entreprise, ce qui peut-être utile.</p>
  <p>Il est aussi maintenant possible d’ajouter l’entreprise de différentes manière sur Zoho CRM, il est possible d’intégrer l’entreprise en tant que client, prospect ou directement de lui créer un compte, c’est d’ailleurs la fonction principale, le compte de l’entreprise est ce qu’il y a de plus important dans Zoho CRM.</p>
  <p>Une des fonctionnalité très importante que je devais implémenter à cette application était la possibilité de mettre à jour une entreprise. En effet si auparavant l’utilisateur de Zoho entrait les entreprises à la main il était possible soit d’oublier certains champs soit de tout simplement ne pas les connaîtres. Dans tous les cas après un certain temps il est possible que les entreprises changes d’informations (comme l’adresse par exemple). C'est pourquoi j’ai intégré la fonctionnalité de mises à jour. Cet outil va regarder dans la base de données de votre compte Zoho CRM pour voir si l’entreprise est existante et va directement mettre à jour avec les nouvelles informations. Mais évidemment il est possible de ne pas activer ce système de mises à jour car certains utilisateurs pourraient avoir volontairement laissé des informations qui leurs sont nécessaires mais peut être plus à jour.</p>
  <p>Il est aussi possible de choisir la manière de recherche dans Zoho CRM pour mettre à jour les informations, en effet il est possible de choisir soit par le nom de l’entreprise soit par le numéro de SIRET, ce qui peut permettre d’être plus juste pour trouver l’entreprise qui correspond.</p>
  <img src="inc/img/result.png" alt="resultat">
  <img src="inc/img/result2.png" alt="resultat2">
</div>

<div id='semaine3'>
  <h1>Semaine 3</h1>
  <p>Cette semaine a- surtout était accès sur les améliorations possibles pour cette extension. </p>
  <p>Pour l’instant l’extension fonctionne est fait tout ce qu’on lui demande, mais elle fonctionne uniquement pour notre entreprise car ce sont nos clefs API que nous avons mis dans le code; le problème est que si un autre client était amené à utiliser l’application, elle ferait les recherches sur Société info avec notre compte et ajouterais les clients sur notre compte ZOHO CRM. Il est donc indispensable de créer un système pour que le client puisse intégrer ses clés API pour Société Info et pour Zoho CRM.</p>
  <p>Pour faire cela j’ai créé une nouvelle page “settings” qui permet d’entrer différentes informations. Sur cette page il est possible d’informer ces clefs API de Société Info et de Zoho CRM. Il est aussi possible de gérer les options d’enregistrements dans la base de données de ZOHO CRM, en effet il est maintenant possible de ne pas enregistrer certaines informations et ou de dire qu’une information doit se trouver à tel emplacement sur ZOHO CRM.</p>
  <br>
  <p>Pour accéder à cette page de paramétrage il fallait trouver un moyen intuitif et facile, pour que tout le monde comprennent comment accéder à cette page. J’ai donc intégrer un bouton avec engrenage qui signifie bien que ce sont les paramètres de l’extension.</p>
  <img src="inc/img/searchbeta.png" alt="">
  <img src="inc/img/mapping.png" alt="">
  <p>Durant cette semaine nous avons été confronté à un problème assez conséquent, nous devons actuellement récupérer des variables qui sont dans le CRM. Ces variables contiennent la clé API de Société Info et la clé API pour Zoho. Le problème est qu’il n’est pas possible de manière simple de récupérer ces valeurs dans un script php. En revanche elles peuvent facilement se récupérer sur déluge, il faut donc essayer de faire le pont entre déluge et php pour que le script puisse récupérer ces valeurs.</p>
  <p>Une présentation de l’application a été fait sur le blog d’IXSIS pour promouvoir la sortie de celle-ci : <a href="http://www.ixsis.fr/connecteur-annuaire-dentreprises-un-projet-de-stage-chez-ixsis/" target="_blank">Cliquer ici</a></p>
</div>

<div id="semaine4">
  <h1>Semaine 4</h1>
  <p>Le début de semaine est consacré à la finalisation de l’extension, toute la partie d’interface graphique est finie, la partie programmation est en partie finie. Il manque toujours l'accès aux “custom variable” de ZOHO. Après plusieurs requêtes vers le support de Zoho, aucunes réponses valable ne nous a été fourni. Nous avons donc décidé de mettre le développement de cette extension en pause. Dès que le lien sera fait l’extension pourra directement être publiée sur le marketplace.</p>
  <p>Nous en profitons pour commencer le développement d’une petite add-on pour ZOHO. L’objectif cette fois-ci est de récupérer des informations d’un autre logiciel qui est beaucoup utilisé au sein de l’entreprise : QuickBooks. Ce logiciel permet de créer des factures/devis et de faire de la comptabilité. </p>
  <p>L’add-on doit pouvoir récupérer la valeur totale des factures d’un client et de l’afficher directement dans sa fiche de compte sur ZOHO.</p>
  <p>Pour développer cette add-on nous avons utilisé le langage de programmation liée à Zoho : Déluge. Il est assez facile de développer ce genre de script avec Déluge car toutes les informations de Zoho sont très faciles d'accès. Contrairement à PHP où il fallait constamment faire appelle à des API.</p>
  <p>Nous avons intégré des nouveaux champs dans la fiche compte client pour pouvoir afficher le chiffre d’affaire que le client nous a apporté et son ID pour QuickBooks. <p class="text-muted">(cf. photo ci-dessous)</p></p>
  <img src="inc/img/info_QB.png" alt="">
  <p>Dès qu’une nouvelle facture est ajoutée sur QuickBooks, le montant de chiffre d’affaire est directement mise à jour.</p>
  <p>Avoir le chiffre d’affaire total était intéressant mais pouvoir avoir les informations de chaque factures directement dans Zoho était tout aussi intéressant. Nous nous sommes donc plongé dans la recherche d’ajout d’un nouveau module qui pouvait varier en fonction du nombre de factures. Exemple : si nous avons 3 factures sur un client, il est nécessaire d’avoir 3 lignes bien distinct qui répertorie les différentes factures</p>
  <p>Voici le résultat intégré directement dans le CRM :</p>
  <img src="inc/img/invoiceQuickbooks.png" alt="">
</div>

<div id="semaine5">
  <h1>Semaine 5</h1>
  <p>La semaine 5 a été exclusivement consacré à l'implémentation et la correction de bug encore </p>
</div>

<?php include 'inc/footer.php' ?>
