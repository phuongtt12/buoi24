<?php 
	$filename = "files/demo.txt";
	$fp = fopen($filename, "r"); //read - mở file với chế độ đọc
	// Biến $fp sẽ có kiểu dữ liệu resource
	
	while (!feof($fp)) {
		//feof: file end of file
		//đọc từng ký tự
		$c = fgetc($fp); // fgetc - file get character
		if ($c == "\n") {
			$c = "<br>";
		}
		echo $c;
	}
	// var_dump($fp);
	fclose($fp);
	echo "<br>";

	// đọc từng dòng
	$fp = fopen($filename, "r"); //read
	//feof: file end of file
	while (!feof($fp)) {
		$line = fgets($fp); // đọc từng dòng
		$line = str_replace("\n", "<br>", $line);
		echo $line;
	}
	// var_dump($fp);
	fclose($fp);
	echo "<br>";
	// file_get_contents
	echo "Đọc theo kiểu file_get_contents() <br>";
	$content = file_get_contents($filename); //đọc tất cả file 1 lần
	$content = str_replace("\n", "<br>", $content);
	echo $content;
	echo "<br>";

	// r: read
	// a: append - viết thêm
	// w: write  - viết mới, viết đè
	$filename = "files/demo1.txt";
	// viết cách 1
	$fp = fopen($filename, "a");
	fwrite($fp, "\nNguyen Thi D");
	fclose($fp);
	// Viết cách 2 (thường sử dụng hơn)
	$content = "\nxyz...abc";
	file_put_contents($filename, $content, FILE_APPEND);

	//xóa file
	$removed_file = "files/demo2.txt";
	if (file_exists($removed_file)){
		unlink($removed_file); //unlink: xóa
	}
 ?>