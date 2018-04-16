<?php

return [

	'user-management' => [
		'title' => 'Gestion utilisateur',
		'created_at' => 'Heure',
		'fields' => [
		],
	],

	'roles' => [
		'title' => 'Roles',
		'created_at' => 'heure',
		'fields' => [
			'title' => 'Titre',
		],
	],

	'users' => [
		'title' => 'Utilisateurs',
		'created_at' => 'Heure',
		'fields' => [
			'name' => 'Nom',
			'email' => 'Mail',
			'password' => 'Mot de passe',
			'role' => 'Role',
			'remember-token' => 'Remember token',
		],
	],

	'teams' => [
		'title' => 'Equipes',
		'created_at' => 'Heure',
		'fields' => [
			'name' => 'Nom',
      'nb_matches' => 'Nombre de matches',
      'nb_wins' => 'Nombre de victoires',
      'nb_losses' => 'Nombre de défaites',
      'total_tries' => 'Nombre d\'essais',
      'total_points' => 'Total de points',
      'placement' => 'Classement',
		],
	],

	'players' => [
		'title' => 'Joueur',
		'created_at' => 'Heure',
		'fields' => [
			'team' => 'Equipe',
			'name' => 'Nom',
			'surname' => 'Prénom',
			'birth-date' => 'Date de naissance',
      'age' => 'Age',
      'position' => 'Poste',
      'tries' => 'Nombre d\'essais',
		],
	],

	'games' => [
		'title' => 'Matchs',
		'created_at' => 'Heure',
		'fields' => [
			'team1' => 'Equipe1',
			'team2' => 'Equipe2',
			'start-time' => 'Horaire de début',
			'result1' => 'Résulat1',
			'result2' => 'Résulat2',
		],
	],
	'qa_create' => 'Creer',
	'qa_save' => 'Sauvegarder',
	'qa_edit' => 'Editer',
	'qa_view' => 'Vue',
	'qa_update' => 'Mettre à jour',
	'qa_list' => 'Liste',
	'qa_no_entries_in_table' => "Pas d'entée",
	'custom_controller_index' => 'Custom controller index.',
	'qa_logout' => 'Se déconnecter',
	'qa_add_new' => 'Ajouter',
	'qa_are_you_sure' => 'Etes-vous sûr ?',
	'qa_back_to_list' => 'Retour à la liste',
	'qa_dashboard' => 'Tableau de bord',
	'qa_delete' => 'Effacer',
	'quickadmin_title' => 'Rugby à 7',
];
