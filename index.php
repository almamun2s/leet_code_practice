<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leet code practice</title>
</head>

<body>
    <?php
    require_once 'console/autoload.php';
    require_once 'console/functions.php';
    ?>

    <?php
    $data = new Data();

    // $nums1 = [2, 7, 11, 15];
    // $nums2 = [3, 2, 4];
    // $nums3 = [3, 3];
    // $nums4 = [3, 2, 3];
    // $nums5 = [0, 4, 3, 0];
    // $nums6 = [0, 3, -3, 4, -1];
    // $nums7 = [1,1,1,1,1,4,1,1,1,1,1,7,1,1,1,1,1];
    
    // dump($data->twoSum($nums1, 9));
    // dump($data->twoSum($nums2, 6));
    // dump($data->twoSum($nums3, 6));
    // dump($data->twoSum($nums4, 6));
    // dump($data->twoSum($nums5, 0));
    // dump($data->twoSum($nums6, -1));
    // dump($data->twoSum($nums7, 11));
    
    // $s1 = "()";
    // $s2 = "()[]{}";
    // $s3 = "(]";
    // $s4 = "([])";
    // $s5 = "([)]";
    
    // dump(
    //     $data->isValid("()")
    // );
    // dump(
    //     $data->isValid("()[]{}")
    // );
    // dump(
    //     $data->isValid("(]")
    // );
    // dump(
    //     $data->isValid("([])")
    // );
    // dump(
    //     $data->isValid("([)]")
    // );
    // dump(
    //     $data->isValid("[")
    // );
    
    // $list1 = [1,2,4];
    // $list2 = [1,3,4];
    
    // dump($data->mergeTwoLists($list1, $list2));
    
    // $prices1 = [7, 1, 5, 3, 6, 4];
    // $prices2 = [7, 6, 4, 3, 1];
    
    // dump($data->maxProfit($prices1));
    // dump($data->maxProfit($prices2));
    
    // $s1 = "A man, a plan, a canal: Panama";
    // $s2 = "race a car";
    // $s3 = " ";
    
    // dump($data->isPalindrome($s1));
    // dump($data->isPalindrome($s2));
    // dump($data->isPalindrome($s3));
    
    // $nums1 = [-1,0,3,5,9,12];
    // $target1 = 9;

    // $nums2 = [-1,0,3,5,9,12];
    // $target2 = 2;

    // dump($data->search($nums1, $target1));
    // dump($data->search($nums2, $target2));

    $num1 = 43261596;
    $num2 = 2147483644;

    dump($data->reverseBits($num1));
    dump($data->reverseBits($num2));


    ?>
</body>

</html>