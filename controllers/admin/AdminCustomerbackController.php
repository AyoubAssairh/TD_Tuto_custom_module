<?php

require_once _PS_MODULE_DIR_ . '/customercomment/models/CusCommentModel.php';

class AdminCustomerbackController extends ModuleAdminController
{
    public function initContent()
    {
        parent::initContent();
    }

        /**
     * Instanciation de la classe
     * Définition des paramètres basiques obligatoires
     */
    public function __construct()
    {
        $this->bootstrap = true; //Gestion de l'affichage en mode bootstrap 
        $this->table = CusCommentModel::$definition['table']; //Table de l'objet
        $this->identifier = CusCommentModel::$definition['primary']; //Clé primaire de l'objet
        $this->className = CusCommentModel::class; //Classe de l'objet
 
        //Appel de la fonction parente pour pouvoir utiliser la traduction ensuite
        parent::__construct();
 
        //Liste des champs de l'objet à afficher dans la liste
        $this->fields_list = [
            'id_comment' => [ //nom du champ sql
                'title' => $this->module->l('ID'), //Titre
                'align' => 'center', // Alignement
                'class' => 'fixed-width-xs' //classe css de l'élément
            ],
            'comment' => [
                'title' => $this->module->l('date_add'),
                'align' => 'left',
            ],
            'date_add' => [
                'title' => $this->module->l('comment'),
                'align' => 'left',
            ],
            'id_customer' => [
                'title' => $this->module->l('id_customer'),
                'align' => 'left',
            ],
            'rate' => [
                'title' => $this->module->l('rate'),
                'align' => 'left',
            ],
            'firstname' => [
                'title' => $this->module->l('firstname'),
                'align' => 'left',
            ],
            'lastname' => [
                'title' => $this->module->l('lastname'),
                'align' => 'left',
            ]
        ];
 
        //Ajout d'actions sur chaque ligne
        $this->addRowAction('edit');
        $this->addRowAction('delete');
    }
  
}