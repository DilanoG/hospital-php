<?php

require(ROOT . "model/ClientsModel.php");
require(ROOT . "model/PatientModel.php");
require(ROOT . "model/SpeciesModel.php");

function index(){
	render("clients/index", array(
		'clients' => getAllClients()
	));
}

function create(){
	render("clients/create");
}

function insert(){
	insertClient();
	header("Location: /hospital-php/client/index");
}

function edit($id){
	render("clients/edit", array(
		'clients' => getClient($id)
	));
}

function editClient($id){
	editClientDB($id);
	header("Location: /hospital-php/client/index");
}

function delete($id){
	deleteClient($id);
	header("Location: /hospital-php/client/index");
}