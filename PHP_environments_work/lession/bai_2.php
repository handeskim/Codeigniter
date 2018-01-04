<h1> PHP nâng cao giới thiệu</h2>

	class, extends , interface object,

	public, private, protected
	function,  __contruct();
	Function là gì:  là một chức năng xử lý hoặc hành động tập hợp lại thành 1 nhóm. 
	
	
</br>
function a_name(){
	$a = 1;
	$b = 2;
	return $a + $b*$c;
}
echo a_name($c);	
</br>

	Class là gì: 
	Class Name_class{
		
	}
	
<?php 
$c = 5;
header('Content-Type: text/html; charset=utf-8');
function a_name($c=0){
	$a = 3;
	$b = 2;
	return $a + $b*$c;
}

echo "</br>a+b*c=".a_name($c);
class A_name{
	
	public function a_class_name($c=0){
		$a = 3;
		$b = 2;
			return $a + $b*$c;
	}
}
$d = new A_name;
echo "</br>Class a+b*c=".$d->a_class_name($c);
echo "</br>------------------------------------------------------</br>";

class Cha{
	// public $dep_trai = "dep trai";
	public function dep_trai(){
		return $dep_trai = "đẹp trai";
	}
		
}

class Me{
	private function cao1(){
		return $cao = "cao";
	}
	public function cao2(){
		return $cao = "cao";
	}
	protected function cao3(){
		return $cao = "cao";
	}
	
	public function cao4(){
		return $this->cao1();
	}
	
}


class Con extends Me{
	
	public function chieu_cao(){
		return Me::cao4();
		
	}
}

$con = new Con(); 
echo "chiều cao xác định là: ". $con->chieu_cao(); 


class Nha_tho{
	
	function __contruct($cauhoi){
		
	}
	
	function xin_nuoc(){
		return true;
	}
	
}


// class Bname extends  Aname{
	
// }
?>

