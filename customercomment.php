<?php

    require 'models/commentmodel.php';

    class customercomment extends Module
    {
        // ? Lines required to display module in the back office
        public function __construct()
        {
            $this->name = 'customercomment';
            $this->author = 'IMIE';
            $this->displayName = $this->l('Customer comment');
            $this->description = $this->l('Hello World');
            $this->version = '1.0.0';
            $this->bootstrap = true;

            parent::__construct();

            $this->installDb();

        }

        // ? Main Function
        public function install()
        {
            return parent::install()
                && $this->registerHook('displayCustomerAccount')
                && $this->installDb();
        }

        // ? Interactions with data base
        public function installDb()
        {
            return Db::getInstance()->execute('
		      CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'comment` (
			    `id_comment` INT PRIMARY KEY AUTO_INCREMENT,
			    `comment` varchar(1000),
			    `date_add` DATE,
			    `id_customer` INT,
			    `rate` INT
		      ) ENGINE = ' . _MYSQL_ENGINE_ . ' CHARACTER SET utf8 COLLATE utf8_general_ci;');
        }

        // ? Link to the style file
        // ? Remember to "greffer" in "apparence > postion in the back office
        public function hookDisplayHeader()
        {
            $this->context->controller->addCSS($this->_path . 'views/css/customercomment.css');
        }

        public function hookDisplayCustomerAccount($params)
        {
            return $this->display(__FILE__, 'my-account.tpl');
        }
    }