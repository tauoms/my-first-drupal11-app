<?php

namespace Drupal\palindrome_checker\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class PalindromeCheckerForm extends FormBase {

    public function getFormId() {
        return 'palindrome_checker_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
        $form['word'] = [
            '#type' => 'textfield',
            '#title' => $this->t('The word to check'),
            '#required' => true,
        ];
    
        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Check'),
        ];
        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $word = $form_state->getValue('word');
        \Drupal::messenger()->addMessage($this->t('Yes! @word is a palindrome!', ['@word' => $word]));
    }
}