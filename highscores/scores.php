$scores[];


function AddScore($amount){

    $scores[] = $amount
}

function GetScore($index){
    if ($index < count($scores)){
    return $scores[$index]
    }
    return 0;
}

function TestAPI(){
    return "hej";
}