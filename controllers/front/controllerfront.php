<?php
/**
 * Created by PhpStorm.
 * User: ayoub
 * Date: 13/03/19
 * Time: 13:40
 */

class customercommentcontrollerfrontModuleFrontController extends ModuleFrontController
{/**
     * Assign template vars related to page content.
     *
     * @see FrontController::initContent()
     */
    

    public function initContent()
    {   
        $myModels = new commentmodel();

        if (Tools::isSubmit('submitSend'))
        {
            // ? return the value of the 'comment' 'rate' field
            $commentary = Tools::getValue('comment');
            $rate = Tools::getValue('rate');

            // ? return the customer id
            $customer_id = $this->context->customer->id;
            
            // ? Return the actual date formated
            $date = date('Y-m-d H:i:s');

            $this->context->smarty->assign('comment', $comment);
            $this->context->smarty->assign('rate', $rate);

            $myModels->comment = $comment;
            $myModels->rate = $rate;
            $myModels->id_customer = $customer_id;
            $myModels->date_add = $date;

            $myModels->add();
        }

        // ? path to link the front view
        $this->setTemplate('module:customercomment/views/templates/front/comments.tpl');
        parent::initContent();
    }
}