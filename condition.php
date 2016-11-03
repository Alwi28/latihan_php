<?php
//condition
//akan menjalankan aksi jika kondisi bernilai true

//struktur :
//if(kondisi){
// aksi
//}

// contoh

$1 = 5;
//1 kondisi
if($1==){ //jika bernilai true
	echo "nilai 1 adalah 5";//tampil
}

//struktur
//if(kondisi 1){
//aksi 1
// }else{
// aksi 2
//}
echo "<br>";
//2 kondisi
if ($1==4) {//jika bernilai false
	echo "nilai i adalah 4";
}else{
	echo "nilai i bukan 4";
}

// aksi 1
// }else{
// aksi 2
// }
echo "<br>";
//2 kondisi
if($1==4){//jika bernilai false
	echo "nilai 1 adalah 4";
}else{
	echo "nilai 1 adalah 4";
}

//struktur
//if(kondisi 1){
// aksi 1
//if(kondisi 2){
//aksi 2
// }else{
// aksi 3
// }

echo "<br>";
//3 kondisi/lebih
if ($1==3) {//jika bernilai false
// echo "nilai i adalah 3";
}

$i = 5;
// condition switch case break default
// struktur
// switch(variabel){
// 	case kondisi 1:
// 		aksi 1
// 	break;
// case kondisi 2:
// 		aksi 2
// 	break;
// case kondisi 3:
// 		aksi 3
// 	break;
// default:
// 		aksi jika kondisi
// 		tidak terpenuhi
// break;
}

$i = 5;

switch($i){
	case 1:
		echo "nilai i adalah 3";
	break;
case 3:
		echo "niali i adalah 3";
	break;
case 5:
		echo "nilai i adalah 5";
	break;
default:
		echo "nilai i bukan 1,3,5";
break;
}