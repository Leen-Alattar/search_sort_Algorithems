<?php
// //linear search 
// $arr = array(4, 2, 5, 6, 14, 7, 15, 3);
// echo search($arr, 1);
// function search($arr, $key) {
//     for($i = 0; $i < sizeof($arr); $i++) {
//         if($arr[$i] == $key)
//          return $i;
//     }
//     return -1;
// }
//----------------------------------------------



// //binary search ------------------------------------
// function binarySearch(Array $arr, $key)
// {
//     // check for empty array
//     if (count($arr) === 0) 
//        return false;
//     $f = 0;
//     $l = count($arr) - 1;
      
//     while ($f <= $l) {
          
//         // find the mid 
//         $mid = floor(($f + $l) / 2);
   
//         // element found at mid
//         if($arr[$mid] == $key) {
//             return true;
//         }
  
//         if ($key < $arr[$mid]) {
//             // search the left side of the array
//             $l = $mid -1;
//         }
//         else {
//             // search the right side of the array
//             $f = $mid + 1;
//         }
//     }
      
//     // If we reach here element x doesnt exist
//     return false;
// }
  
// //binary search array declar and function call
// $arr = array(1, 2, 3, 4, 5);
// $value = 5;
// if(binarySearch($arr, $value) == true) {
//     echo $value." Exists";
// }
// else {
//     echo $value." Doesnt Exist";
// }
//----------------------------------------------------------

// function for bubble sort

// function bubbleSort($arr) : array
// {
//     $arrLength = count($arr);
//     for ($i = $arrLength - 1; $i > 0; $i--) {
//         for ($j = 0; $j < $i; $j++) {
    
//             if ($arr[$j] > $arr[$j + 1]) {
//                 $temp = $arr[$j];
//                 $arr[$j] = $arr[$j + 1];
//                 $arr[$j + 1] = $temp;
//             } 
    
//         }
         
//     }
//     return $arr;
// }
// $arr = array(6, 2, 3, 4, 5);
// print_r (bubbleSort($arr)); 
//-----------------------------------------------------------


//  selection sort
function selection_sort(&$arr, $n)
{
    for($i = 0; $i < $n ; $i++)
    {
        $currnt = $i;
        for($j = $i + 1; $j < $n ; $j++)
        {
            if ($arr[$j] < $arr[$currnt])//
            {
                $currnt = $j;
            }
        }
         
        // swap the minimum value to
        if ($arr[$i] > $arr[$currnt])
        {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$currnt];
            $arr[$currnt] = $tmp;
        }
    }
}
 
// Driver Code
$arr = array(64, 25, 12, 22, 11);
$len = count($arr);
selection_sort($arr, $len);
print_r($arr);  

// // insertion sort 
// function insertionSort($arr)
// {
//     $n=count($arr);
//     $next = null;
//     for($i=1; $i<$n; $i++)//starts from the second element to the end of the list
//     {
//         $next=$arr[$i];
//         for($j=$i-1; $j>=0; $j--) //going backwards of the already sorted list until index 0 
//         {
//             if( $arr[$j]>$next )//find the smaller number of orderd array 
//             {
//                 $arr[$j+1]=$arr[$j];
//             }
//             else
//             {
//                 break;
//             }
//         }
//         $arr[$j+1]=$next; // insert the next value to the correct postion of the already sorted elements
 
//     }
 
//     return $arr;
// }
// $arr = array(64, 25, 12, 22, 11);
// $arr1 = insertionSort($arr);
// print_r($arr1);
