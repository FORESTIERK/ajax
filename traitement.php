<?php

// Une liste de mots, juste pour l'exemple.
// En pratique on chercherait dans une base de données.
$tousLesMots = array('crayon', 'stylo', 'feutre', 'taille-crayon', 'pointe', 'mine', 'gomme', 'dessin', 'coloriage', 'rayure', 'peinture', 'pinceau', 'couleur', 'craie', 'papier', 'feuille', 'cahier', 'carnet', 'carton', 'ciseaux', 'découpage', 'pliage', 'pli', 'colle', 'affaire', 'boîte', 'casier', 'caisse', 'trousse', 'cartable', 'jouet', 'jeu', 'pion', 'dé', 'domino', 'puzzle', 'cube', 'perle', 'chose', 'forme : carré', 'rond', 'pâte à modeler', 'tampon', 'livre', 'histoire', 'bibliothèque', 'image', 'album', 'titre', 'bande dessinée', 'conte', 'dictionnaire', 'magazine', 'catalogue', 'page', 'ligne', 'mot', 'enveloppe', 'étiquette', 'affiche', 'alphabet', 'appareil', 'caméscope', 'cassette', 'cédé', 'cédérom', 'chaîne', 'chanson', 'chiffre', 'contraire', 'différence', 'doigt', 'écran', 'écriture', 'film', 'fois', 'idée', 'instrument', 'intrus', 'lettre', 'liste', 'magnétoscope', 'main', 'micro', 'modèle', 'musique', 'nom', 'nombre', 'orchestre', 'ordinateur', 'photo', 'point', 'poster', 'pouce', 'prénom', 'question', 'radio', 'sens', 'tambour', 'télécommande', 'téléphone', 'télévision', 'trait', 'trompette', 'voix', 'xylophone', 'zéro');

// Envoyer le HTML au client.
echo json_encode($tousLesMots);
