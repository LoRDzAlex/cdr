<ul class="pagination pagination-sm">
	<li class="<?php echo ($startPage == 1) ? 'disabled' : ''?>"><a vm-pjax href="<?php echo ($startPage != 1) ? '?display=dashboard&amp;mod=cdr&amp;sub='.$_REQUEST['sub'].'&amp;view=history&amp;order='.$order.'&amp;orderby='.$orderby.'&amp;page='.($startPage - 1) : '#' ?>">&laquo;</a></li>
	<?php for($i=$startPage;$i<=$endPage;$i++) {?>
		<li class="<?php echo ($activePage == $i) ? 'active' : ''?>"><a vm-pjax href="?display=dashboard&amp;mod=cdr&amp;sub=<?php echo $_REQUEST['sub']?>&amp;view=history&amp;order=<?php echo $order?>&amp;orderby=<?php echo $orderby?>&amp;page=<?php echo $i?>"><?php echo $i?> <?php echo ($activePage == $i) ? '<span class="sr-only">(current)</span>' : ''?></a></li>
	<?php } ?>
	<li class="<?php echo ($endPage == $totalPages) ? 'disabled' : ''?>"><a vm-pjax href="<?php echo ($endPage != $totalPages) ? '?display=dashboard&amp;mod=cdr&amp;sub='.$_REQUEST['sub'].'&amp;view=history&amp;;order='.$order.'&amp;orderby='.$orderby.'&amp;page='.($endPage + 1) : '#' ?>">&raquo;</a></li>
</ul>
