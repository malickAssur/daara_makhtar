<?php

class NousContacterController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
    	$request = $this->getRequest();
        if($request->isXmlHttpRequest()) {
            $this->_helper->layout->disableLayout();
        }
        $form = new Application_Form_NousContacter();
        if ($this->getRequest()->isPost()) {
	        $formData = $this->getRequest()->getPost();
	        if ($form->isValid($formData)) {
	           $prenom =  $formData['prenom'];
	           $nom =  $formData['nom'];
	           $email =  $formData['email'];
	           $phone =  $formData['phone'];
	           $siteWeb =  $formData['siteWeb'];
	           $message =  $formData['message'];
	           	$fullMessage= "".$message;
				$mail = new Zend_Mail();
				$mail->setBodyText($fullMessage );
				$mail->setBodyHtml($fullMessage );
				$mail->setFrom('elmn64@yahoo.fr', 'Un expéditeur');
				$mail->addTo('elmn64@yahoo.fr', 'Un destinataire');
				$mail->setSubject('message depuis Daara Mawloud');
				$mail->send();

	            $this->_helper->redirector('index');
	        } else {
	            
	        }
    	}


		
		$this->view->form = $form;

    }


}

