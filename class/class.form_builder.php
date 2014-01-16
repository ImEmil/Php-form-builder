<?php
class Form {
	public $action, $inputs, $former, $data, $name, $input = [], $method = "GET";

	function __construct($action, $name) {
		$this->action = $action;
		$this->name   = $name;
	}

	public function inputs($input) {
		$this->inputs[$input];
		foreach($input as $this->inputs => $input) {
			$this->data   .=  $this->inputs;
			$this->former .=
			sprintf("
			<label for='%s'> %s: </label>
			<input type='text' name='%s' id='%s' placeholder='Type in %s'> <br>",
			$this->inputs ,$input, $this->inputs, $this->inputs, $input);
		}
	}

	public function button($name, $value) {
		return "<button type=\"submit\" name=\"{$name}\">{$value}</button>";
	}

	public function render($value) {
		if(!$this->control()) {
		echo
		sprintf("<form method=\"%s\" action=\"%s\">%s %s</form>",
			$this->method, $this->action, $this->former, $this->button($this->name, $value));
			}
			else {
				echo "hej";
			}
	}

	public function filter($string) {
		return trim(strip_tags(htmlspecialchars( $string, ENT_QUOTES, 'utf-8')));
	}

	public function control() {
	  //$this->filter($this->data)
		return(isset($_GET[$this->name]) ? true : false);
	}
}
