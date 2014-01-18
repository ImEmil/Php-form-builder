<?php
class Form {
	public $action, $inputs, $former, $data, $name, $input = [], $method = "POST";

	static $required = true;	// Default true, set it to false if you don't want any requirement

	function __construct($action, $name) {
		$this->action = $action;
		$this->name   = $name;
	}

	static function filter($string) {
		return trim(strip_tags(htmlspecialchars( $string, ENT_QUOTES, 'utf-8')));
	}

	static function redirect($page, $seconds) {
		echo("<meta http-equiv=\"refresh\" content=\"{$seconds};url={$page}\" />");
	}

	public function inputs($input) {
		$this->inputs[$input];
		foreach($input as $this->inputs => $input) {
			$this->throwError($this->inputs, "Type in your {$this->inputs}");
			$this->data   .=  self::filter(isset($_POST[$this->inputs]));	// Every input has it's value  stored in $this->data variable
			$this->former .=  sprintf("<label for='%s'> %s: </label> <input type='text' name='%s' id='%s' placeholder='Type in %s'> <br>",
			$this->inputs ,$input, $this->inputs, $this->inputs, $input);
		}
	}

	public function throwError($input, $msg) {
		if(Form::$required == true && isset($_POST[$input])) {
		 $input = self::filter($_POST[$input]);
		 return(empty($input) ? self::redirect($_SERVER['HTTP_REFERER'], 3) . die("Error: {$msg}") : false);
		}
	}

	public function button($name, $value) {
		return "<button type=\"submit\" name=\"{$name}\">{$value}</button>";
	}
	
	public function render($value) {
		if(!$this->submitted()) {
		echo
		sprintf("<form method=\"%s\" action=\"%s\">%s %s</form>",
			$this->method, $this->action, $this->former, $this->button($this->name, $value));
			}
	}
	
	public function submitted() {
		return(isset($_POST[$this->name]) ? true : false);
	}
}
