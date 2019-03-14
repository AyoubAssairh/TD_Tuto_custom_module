<?php
    class commentmodel extends ObjectModel
    {
        public $id_comment;
        public $comment;
        public $date_add;
        public $id_customer;
        public $rate;

        public static $definition = array(
            'table' => 'comment',
            'primary' => 'id_comment',
            'fields' => array(
            'comment' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'id_customer' => array('type' => self::TYPE_STRING, 'validate' => 'isUnsignedId'),
            'rate' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
            ),
        );
    }