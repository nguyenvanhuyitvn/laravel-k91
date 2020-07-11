<?php

function showError($errors, $name){
    if($errors->has($name)){
       return  '<div class="alert alert-danger" style="margin-top: 3px">
                    '.$errors->first($name).'
        </div>';
    }
}