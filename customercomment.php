<?php

    require_once 'models/CusCommentModel.php';

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
                && $this->installDb()
                && $this->registerHook('displayHome');
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
        
        public $tabs = array(
            array(
                'name' => 'Commentaires',
                'class_name' => 'AdminCustomerback',
                'visible' => true,
                'parent_class_name' => 'ShopParameters',
        ));
    

        // ? Link to the style file
        // ? Remember to "greffer" in "apparence > postion in the back office
        public function hookDisplayHeader()
        {
            $this->context->controller->addCSS($this->_path . 'views/css/customercomment.css');
        }

        // ? Display button "Laisser un commentaire" in customerAccount
        public function hookDisplayCustomerAccount($params)
        {
            return $this->display(__FILE__, 'my-account.tpl');
        }

        // ? Display Carousel in the HomePage
        public function hookDisplayHome($params)
        {
            $result = Db::getInstance()->executeS(
                'SELECT a.*, b.firstname, b.lastname FROM '._DB_PREFIX_.'comment a JOIN '._DB_PREFIX_.'customer b ON a.id_customer = b.id_customer');
            
            $this->context->smarty->assign('comments', $result);
            return $this->display(__FILE__, 'carouselHome.tpl');
        }

    }