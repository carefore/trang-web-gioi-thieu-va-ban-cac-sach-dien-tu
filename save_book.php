<?php
// Kết nối CSDL (Giả sử bạn đã có kết nối CSDL ở đây)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST['title'];
  $author = $_POST['author'];
  $price = $_POST['price'];

  // Thực hiện truy vấn để lưu thông tin sách vào CSDL
  // Ví dụ:
  // $query = "INSERT INTO books (title, author, price) VALUES ('$title', '$author', $price)";
  // mysqli_query($connection, $query);

  // Đoạn code trên chỉ là ví dụ, hãy sử dụng cách an toàn hơn để tránh tấn công SQL Injection
  // và xác thực dữ liệu trước khi lưu vào CSDL.
}
?>
