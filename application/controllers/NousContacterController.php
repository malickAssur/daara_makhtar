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
        //var_dump( $form ); die;
        if ($this->getRequest()->isPost()) {
	        $formData = $this->getRequest()->getPost();
	        if ($form->isValid($formData)) {
	          // var_dump(  $formData ); die;
	           $prenom =  $formData['prenom'];
	           $nom =  $formData['nom'];
	           $email =  $formData['email'];
	           $phone =  $formData['phone'];
	           $siteWeb =  $formData['siteWeb'];
	           $message =  $formData['message'];
	           $enCopie = (isset($formData['enCopie'])) ? TRUE : FALSE;
           		$fullMessage= "".$message;
           		$destinataire ="elmn64@yahoo.fr";
				/*$mail = new Zend_Mail();
				$mail->setBodyText($fullMessage );
				$mail->setBodyHtml($fullMessage );
				$mail->setFrom('elmn64@yahoo.fr', 'Un expéditeur');
				$mail->addTo($destinataire, 'Un destinataire');
				$mail->setSubject('message depuis Daara Mawloud');
				$mail->send();*/
					echo $this->flashMessenger()->render(FlashMessenger::NAMESPACE_SUCCESS);
	            $this->_helper->redirector('index');
	        } else {
	            
	        }
    	}


		
		$this->view->form = $form;

    }


}

