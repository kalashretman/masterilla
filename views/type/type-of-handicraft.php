<?php

use app\models\CategoryHandicraft;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="listofGroups">
    <div class="mainGroups_title"><img id="listimg" src="http://cdn.gollos.com/template/48623/list.png">По виду рукоделия</div>
	<ul class="groupsUl">  	
		<?php
			$category = CategoryHandicraft::getList();

			foreach($category as $cat){
				echo "<li>";
				echo "<a  href=\"http://masterilla.com/".$cat['category']."\" title='".$cat['name']."'>".$cat['name']."</a> ";              
				echo "</li>";
			}
		?>
  	</ul> 
</div>
   	



