<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Mảng trong php</h1>
<pre>

</pre>

<?php
    //Mảng chỉ số
    $vietnam = [
            "hn"=>[
                    "ten"=>"hà nội",
                    "quan"=>[
                            "th"=>"tây hồ",
                            "cg"=>"cầu giấy"
                    ],

            ],
            "hcm"=>[
                "ten"=>"Ho chi minh",
                "quan"=>[
                    "q1"=>"Quận 1",
                    "q2"=>"QUận 2"
                ],
            ],
            "dn"=>[
                "ten"=>"Đà nẵng",
                "quan"=>[
                    "st"=>"sơn trà",
                    "ht"=>"hải châu"
                ],
            ],
    ];
    echo "<pre>";
    print_r($vietnam);
    echo "</pre>";

    //in ra tên thành phố
    echo "<br>".$vietnam["hn"]["ten"];
    echo "<br>".$vietnam["hcm"]["ten"];
    echo "<br>".$vietnam["dn"]["ten"];

    $vietnam["hn"]["ten"] = "Hà Nội 1";
    $vietnam["hcm"]["ten"] = "Hồ Chí Minh 1";
    $vietnam["dn"]["ten"] = "Đà Nẵng 1";
    //in ra các quận
    echo "<br>";
    echo "<br>".$vietnam["hn"]["quan"]["th"];
    echo "<br>".$vietnam["hcm"]["quan"]["q1"];
    echo "<br>".$vietnam["dn"]["quan"]["st"];

    $vietnam["hn"]["quan"]["th"] = "Tây Hồ 1";

    echo "<br> sau khi thay đổi";
    echo "<pre>";
    print_r($vietnam);
    echo "</pre>";
?>
</body>
</html>