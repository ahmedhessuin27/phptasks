<?php

#EX1

$countryList = [
    'CA'        => 'Canada',
    'US'        => 'United States'];
    echo'<pre>';
    print_r($countryList);
    echo'<pre>';
    echo $countryList['CA'];//Canada
    echo'<pre>';
    echo $countryList['US'];//United States
    $stateList['CA'] = [
    'AB'        => 'Alberta',
    'BC'        => 'British Columbia',
    'AB'        => 'Alberta',
    'BC'        => 'British Columbia',
    'MB'        => 'Manitoba',
    'NB'        => 'New Brunswick',
    'NL'        => 'Newfoundland/Labrador',
    'NS'        => 'Nova Scotia',
    'NT'        => 'Northwest Territories',
    'NU'        => 'Nunavut',
    'ON'        => 'Ontario',
    'PE'        => 'Prince Edward Island',
    'QC'        => 'Quebec',
    'SK'        => 'Saskatchewan',
    'YT'        => 'Yukon'];
    echo'<pre>';
    print_r($stateList);
    echo'<pre>';
    echo'<pre>';
    echo $stateList['CA']['NS'];//Nova Scotia
    echo'<pre>';
    $stateList['US'] = [
    'AL'        => 'Alabama',
    'AK'        => 'Alaska',
    'AZ'        => 'Arizona',
    'AR'        => 'Arkansas',
    'CA'        => 'California',
    'CO'        => 'Colorado',
    'CT'        => 'Connecticut',
    'DE'        => 'Delaware',
    'DC'        => 'District of Columbia',
    'FL'        => 'Florida',
    'GA'        => 'Georgia',
    'HI'        => 'Hawaii',
    'ID'        => 'Idaho',
    'IL'        => 'Illinois',
    'IN'        => 'Indiana',
    'IA'        => 'Iowa',
    'KS'        => 'Kansas',
    'KY'        => 'Kentucky',
    'LA'        => 'Louisiana',
    'ME'        => 'Maine',
    'MD'        => 'Maryland',
    'MA'        => 'Massachusetts',
    'MI'        => 'Michigan',
    'MN'        => 'Minnesota',
    'MS'        => 'Mississippi',
    'MO'        => 'Missouri',
    'MT'        => 'Montana',
    'NE'        => 'Nebraska',
    'NV'        => 'Nevada',
    'NH'        => 'New Hampshire',
    'NJ'        => 'New Jersey',
    'NM'        => 'New Mexico',
    'NY'        => 'New York',
    'NC'        => 'North Carolina',
    'ND'        => 'North Dakota',
    'OH'        => 'Ohio',
    'OK'        => 'Oklahoma',
    'OR'        => 'Oregon',
    'PA'        => 'Pennsylvania',
    'RI'        => 'Rhode Island',
    'SC'        => 'South Carolina',
    'SD'        => 'South Dakota',
    'TN'        => 'Tennessee',
    'TX'        => 'Texas',
    'UT'        => 'Utah',
    'VT'        => 'Vermont',
    'VA'        => 'Virginia',
    'WA'        => 'Washington',
    'WV'        => 'West Virginia',
    'WI'        => 'Wisconsin',
    'WY'        => 'Wyoming'
    ];
    echo'<pre>';
    print_r($stateList);
    echo'<pre>';
    echo $stateList['US']['KS'];
    echo'<pre>';


    #EX2

    /*    $max_int = PHP_INT_MAX;
    echo $max_int;
$arr = [];
$arr[1] = 'last name'; // New generated index will be 2

 $arr[ $max_int ] = 'this is max of array '; // Caution: Next generated index will be -2147483648 due to the integer overflow عشان دا ماكس مفيش اكبر منه 

$arr[0] = 'first name'; // The highest value should be 2147483648 but due to the i-overflow it is -2147483648 so current index 0 is larger. The new generated index therefore is 1

$arr[]  = 'this may be at the last of array'; // Warning: Cannot add element to the array as the next element is already occupied.*/

    echo'<pre>';
    #EX3



    #count function
    $x=[6,7,8,9,10];
    echo count($x);// عدد عناصر الarray
    echo'<pre>';

    # array_key_exists function
    $y=['arabic'=>90,'math'=>60,'physics'=>50];
    var_dump(array_key_exists('arabic',$y)); //true    بتعرفك الكى دى موجودة ولا لأ
    var_dump(array_key_exists('history',$y));//false
    echo'<pre>';

    # in_array function
    $z=['arabic','math','physics'];
    if(in_array('arabic',$z)){
        echo'passed';
    }
    else{
        echo'failed';
    }
    echo'<pre>';

    # array_keys function
    $car=['color'=>'red','brand'=>'bmw','price'=>1000000];
    print_r(array_keys($car));//بتطبع كل الkeys
    echo'<pre>';

    # another example of array_keys function
    $colors=['blue','red','blue','green','blue'];
    print_r(array_keys($colors,'blue'));//هنا لو عايز تعرف الفاليو دى ايه كل ال keys بتوعها
    echo'<pre>';

    # array_values function
    $v=['size'=>'large','color'=>'black'];
    print_r(array_values($v));//بتطبع كل الvalues 
    echo'<pre>';

    #array_sum , array_rand functions
    $a=[1,2,3,4,5];
    echo array_sum($a).'  ';
    echo end($a).'  ';
    echo array_rand($a);
    echo'<pre>';

    #array_merge function
    print_r(array_merge($a,$x));
    echo'<pre>';

    #array_replace function
    $subject=[0=>'arab', 1=>'math'];
    $subject2=[1=>'history',2=>'english',3=>'frensh'];
    $subjects=array_replace($subject,$subject2);
    print_r($subjects);
    echo'<pre>';

    #array_shift , array_unshift , array_push , array_pop functions
    $sums=[10,20,30,40,50];
    $r=array_shift($sums);
    array_unshift($sums,60);
    array_push($sums,23,56,78);
    array_pop($sums);
    print_r($sums);
    echo'<pre>';

    #array_slice , array_splice functions
    $nums=[11,12,13,14,15];
    print_r(array_slice($nums,2));
    array_splice($nums,-1,1,array(1,2,3));
    print_r($nums);
    echo'<pre>';
    $numss=[11,12,13,14,15];
    echo'<pre>';
    echo'<pre>';
    echo'<pre>';
    echo'<pre>';
    echo'<pre>';






?>