<?php

class Application_Form_NousContacter extends Zend_Form
{

    public function init()
    {
        $this->setAction('/nous-contacter/');
        $this->setMethod('post');
		
		// ajout des elements du formulaire
		
		// add field name 
		$this->addElement('text', 'prenom', array(
			'id' => 'prenom',
			'class' => 'form-control',
			'required' => true,
			'placeholder' => 'Prénom *',
			'filters' => array('StringTrim'),
			'validators' => array(
			)
		
		));


		$this->addElement('text', 'nom', array(
			'id' => 'nom',
			'class' => 'form-control',
			'required' => true,
			'placeholder' => 'nom *',
			'filters' => array('StringTrim'),
			'validators' => array(
			)
		
		));

		$this->addElement('text', 'email', array(
			'id' => 'email',
			'class' => 'form-control',
			'required' => true,
			'placeholder' => 'Email *',
			'filters' => array('StringTrim'),
			'validators' => array(
                'EmailAddress',
            )
		
		));



		$this->addElement('text', 'phone', array(
			'id' => 'phone',
			'type' => 'phone',
			'class' => 'form-control',
			'rows' => '5',
			'required' => true,
			'placeholder' => 'Numéro de téléphone *',
			'filters' => array('StringTrim'),
			'validators' => array(
                            array('validator' => 'StringLength', 'options' => array('min'=>5, 'max'=>250, 'messages' => array('stringLengthTooShort' => 'The name is too short.'))) 
                        ),
		
		
		));


		$this->addElement('text', 'siteWeb', array(
			'id' => 'siteWeb',
			'class' => 'form-control',
			'required' => false,
			'placeholder' => 'Site Web *',
			'filters' => array('StringTrim'),
			'validators' => array(
	        array('Digits', false,
	            array('messages' => array('notDigits' => 'Only digits are allowed here')))
	   		),
		
		));


		$this->addElement('textarea', 'message', array(
			'id' => 'message',
			'class' => 'form-control',
			'required' => true,
			'placeholder' => 'Votre Message *',
			'filters' => array('StringTrim'),
			'validators' => array(
			                array('validator' => 'StringLength', 'options' => array(0, 500))
			                )
		
		));

		$this->addElement('checkbox', 'enCopie', array(
			'id' => 'enCopie',
			'class' => 'form-control',
			'required' => true,
		));
			 // Un captcha
        /*$this->addElement('captcha', 'captcha', array(
            'label'      => 'Merci de confirmer que vous êtes humain, en saissisant les 5 caractères ci-dessous:',
            'required'   => true,
            'captcha'    => array(
                'captcha' => 'Figlet',
                'wordLen' => 5,
                'timeout' => 300,
            )
        ));*/

         // Et une protection anti CSRF
        $this->addElement('hash', 'csrf', array(
            'ignore' => true,
        ));


		
		// Un bouton d'envoi
        $this->addElement('submit', 'submit', array(
            'class'   => 'btn btn-lg btn-success pull-right',
            'label'    => 'Envoyer',
        ));
    }
}

