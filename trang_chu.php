<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<style type="text/css" >
	a.lk_1{font-size:22px;text-decoration:none;color:black;margin-right:30px; font-weight:bold;}
	a.lk_1:hover {color:red}
</style>
<br>
<div class="menu">
<center>

<a href="index.php" style="font-size:72px;color:black;text-decoration:none" >Quản trị cửa hàng</a>
</center>
<br><br>
<table width="990px" >
	<tr>
		<td width="800px">
			<a href="index.php" class="lk_1" >Trang chủ</a>
			<a href="?thamso=menu_doc" class="lk_1" >Danh mục sản phẩm</a>
			<a href="?thamso=san_pham" class="lk_1" >Sản phẩm</a>
			<a href="?thamso=hoa_don" class="lk_1" >Hóa đơn</a>
		</td>
		<td align="right" >
			<a href="../index.php" class="lk_1">Thoát</a>
		</td>
	</tr>
</table>
<br><br>
</div>
<?php 
	include("chuc_nang/quan_tri_2/dieu_huong.php");
?>

