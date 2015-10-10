<?php

use app\models\CategoryItem;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="listofGroups">
      	
   	<div class="mainGroups_title"><img id="listimg" src="http://cdn.gollos.com/template/48623/list.png">По виду изделия</div>
		<ul class="groupsUl">  
		<?php
			foreach(CategoryItem::getList() as $cat){
				echo "<li><a  href=\"http://masterilla.com/".$cat['category']."\" title='".$cat['name']."'>".$cat['name']."</a></li>";
			}
		?>		
  		</ul>    
   	
</div>
