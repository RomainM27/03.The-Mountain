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

    public function check(string $type, string $title, array $check)
    {
        $input = "";

        $input = "<div class='col-12 col-md-7 my-2'>";
        $input .= "<p>$title :</p>";
        if ($type == "checkbox") {
            foreach ($check as $check) {
                $input .= "<div class='form-check'><input type=$type name=$check value=$check class='form-check-input'> <label for=$check class='form-check-label'>$check</label> </div>";
            }
        } else {
            foreach ($check as $check) {
                $input .= "<div class='form-check'><input type=$type name='radio' value=$check class='form-check-input'> <label for=$check class='form-check-label'>$check</label> </div>";
            }
        }
        $input .= "</div>";
        return $input;
    }

    public function textarea(string $id)
    {
        $input = "";
        $input = <<<HTML
        <div class="col-12 col-md-7 my-2">
            <label for=$id class="form-label">$id :</label>
            <textarea class="form-control" id=$id name=$id ></textarea>
        
        </div>
HTML;
        return $input;
    }

    public function select(string $title, array $option)
    {

        $input = "";
        $input .= "<div class='col-12 col-md-7 my-2'>";
        $input .= "<p>$title :</p>";
        $input .= "<select class='form-select'>
        <option selected>Choose one...</option>";
        foreach ($option as $option) {
            $input .= "<option value=$option>$option</option>";
        }
        $input .= "</select> </div>";
        return $input;
    }

    public function button()
    {
        return "<div class='col-12 col-md-7 my-2'> <button class='btn btn-primary' type='submit'>Submit form</button>  </div>";
    }

    public function end()
    {
        return "</form>";
    }
}
