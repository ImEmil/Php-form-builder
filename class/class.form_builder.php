<?php
class form {

	public $action = '', $method = '', $stored = '', $inputs = [];

	public function __construct($action, $method)
	{
		$this->action = $action;
		$this->method = $method;
	}

	public function create($type)
	{
		return $type;
	}

	public function build()
	{
		foreach($this->inputs as $input)
		{
			$this->stored .= $input;
		}
		return $this;
	}

	public function render()
	{
		echo(sprintf("<form action=\"%s\" method=\"%s\"> \t\n\n%s\n\t </form>",$this->action, $this->method, $this->stored));
	}


	public function input($type, $name, $maxchar, $label)
	{
		$this->inputs[] = sprintf("<label for=\"%s\">%s</label> <br> \n \n <input id=\"%s\"  type=\"%s\" name=\"%s\" placeholder=\"%s\" maxlength=\"%s\">",
		$name, $label, $type, $name, $name, $label, $maxchar);
		return $this->inputs;
	}

	public function textarea($name, $rows, $maxlength, $label)
	{
		$this->inputs[] = sprintf("<label for=\"%s\">%s</label> <br> \n \n <textarea id=\"%s\" name=\"%s\" rows=\"%s\" maxlength=\"%s\" placeholder=\"%s\"></textarea>",
		$name, $label, $name, $name, $rows, $maxlength, $label);
		return $this->inputs;
	}

	public function radio($name, $value, $label)
	{
		$this->inputs[] = sprintf("<label for=\"%s\">%s</label> <br> \n \n <input id=\"%s\" type=\"radio\" name=\"%s\" value=\"%s\">",
		$name, $label, $name, $name, $value);
		return $this->inputs;
	}

	public function checkbox($name, $value, $label)
	{
		$this->inputs[] = sprintf("<label for=\"%s\">%s</label> <br> \n \n <input id=\"%s\" type=\"checkbox\" name=\"%s\" value=\"%s\">",
		$name, $label, $name, $name, $value);
		return $this->inputs;
	}

	public function select($name, $label, $options = array())
	{
		$op = null;

		foreach($options as $option => $value)
		{
			$op .= "<option value=\"{$value}\"> {$option} </option>";
		}

			$this->inputs[] = sprintf("<label for=\"%s\">%s</label> <br> \n \n <select id=\"%s\" name=\"%s\">%s</select>",
			$name, $label, $name, $name, $op);

		return $this->inputs;
	}

	public function button($type, $name, $text)
	{
		$this->inputs[] = sprintf("\n\t<button type=\"%s\" name=\"%s\"> %s </button>", $type, $name, $text);
		return $this->inputs;
	}
}
