<?php


require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/Bingo.php');

$bingo = new \MyApp\Bingo();
$nums = $bingo ->create();


// $nums[][]

// B: $nums[0]1~15
// I: $nums[1]16~30
// ・・
// G: $nums[4]61~75

//一般公
// $num[$i]$i*15+1 ~ $i*15+15

$nums = [];

for($i=0; $i<5; $i++){
    $col = range($i*15+1, $i*15+15); //rangeは、ある範囲の整数を有する配列を作成する関数
    shuffle($col);  //shuffleは、指定した配列をシャッフルして並び順をランダムにする関数
    $nums[$i] = array_slice($col,0,5); //array_sliceは、配列の一部を切り取る関数
}

$nums[2][2] ="FREE";



?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>BINGO</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="container">
        <table>
            <!-- 見出し行 -->
            <tr>
                <!-- テーブルヘッダー -->
                <th>B</th>
                <th>I</th>
                <th>N</th>
                <th>G</th>
                <th>O</th>
            </tr>
            <!-- iは行、jは列 -->
            <?php for($i=0; $i<5; $i++) : ?>
            <tr>
            <?php for($j=0; $j<5; $j++) : ?>
                <td><?= h($nums[$j][$i]); ?></td>
                <?php endfor; ?>
            </tr>
            <?php endfor; ?>
        </table>
    </div>
</body>
</html>