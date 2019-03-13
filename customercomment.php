<?php
    class customercomment extends Module
    {
        // TODO Champs obligatoire pour acceder au module dans le back office
        public function __construct()
        {
            $this->name = 'customercomment';
            $this->author = 'IMIE';
            $this->displayName = $this->l('Customer comment');
            $this->description = $this->l('Hello World');
            $this->version = '1.0.0';
            $this->bootstrap = true;

            parent::__construct();

        }

        // TODO Fonction déclenchée quand l'action est lancé
        public function install()
        {
            return parent::install()
                && $this->registerHook('displayCustomerAccount')
                && $this->installDb();
        }

        public function installDb()
        {
            return Db::getInstance()->execute('
		      CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'comment` (
			    `id_comment` INT PRIMARY KEY,
			    `comment` varchar(1000),
			    `date_add` DATE,
			    `id_customer` INT,
			    `rate` INT
		      ) ENGINE = ' . _MYSQL_ENGINE_ . ' CHARACTER SET utf8 COLLATE utf8_general_ci;');
        }

        // TODO Permet de lier le fichier css
        // TODO Penser à greffer dans apparence > position
        public function hookDisplayHeader()
        {
            $this->context->controller->addCSS($this->_path . 'views/css/customercomment.css');
        }

        public function hookDisplayCustomerAccount($params)
        {
            return $this->display(__FILE__, 'my-account.tpl');
        }
    }