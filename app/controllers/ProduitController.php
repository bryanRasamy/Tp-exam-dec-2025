<?php

namespace app\controllers;

use app\models\ProduitModel;
use Flight;
use flight\Engine;

class ProduitController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

	

	public function getProduits() {
		// You could actually pull data from the database if you had one set up
		// $users = $this->app->db()->fetchAll("SELECT * FROM users");
		
		$produitsModel=new ProduitModel($this->app->db());
		$produits=$produitsModel->getProduits();
		
		Flight::render('accueil',['produits'=>$produits]);
	}

	public function getProduit($id) {
		// You could actually pull data from the database if you had one set up
		// $users = $this->app->db()->fetchAll("SELECT * FROM users");
		
		$produitsModel=new ProduitModel($this->app->db());
		$produit=$produitsModel->getProduit($id);

		// You actually could overwrite the json() method if you just wanted to
		// to ->json($users); and it would auto set pretty print for you.
		// https://flightphp.com/learn#overriding
		
		Flight::render('produit',['produit'=>$produit]);
	}

	public function addProduit(){
		$name=Flight::request()->data->name;
		$price=Flight::request()->data->price;

		$produitsModel=new ProduitModel($this->app->db());

		if(isset(Flight::request()->data->id)){
			$id=Flight::request()->data->id;
			$produitsModel->updateProduit($id,$name,$price);
		}else{
			$produitsModel->addProduit($name,$price);
		}
		

		$produits=$produitsModel->getProduits();
		
		Flight::render('accueil',['produits'=>$produits]);
	}
}