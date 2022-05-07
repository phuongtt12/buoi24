<?php
	//implode - chuyển array thành chuỗi 
	$a0 = ["Nguyễn", "Văn", "A"];
	$str = implode(" ", $a0);
	echo $str;
	echo "<br>";

	// explode - chuyển chuỗi thành array
	$a1 = "Nguyễn Văn Nam";
	$a2 = explode(" ", $a1); // delimiter
	var_dump($a2);

	// strlen - đếm số ký tự
	$a3 = "Nguyen Van Nam";
	$a4 = strlen($a3);
	echo $a4;
	echo "<br>";

	// str_word_count() - đếm số từ (cách nhau bởi khoảng trắng)
	$a5 = "Nguyen Van Nam";
	$a6 = str_word_count($a5);
	echo $a6;
	echo "<br>";

	// str_replace - thay thế
	$a7 = "Nguyen Van Nam";
	$a8 = str_replace("Nam", "Nu", $a7);
	echo $a8;
	echo "<br>";

	//substr - chuỗi con (array, start, lenght)
	$a9 = "Nguyen Van Nam";
	$a10 = substr($a9, 7, 3);
	echo $a10;
	echo "<br>";

	//strstr(haystack, needle)
	$a11 = "Nguyen Van Nam";
	$a12 = strstr($a11, "Van"); //lấy chuỗi từ chữ "Van" trở về cuối
	echo $a12;
	echo "<br>";

	//strpos - string position (vị trí của chuỗi)
	$a13 = "Nguyen Van Nam";
	$a14 = strpos($a13, "Van");
	echo $a14;
	echo "<br>";

	//strtolower
	$a15 = "Nguyen Van Nam";
	$a16 = strtolower($a15);
	echo $a16;
	echo "<br>";

	//strtoupper(string)
	$a17 = "Nguyen Van Nam";
	$a18 = strtoupper($a17);
	echo $a18;
	echo "<br>";

	// ucfirst - upper character first
	$a19 = "nguyen Van Nam";
	$a20 = ucfirst($a19);
	echo $a20;
	echo "<br>";

	// lcfirst - lower character first
	$a21 = "Nguyen Van Nam";
	$a22 = lcfirst($a21);
	echo $a22;
	echo "<br>";

	// ucword - upper character words
	$a23 = "nguyen Van Nam";
	$a24 = ucwords($a23);
	echo $a24;
	echo "<br>";

	//trim - cắt bỏ khoảng trắng đầu và cuối chuỗi
	$a25 = "Nguyen Van Nam      ";
	$a26 = trim($a25);
	echo $a26 .":". strlen($a25) . ":" .strlen($a26);
	echo "<br>";

	//ltrim - cắt bên trái
	$a27 = "Nguyen Van Nam      ";
	$a28 = ltrim($a25);
	echo $a28 .":" .strlen($a28);
	echo "<br>";

	//rtrim - cắt bên phải
	$a29 = "Nguyen Van Nam      ";
	$a30 = rtrim($a25);
	echo $a30 .":".strlen($a30);
	echo "<br>";

	// lấy đường dẫn url hiện hành của trang web bao gồm cả tham số
	var_dump($_SERVER);

	$url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
	echo $url;
	echo "<br>";

	// lấy full đường dẫn ko có tham số
	$url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
	$str = explode("?", $url);
	$str1 = $str["0"];
	echo $str1;
	echo "<br>";
	// Viết hàm get_full_url()
	// lấy đường dẫn url của trang web bao gồm cả tham số
	// $_SERVER là biến toàn cục ở đâu cũng nhìn thấy nên ko cần truyền vào
	function get_full_url(){
		$url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
		return $url;	
	}
	// Viết hàm get_url_without_param()
	// lấy full đường dẫn ko có tham số
	function get_url_without_param(){
		$url = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
		$str = explode("?", $url);
		$str1 = $str["0"];
		return $str1;
	}

	$fun1 = get_full_url();
	$fun2 = get_url_without_param();
	echo $fun1;
	echo "<br>";
	echo $fun2;
	echo "<br>";

	// Liên quan đến ngày tháng năm giờ phút giây
	//Ngày hôm nay
	echo date("Y-m-d"); //Y: năm đầy đủ, y: năm viết gọn
	echo "<br>";
	// Bây giờ là mấy giờ
	echo date("H:i:s");
	echo "<br>";
	// hiển thị ngày tháng năm giờ phút giây
	echo date("Y-m-d H:i:s");
	echo "<br>";
	//4 ngày sau
	echo date("Y-m-d", strtotime("+4 days"));
	echo "<br>";
	//strtotime 
	//số giây tính từ ngày 01/01/1970
	echo strtotime("+4 days");
	echo "<br>";

	//format số theo dấu phân cách hàng nghìn:
	echo number_format(495000);
	//Giá gốc: 495000
	//Giá giảm: 17%
	$salePrice = 495000 * (1 - 0.17);
	echo "<br>";
	echo $salePrice;
	//làm tròn, hàm round chỉ làm tròn cho số thập phân nên phải /1000 rồi *1000
	$salePrice = round($salePrice / 1000) * 1000;
	echo $salePrice;
	echo "<br>";

	//isset - kiểm tra biến có tồn tại hay ko
	//$a31 = "sfjsfj";
	echo "<br>";
	if (isset($a31)) {
		echo "bien tồn tại";
	}
	else {
		echo "biến ko tồn tại";
	}
	echo "<br>";

	$a32 = array(2,4); // 0 1
	if (isset($a32[2])) {
		echo "biến a32[2] tồn tại";
	}
	else {
		echo "biến a32[2] ko tồn tại";
	}
	echo "<br>";
	// empty: (0, "", null, $a32[2], false) là empty
	if (empty($a32[2])) {
		echo "biến a32[2] empty";
	}
	else {
		echo "biến a32[2] ko empty";
	}
	echo "<br>";
	// is_array
	$a34 = array();
	if (is_array($a34)) {
		echo "biến $a34 là array";
	}
	else {
		echo "biến $a34 ko là array";
	}
	echo "<br>";

	//is_numeric()
	//is_string()
	// is_array()
	// is_object()
	// is_null()
	// is_bool()
	// is_resource()

	
 ?>
