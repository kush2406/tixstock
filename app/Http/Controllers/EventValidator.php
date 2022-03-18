<?php 
namespace App\Http\Controllers;

use App\Exceptions\EventValidatorDatatypeException;
use App\Exceptions\EventValidatorNumberRangeException;
use App\Exceptions\EventValidatorStringLengthException;

class EventValidator{
    function __construct($event)
    {
        // validate the $event here
        // If the validation data type is not “string” or “number”, then a specific “EventValidatorDatatypeException” should be thrown.
        if(!is_string($event) && !is_numeric($event)){
            throw new EventValidatorDatatypeException("Input datatype is neither string nor number");
        }

        // If the validation data type is “string” but a length exceeds 255 characters, then a specific “EventValidatorStringLengthException” should be thrown.
        if(is_string($event) && strlen($event) > 255){
            throw new EventValidatorStringLengthException("Input string exceeds 255 character limit");
        }

        // If the validation data type is “string” but a length exceeds 255 characters, then a specific “EventValidatorStringLengthException” should be thrown.
        if(is_numeric($event) && !($event > -255 && $event < 255)){
            throw new EventValidatorNumberRangeException("The input should not be less than -255 or greater than 255");
        }
    }
}


?>