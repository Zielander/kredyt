<?php

require_once $conf->root_path.'/app/libs/Smarty/Smarty.class.php';
require_once $conf->root_path.'/app/Messages.class.php';
require_once $conf->root_path.'/app/libs/CalcForm.class.php';
require_once $conf->root_path.'/app/libs/CalcResult.class.php';

class CalcCtrl {
	
	private $messages;
	private $infos;
	private $form;
	private $result;

	public function __construct(){
		
		$this->messages = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	public function getParams(){
		$this->form->kwota = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
		$this->form->lata = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;
		$this->form->oprocentowanie = isset($_REQUEST ['oprocentowanie']) ? $_REQUEST ['oprocentowanie'] : null;
		$this->form->ile_rat = isset($_REQUEST ['ile_rat']) ? $_REQUEST ['ile_rat'] : null;
	}
	
	public function validate() {
		if (! (isset ( $this->form->kwota ) && isset ( $this->form->lata ) && isset ( $this->form->oprocentowanie ) && isset ( $this->form->ile_rat ))) {
			return false; 
		}
		
		if ($this->form->kwota == "") {
			$this->messages->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->lata == "") {
			$this->messages->addError('Nie podano na jak długo pobierany jest kredyt');
		}
		if ($this->form->oprocentowanie == "") {
			$this->messages->addError('Nie podano wysokości oprocentowania');
		}

		if (! $this->messages->isError()) {
			
			if (! is_numeric ( $this->form->kwota )) {
				$this->messages->addError('Kwota pobierana z kredytu musi być w postaci liczby całkowitej');
			}
			
			if (! is_numeric ( $this->form->lata )) {
				$this->messages->addError('Liczba lat na jakie pobierany jest kredyt musi być w postaci liczby całkowitej');
			}
			
			if (! is_numeric ( $this->form->oprocentowanie )) {
				$this->messages->addError('Oprocentowanie musi być w postaci liczby całkowitej');
			}
		}
		
		return ! $this->messages->isError();
	}
	
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->kwota = doubleval($this->form->kwota);
			$this->form->lata = doubleval($this->form->lata);
			$this->form->oprocentowanie = doubleval($this->form->oprocentowanie);
			$this->messages->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
			switch ($this->form->ile_rat) {
				case 'półroczna' :
					$this->result->rata = round($this->form->kwota * pow(1+$this->form->oprocentowanie/1200 , $this->form->lata*2) * ( (1+($this->form->oprocentowanie / 1200)-1) / (pow(1+$this->form->oprocentowanie/1200,$this->form->lata*2)-1)),2);
					$this->result->suma = doubleval($this->form->kwota + $this->result->rata * $this->result->lata);
					$this->result->odsetki = $this->result->suma - $this->form->kwota;
					$this->result->czestotliwosc = 'półroczna';
					break;
				case 'kwartalna' :
					$this->result->rata = round($this->form->kwota * pow(1+$this->form->oprocentowanie/1200 , $this->form->lata*4) * ( (1+($this->form->oprocentowanie / 1200)-1) / (pow(1+$this->form->oprocentowanie/1200,$this->form->lata*2)-1)),4);
					$this->result->suma = doubleval($this->form->kwota + $this->result->rata * $this->result->lata);
					$this->result->odsetki = $this->result->suma - $this->form->kwota;
					$this->result->czestotliwosc = 'kwartalna';
					break;
				case 'tygodniowa' :
					$this->result->rata = round($this->form->kwota * pow(1+$this->form->oprocentowanie/1200 , $this->form->lata*52) * ( (1+($this->form->oprocentowanie / 1200)-1) / (pow(1+$this->form->oprocentowanie/1200,$this->form->lata*2)-1)),52);
					$this->result->suma = doubleval($this->form->kwota + $this->result->rata * $this->result->lata);
					$this->result->odsetki = $this->result->suma - $this->form->kwota;
					$this->result->czestotliwosc = 'tygodniowa';
					break;
				default :
					$this->result->rata = round($this->form->kwota * pow(1+$this->form->oprocentowanie/1200 , $this->form->lata*12) * ( (1+($this->form->oprocentowanie / 1200)-1) / (pow(1+$this->form->oprocentowanie/1200,$this->form->lata*2)-1)),12);
					$this->result->suma = doubleval($this->form->kwota + $this->result->rata * $this->result->lata);
					$this->result->odsetki = $this->result->suma - $this->form->kwota;
					$this->result->czestotliwosc = 'miesieczna';
					break;
			}
			
			$this->messages->addInfo('Wykonano obliczenia.');
		}
		

	}
	
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Kalkulator');
		$smarty->assign('page_description','Kalkulator służący do obliczenia sumy rat i odsetek.');
		$smarty->assign('page_header','Kalkulator kredytowy');
		
		$smarty->assign('messages',$this->messages);
		$smarty->assign('form',$this->form);
		$smarty->assign('rata', $this->result->rata);
		$smarty->assign('suma', $this->result->suma);
		$smarty->assign('odsetki', $this->result->odsetki);
		
		$smarty->display($conf->root_path.'\app\view\calc_view.tpl');
	}
	
		
		
}
