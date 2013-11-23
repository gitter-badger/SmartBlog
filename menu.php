<div class="menu" style="text-align: center;">
<ul class="ulMenuList">

<?php  
$result = mysql_query("select name from category");
while ($r = mysql_fetch_array($result))
{
?>
<li class="menuList link1"><a ><?php echo  $r["name"]; ?></a></li>
<?php 
}
?>
</ul>
<div style="clear: both;"></div>
</div>