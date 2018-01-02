<?php


namespace dhiraj1site\jsonappend\;


class JSONAppend 
{

/**
* This function is used to appendJSON to a pre-existing JSON file without checking for duplicates
* @param .json $sourcefile
* @param array $appenditem
* @return .json
*/

function appendJSON($sourcefile, $appenditem)
{
    $json = file_get_contents($sourcefile);

    /**
    * We try to decode the sourcefile and check for validity.  
    * @var string
    */
    $decode = json_decode($json, true);

    /**
    * Throws an exception if received any errors while decoding
    * @var string
    */

    if(json_last_error() !== JSON_ERROR_NONE)
    {
        throw new Exception("The first argument supplied is not a valid JSON file");        
    }
    
    /**
    * We check if the second supplied argument is an array. Throws an exception if not an array
    */    

    if(!is_array($appenditem))
    {
        throw new Exception("Second argument should be an array");
    }

    /**
    * We loop through the supplied array and create a new key/pair value to the original decoded JSON
    * file
    */

    foreach($appenditem as $items => $v)
    {
        $decode[$items] = $v;
    } 

    /**
    * We return the final json file by encoding the newly merged array
    */

    return json_encode($decode);
}


/**
* This function is used to appendJSON to a pre-existing JSON file checking for duplicates and only
* appending unique JSON entries
* @param .json $sourcefile
* @param array $appenditem
* @return .json
*/

function appendUniqueJSON($sourcefile, $appenditem)
{
    $json = file_get_contents($sourcefile);

    /**
    * We try to decode the sourcefile and check for validity.  
    * @var string
    */
    $decode = json_decode($json, true);

    /**
    * Throws an exception if received any errors while decoding
    * @var string
    */

    if(json_last_error() !== JSON_ERROR_NONE)
    {
        throw new Exception("The first argument supplied is not a valid JSON file");        
    }
    
    /**
    * We check if the second supplied argument is an array. Throws an exception if not an array
    */    

    if(!is_array($appenditem))
    {
        throw new Exception("Second argument should be an array");
    }

    /**
    * We loop through the supplied array and create a new key/pair value to the original decoded JSON
    * file. If the array key already exists we ignore those entries, making the appended entries 
    * on the JSON file unique. 
    */

    foreach($appenditem as $items => $v)
    {
        if(!array_key_exists($items, $decode))
        {
            $decode[$items] = $v;
        }
    } 

    /**
    * We return the final json file by encoding the newly merged array
    */

    return json_encode($decode);
}

}