<?php
namespace MyApp;

class Bingo{
    public function create(){

        $nums = [];

for($i=0; $i<5; $i++){
    $col = range($i*15+1, $i*15+15); //rangeは、ある範囲の整数を有する配列を作成する関数
    shuffle($col);  //shuffleは、指定した配列をシャッフルして並び順をランダムにする関数
    $nums[$i] = array_slice($col,0,5); //array_sliceは、配列の一部を切り取る関数
}

$nums[2][2] ="FREE";
return $nums;
        
    }
}