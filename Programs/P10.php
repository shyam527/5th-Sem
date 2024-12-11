<?php
    function remove_duplicates_list($list1){
        $nums_unique = array_values(array_unique($list1));
        return $nums_unique;
    }
    $nums = array(1, 1, 2, 2, 3, 4, 5, 5);
    echo"Original array</br>";
    print_r($nums);
    echo"</br></br> Array after removing duplicates</br>";
    print_r(remove_duplicates_list($nums));
?>