<?php
    $data=[
    ['id'=>1,'name'=>'Sneha','age'=>20],
    ['id'=>2,'name'=>'Shubha','age'=>22],
    ['id'=>3,'name'=>'Arpitha','age'=>15],
    ['id'=>4,'name'=>'Dia','age'=>30],
    ['id'=>5,'name'=>'Raghavi','age'=>32]
    ];
    function searchByCriteria($data,$criteria){
        $result=[];
        foreach($data as $entry){
            $match=true;
            foreach($criteria as $key=>$value){
                if(!isset($entry[$key]) ||$entry[$key]!=$value){
                    $match=false;
                    break;
                }
            }
            if($match){
                $result[]=$entry;
            }
        }
        return $result;
    }
    $criteria=['age'=>20];
    $searchResult=SearchByCriteria($data,$criteria);
    echo "Search Results:</br>";
    print_r($searchResult);
?>