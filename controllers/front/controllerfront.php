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
        $this->setTemplate('module:customercomment/views/templates/front/comments.tpl');
        parent::initContent();
    }
}