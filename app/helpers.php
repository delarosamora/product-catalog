<?php

if (! function_exists('inputValue')) {
    function inputValue($property, $object = null)
    {
        if (old($property)){
            return old($property);
        }

        return $object ? $object->$property : "";
    }
}

if (! function_exists('selectValue')) {
    function selectValue($property, $selectValue, $object = null)
    {
        if (old($property) == $selectValue){
            return "selected";
        }
        if ($object){
            return ($object->$property == $selectValue) ? "selected" : "";
        }
        else{
            return "";
        }
    }
}
