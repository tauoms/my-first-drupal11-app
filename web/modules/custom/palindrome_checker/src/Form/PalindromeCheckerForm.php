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
        $inputStr = $form_state->getValue('word');

        if (!empty($inputStr) && !preg_match('~[0-9]+~', $inputStr) && !preg_match('/[\'^£€$%&*()}{@#~?><>,|=_+¬-]/', $inputStr)) { 
			if (strtolower($inputStr) === strrev(strtolower($inputStr))) {
                \Drupal::messenger()->addMessage($this->t('Yes! @word IS a palindrome!', ['@word' => $inputStr]));			
            } else {
                \Drupal::messenger()->addMessage($this->t('Sadly @word is NOT a palindrome.', ['@word' => $inputStr]));			
            }

		} else if (!empty($inputStr) && preg_match('~[0-9]+~', $inputStr)) {
			\Drupal::messenger()->addMessage($this->t('You entered numbers. Please enter a word with only letters.', ['@word' => $inputStr]));
		
		} else if (!empty($inputStr) && preg_match('/[\'^£€$%&*()}{@#~?><>,|=_+¬-]/', $inputStr)) {
			\Drupal::messenger()->addMessage($this->t("Please don't include special characters in your input.", ['@word' => $inputStr]));
			
		}

        
    }
}