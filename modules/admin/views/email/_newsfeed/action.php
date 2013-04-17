<tr>
	<td width="683" valign="top" colspan="4">
		<table width="673" cellpadding="0" cellspacing="0">
			<tr>
				<?=View::factory('email/_newsfeed/left')->bind('item', $items[0])?>
				<?=View::factory('email/_newsfeed/right')->bind('item', $items[1])?>
			</tr>
		</table>
	</td>
</tr>
<tr><td height="9"></td></tr>