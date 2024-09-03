<?php

namespace Drupal\print_name\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class PrintNameForm extends FormBase {

    public function getFormId() {
        return 'print_name_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
        $form['name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Your name'),
            '#required' => true,
        ];
    
        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Submit'),
        ];
        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $name = $form_state->getValue('name');
        // \Drupal::messenger()->addMessage($this->t('Hello, @name!', ['@name' => $name]));
        $form_state->setRedirect('print_name.greeting', ['url_name' => $name]);
    }
}