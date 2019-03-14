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
        

        if (Tools::isSubmit('submitSend'))
        {
            $myModels = new commentmodel();

            // $this->context->smarty->assign('comment', $comment);
            // $this->context->smarty->assign('rate', $rate);

            $myModels->comment = Tools::getValue('comment');
            $myModels->rate = Tools::getValue('rate');
            $myModels->id_customer = $this->context->customer->id;

            $myModels->add();
        }

        // ? path to link the front view
        $this->setTemplate('module:customercomment/views/templates/front/comments.tpl');
        parent::initContent();
    }
}