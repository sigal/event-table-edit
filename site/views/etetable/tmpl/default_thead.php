<?php
/**
 * @version		$Id: $
 * @package		eventtableedit
 * @copyright	Copyright (C) 2007 - 2017 Manuel Kaspar and Matthias Gruhn
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

/**
 * Optional first row
 */
if ($this->item->show_first_row) :?>
	<th class="etetable-first_row tablesaw-priority-50">#</th>
<?php endif; ?>

<?php
/**
 * The table heads
 */
$thcount = 0;
$listOrder	= $this->state->get('list.ordering');
$listDirn	= $this->state->get('list.direction');

$cont = round((count($this->heads)+ $this->item->show_first_row)/6);
//$cont = 1;

$j=0;
foreach ($this->heads as $head) { 
	/*if($head->head == 'link' || $head->head == 'mail'){
		$priority = "persist";
		$classofdynamic = "";
	}else */
	if($thcount == 0){
		$priority = "persist";
		$classofdynamic = "";
	}else{
		$priority = $thcount;
		$classofdynamic = 'tablesaw-priority-'.$priority;
	}
		
			if($classofdynamic==""){
				$myclass =  $thcount;
			}else{
				$myclass = $thcount.' '.$classofdynamic;
				}
?>
	<th class="evth<?php echo $myclass; ?>"  data-tablesaw-sortable-col="" data-tablesaw-priority="<?php echo $priority; ?>" scope="col"><?php 	echo trim($head->name);?></th>
	<?php
	
	if($j%$cont == 0){
	$thcount++;
	}
$j++;
}	
?>
