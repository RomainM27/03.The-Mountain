<?php
class Form
{
    public function start(string $method, string $action = "")
    {
        return "<form class='row' action= {$action} method= {$method}>";
    }

    public function basic_input(string $inputType, string $name, string $id = "0")
    {
        $whatId = (!$id) ? $name : $id;

        $input = <<<HTML
        <div class="col-12 col-md-7 my-2">
            <label for=$name class="form-label">$name :</label>
            <input type=$inputType name=$name id=$whatId  class="form-control">
        </div>
HTML;
        return $input;
    }

    public function checkbox(string $title, array $check)
    {
        foreach ($check as $check) {
            $input += "<div class='form-check'><input type='checkbox' name=$check id=$check  class='form-control'> <label for=$check class='form-label'>$check</label> </div>";
        }
    }

    public function radio()
    {
    }

    public function textarea()
    {
    }

    public function select()
    {
    }

    public function button()
    {
    }

    public function end()
    {
        return "</form>";
    }
}
