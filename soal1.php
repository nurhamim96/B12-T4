<?php
function biodata(){
$name ="Ibad Nurhamim";
$address ="Jl. Menteng Atas Dalam No.30 Kel. Menteng Atas Kec. Setiabudi, Jakarta Selatan";
$age= 23; 
$hobbies =  array('Futsal','Badminton','Jogging');
$is_married = false;
$school = [
		'highSchool' => 'SMAN 2 Majalengka 2014', 
		'university' =>'Universitas Bina Sarana Informatika 2019', 
		];
$interest=[];
$interest_in_coding = true;

	$interest[] = $interest_in_coding;


$data =array();
$data['name']=$name;
$data['age']=$age;
$data['address']=$address;
$data['hobbies']=$hobbies;
$data['is_married']= $is_married;
$data['school']= $school;
$data['interest_in_coding']= $interest;

return json_encode($data,JSON_PRETTY_PRINT);

}

echo biodata();

