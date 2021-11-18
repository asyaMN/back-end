
<?php 

$data =   Array (
    "0" => Array
    (
    "id" => 1,
    "name" => "Ayham",
    "birthday" => "11 May",
    "github account"  => "https://github.com/AyhamZaid ",
    "linkedin " => "https://www.linkedin.com/AyhamZaid/",
    "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzsIwW9scJxlyF2oHReO4cmuYXLMbJB9dcMQ&usqp=CAU
" ,
   "projects" => Array 
    (
       "0" =>  Array 
    (
  "project_name" => "HTML and CSS",
    "is_compleated" => "yes",
    ),
    "1" =>  Array 
    (
    "project_name" => "Wordpress",
    "is_compleated" => "no",
    )
    ),
    "attendance" => Array 
    (
   "0" =>  Array 
    (
    "check_in" =>"15 dec 2020 09:00",
    "check_ out" => "15 dec 2020 16:00",
    ),
    "1" =>  Array 
    (
    "check_in" =>"14 dec 2020 08:00",
    "check_ out" => "14 dec 2020 14:00",
    ),
),

),
"1" => Array
(
"id" => 1,
"name" => "Ayham",
"birthday" => "11 May",
"github account"  => "https://github.com/AyhamZaid ",
"linkedin " => "https://www.linkedin.com/AyhamZaid/",
"image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzsIwW9scJxlyF2oHReO4cmuYXLMbJB9dcMQ&usqp=CAU
" ,
"projects" => Array 
(
   "0" =>  Array 
(
"project_name" => "HTML and CSS",
"is_compleated" => "yes",
),
"1" =>  Array 
(
"project_name" => "Wordpress",
"is_compleated" => "no",
)
),
"attendance" => Array 
(
"0" =>  Array 
(
"check_in" =>"15 dec 2020 09:00",
"check_ out" => "15 dec 2020 16:00",
),
"1" =>  Array 
(
"check_in" =>"14 dec 2020 08:00",
"check_ out" => "14 dec 2020 14:00",
),
),

)

);
  for ($i=0; $i < count($data) ; $i++) { 
     echo "<h1>".$data[$i]["name"]."</h1>";
     echo "<h1>".$data[$i]["birthday"]."</h1>";
  }  



?>
