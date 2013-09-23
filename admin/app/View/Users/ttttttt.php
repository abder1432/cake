<table width="100%" cellspacing="0" cellpadding="0" border="">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">نوع البرنامج</th>
    <th scope="col">السبب</th>
    <th scope="col">المبلغ</th>
    <th scope="col">التاريخ</th>
    <th scope="col">الحالة</th>
    <th scope="col">خيارات</th>    
  </tr>
</thead>  


 <?php 
 
 
 	global $wpdb;
	$table_name = $wpdb->prefix . "disbursement";	
 
	$programs = $wpdb->get_results( 
		"
		SELECT * 
		FROM $table_name
		WHERE beneficiary = $post->ID 
		"
	);
 
 ?>
 

<?php 	foreach ( $programs as $program ) 
	{ ?> 
  <tr>
    <td><?php echo $program->id;  ?></td>
    <td><?php echo $program->program;  ?></td>
    <td><?php echo $program->reason;  ?></td>
    <td><?php echo $program->amount;  ?></td>
    <td><?php echo mysql2date('Y/m/d' ,$program->created);  ?></td>
    <td><?php echo $program->status;  ?></td>
    <td>
   <?php 
 printf('<a  href="?page=%s&action=%s&id=%s&beneficiary=%s">%s</a>',$_REQUEST['page'],'disbursement-update',$program->id,$_REQUEST['beneficiary'] , __('Edit'));
?>   
  &nbsp;|&nbsp;
 
    <?php 
 printf('<a onclick="return confirm(\'هل تريد فعلا حذف البرنامج\')"  href="?page=%s&action=%s&delete=%s&beneficiary=%s">%s</a>',$_REQUEST['page'],'view',$program->id,$_REQUEST['beneficiary'] , __('Delete'));
?>    
    </td>    
  </tr>
  
  <?php } ?>
</table>