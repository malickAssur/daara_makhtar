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
			)
		
		));


		$this->addElement('text', 'siteWeb', array(
			'id' => 'siteWeb',
			'class' => 'form-control',
			'required' => false,
			'placeholder' => 'Site Web *',
			'filters' => array('StringTrim'),
			'validators' => array(
			)
		
		));


		$this->addElement('textarea', 'message', array(
			'id' => 'message',
			'class' => 'form-control',
			'required' => true,
			'placeholder' => 'Votre Message *',
			'filters' => array('StringTrim'),
			'validators' => array(
			)
		
		));



		
		// Un bouton d'envoi
        $this->addElement('submit', 'submit', array(
            'class'   => 'btn btn-lg btn-success pull-right',
            'label'    => 'Envoyer',
        ));
    }
}

