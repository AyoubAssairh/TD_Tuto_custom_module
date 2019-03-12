<?php
    class customercomment extends Module
    {
        // TODO Chanps obligatoire pour acceder au module dans le back office
        public function __construct()
        {
            $this->name = 'customercomment';
            $this->author = 'IMIE';
            $this->displayName = $this->l('Customer comment');
            $this->description = $this->l('Hello World');
            $this->version = '1.0.0';

            parent::__construct();
        }

        public function install()
        {
            return parent::install()
                && $this->registerHook('displayCustomerAccount');
            ;
        }

        // TODO Permet de lier le fichier css
        // TODO Penser à greffer dans apparence > position
        public function hookDisplayHeader()
        {
            $this->context->controller->addCSS($this->_path.'views/css/customercomment.css');
        }

        public function hookDisplayCustomerAccount($params)
        {
            return $this->display(__FILE__, 'my-account.tpl');
        }
    }