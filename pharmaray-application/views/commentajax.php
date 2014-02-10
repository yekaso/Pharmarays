<?php
if($_POST)
{
$comment_dis=$_POST['comment'];
  
mysql_query("insert into drugcomment(id_drugcomment,comment,memberid_member,drugid_drug) values ('1','$comment_dis','2','1')");

}

else { }
 $name = 'Obinna Izuogu';
?>
<li class="box">
                                                        <img src="<?php echo base_url() ?>images/profile1.png" class="com_img">
                                                            <span class="com_name"> <?php echo $name; ?></span> <br />
                                                        <?php echo $comment_dis ;?></li>
