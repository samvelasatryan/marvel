<?php namespace Zofe\Rapyd\DataForm\Field;

use Collective\Html\FormFacade as Form;

class Disable extends Field
{
  public $type = "disable";

  public function build()
  {
    $output = "";

    if (parent::build() === false) return;

    switch ($this->status) {
      case "disabled":
      case "show":

        if ($this->type =='hidden' || $this->value == "") {
          $output = "";
        } elseif ( (!isset($this->value)) ) {
          $output = $this->layout['null_label'];
        } else {
          $output = nl2br(htmlspecialchars($this->value));
        }
        $output = "<div class='help-block'>".$output."&nbsp;</div>";
        break;

      case "create":
      case "modify":
        $output = Form::text($this->name, $this->value, array_merge(array('class'=>'col-xs-12'),array('readonly'=>'readonly')));
        break;

      case "hidden":
        $output = Form::hidden($this->name, $this->value);
        break;

      default:;
    }
    $this->output = "\n".$output."\n". $this->extra_output."\n";
  }

}
