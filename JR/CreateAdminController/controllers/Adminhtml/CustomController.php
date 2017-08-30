<?php
class JR_CreateAdminController_Adminhtml_CustomController extends Mage_Adminhtml_Controller_Action
{
    public function declarationAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('sales')
            ->_title($this->__('Declaration'));
        $this->renderLayout();
    }
}