<?php

function slugify($str1){
        $str2 = mb_strtolower($str1);
        $str3 = explode(' ',$str2);
        
        return implode('-',$str3);
    }
echo slugify('La La la LA');