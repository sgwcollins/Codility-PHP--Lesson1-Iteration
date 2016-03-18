// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";
//https://codility.com/demo/results/trainingAQ8G42-SVF/

function solution($N) {
    
    
    $binaryGap = 0;
    
    //turn integer into binary
    $binary = decbin($N);
    
    //split array by 1
    $binArray = explode('1', $binary);

    //first and last character might be 1  so remove because they are not needed

    unset($exploded[count($exploded) - 1]);
    unset($exploded[0]);
    

    foreach($binArray as $element){
    
        if($binaryGap < strlen($element)){
            $binaryGap = strlen($element);
          
        }
        
    }
    
    return $binaryGap;
    

}

