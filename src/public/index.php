<!-- 実践課題①(ビルドイン関数)のコードをクラス化 -->

<?php
$arrayList = [
    [3, 5, 1, 0, 9, 12],
    [1, 2, 14, 10, 19, 1],
    [0, 3, 3, 3, 7, 2]
];

class MaxValueFinder {
  public static function findMaxValues($arrayList) {
    foreach ($arrayList as $array) {
    echo max($array) . "\n";
    }
  }
}

MaxValueFinder::findMaxValues([
  [3, 5, 1, 0, 9, 12],
  [1, 2, 14, 10, 19, 1],
  [0, 3, 3, 3, 7, 2]
]);
  
?>


<!-- 実践課題②(ビルドイン関数)のコードをクラス化 -->
<?php
$arrayList = [
    [3, 5, 1, 0, 9, 12],
    [1, 2, 14, 10, 9, 1],
    [0, 3, 4, 10, 20, 2]
];

class MaxMultipleOfThreeFinder {
    public static function findMaxMultipleOfThree($arrayList) {
        $maxMultipleOfThree = null; // 最大の3の倍数を格納する変数

        foreach ($arrayList as $array) {
            foreach ($array as $value) {
                if ($value % 3 === 0) {
                    // ガード節：3の倍数の最大値を更新
                    if ($maxMultipleOfThree === null || $value > $maxMultipleOfThree) {
                        $maxMultipleOfThree = $value;
                    }
                }
            }
        }

        // 出力
        if ($maxMultipleOfThree !== null) {
            echo $maxMultipleOfThree . "\n";
        }
    }
}

MaxMultipleOfThreeFinder::findMaxMultipleOfThree($arrayList);
?>

