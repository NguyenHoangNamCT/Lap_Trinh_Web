<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
</head>
<body>
 
  <form action="formsubmit.php" method="post">
    <table align="center" cellpadding="5px">
      <tr>
          <td colspan="2" align="center"> <h2>THÊM MẶT HÀNG</h2></td>
      </tr>
      <tr>
          <td>Tên sản phẩm</td><td>
          <input type="text" name="txtten"></td>
        </tr>
      <tr>
          <td>Giá bán</td><td>
          <input type="number"  name="txtgia"></td>
        </tr> 	
      <tr>
          <td>Danh mục</td><td>
          <select name="txtdm">
        <option value="Hoa chúc mừng">Hoa chúc mừng</option>
        <option value="Hoa khai trương">Hoa khai trương</option>
        <option value="Hoa cưới">Hoa cưới</option>
        </select>
        </td>
        </tr> 
        <tr>
          <td colspan="2" align="center">
        <button type="submit">Thêm</button>
      </td></tr>
    </table>
  </form>

</body>
</html>
