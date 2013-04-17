<?php $url = "http://ckidki.by/actions/{$item['city_url']}/{$item['id']}"; ?>
<td valign="top" width="9"><img src="http://ckidki.by/assets/newsfeed/dbboxes-l.jpg" border="0" width="9" height="315"></td>
<td valign="top" width="7"  bgcolor="fff8cf"></td>
<td valign="top" width="304" bgcolor="fff8cf">
	<div style="position:relative;">
		<table width="304" cellspacing="0" bordercolordark="white" bordercolorlight="black" cellpadding="0">
			<tr>
				<td colspan="2" style="padding:5px 0 5px;">
					<font face="Tahoma, Arial, Helvetica, sans-serif" style="font-size:14px; line-height:16px; font-weight:bold;"><?=$item['title']?></font>
				</td>
			</tr>
			<tr>
				<td valign="top" colspan="2">
					<a href="<?=$url?>"><img src="http://ckidki.by/upload/images/<?=Arr::get($item['images'], 0)?>" width="304" height="145" border="0" style="display:block;"></a>
				</td>
			</tr>
			<tr>
				<td valign="top" width="292" bgcolor="#fde05f" colspan="2" style="padding: 5px 2px 5px 10px;">
					<font face="Tahoma, Arial, Helvetica, sans-serif" style="font-size:12px; line-height:14px;">Время проведения акции: <br><b>с <?=date('d.m', $item['start_timestamp'])?> по <?=date('d.m.o', $item['end_timestamp'])?> г.</b></font>
				</td>
			</tr>
			<tr>
				<td>
					<table cellpadding="0" cellspacing="0">
						<tr>
							<td width="191" style="padding: 7px 0 0;">
								<font  face="Tahoma, Arial, Helvetica, sans-serif" style="font-size:12px; line-height:14px;">Цена купона: <font color="#ff0000" style="font-size:18px; font-weight:bold;"><?=number_format($item['coupon_price'], 0, '', ' ')?></font> руб.</font>
							</td>
							<td style="padding:10px 0 0;" rowspan="2"><a href="<?=$url?>"><img src="http://ckidki.by/assets/newsfeed/button2.jpg" width="113" height="37" border="0"></a></td>
						</tr>
						<tr>
							<td width="191" style="padding: 7px 0 0;">
								<font  face="Tahoma, Arial, Helvetica, sans-serif" style="font-size:12px; line-height:14px;">Скидка: <font color="#ff0000" style="font-size:18px; font-weight:bold;"><?=$item['discount']?>%</font></font>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
</td>