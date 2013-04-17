<?php $url = "http://ckidki.by/actions/{$item['city_url']}/{$item['id']}"; ?>
<tr>
	<td width="681" height="9" valign="top" colspan="4"><img src="http://ckidki.by/assets/newsfeed/dbox-t.jpg" width="681" height="12" border="0"></td>
</tr>
<tr>
	<td>
		<table cellspacing="0"width="681" cellpadding="0">
			<tr>
				<td>
					<table cellspacing="0"width="681" cellpadding="0">
						<tr>
							<td valign="top" width="3" bgcolor="d3f5ff"></td>
							<td valign="top" width="133" bgcolor="ffffff"><img src="http://ckidki.by/assets/newsfeed/newdisc.jpg" width="133" height="72" /></td>
							<td valign="top" width="545" bgcolor="ffffff">
								<a href="<?=$url?>"><font face="Tahoma, Arial, Helvetica, sans-serif" size="2" color="#000000" style="font-size: 18px; line-height:22px; text-decoration:underline; font-weight:bold;"><?=$item['title']?></font></a>
							</td>
							<td valign="top" width="3" bgcolor="d3f5ff"></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<table cellspacing="0"width="681" bordercolordark="white" bordercolorlight="black" cellpadding="0">
						<tr>
							<td valign="top" width="3" bgcolor="d3f5ff" rowspan="2"></td>
							<td valign="top" width="14" bgcolor="ffffff" rowspan="2">&nbsp;</td>
							<td width="401" valign="top" bgcolor="white"><a href="<?=$url?>"><img src="http://ckidki.by/upload/images/<?=Arr::get($item['images'], 0)?>" width="401" height="196" /></a></td>
							<td valign="top" width="33" bgcolor="ffffff" rowspan="2">&nbsp;</td>
							<td valign="top" width="227" bgcolor="ffffff" rowspan="2">
								<table width="227" cellpadding="0" cellspacing="0">
									<tr>
										<td width="227" style="padding: 0 0 20px;"><font face="Tahoma, Arial, Helvetica, sans-serif" style="font-size:14px; line-height:18px;">Цена купона: <b><font color="ff0000" style="font-size:18px;"><?=number_format($item['coupon_price'], 0, '', ' ')?></font></b> руб.</font></td>
									</tr>
										<tr>
											<td width="227" style="padding: 0 0 20px;"><font face="Tahoma, Arial, Helvetica, sans-serif" style="font-size:14px; line-height:18px;">Скидка: &nbsp;<b><font color="ff0000" style="font-size:18px;"><?=$item['discount']?>%</font></b></font></td>
										</tr>
										<tr>
											<td width="227" style="padding: 0 0 20px;"><font face="Tahoma, Arial, Helvetica, sans-serif" style="font-size:14px; line-height:18px;">Экономия: <b><font style="font-size:18px;"><?=$item['full_price']?></font></b> руб.</font></td>
										</tr>
										<tr>
											<td width="227" style="padding: 0 0 20px;">
												<font face="Tahoma, Arial, Helvetica, sans-serif" style="font-size:14px; line-height:18px;"><b><?=$item['seller_title']?></b><br><?=$item['phone']?></font></td>
										</tr>
										<tr>
											<td width="227"><a href="<?=$url?>"><img src="http://ckidki.by/assets/newsfeed/button1.jpg" width="190" height="55"  border="0"></a></td>
										</tr>
								</table>
							</td>
							<td valign="top" width="3" bgcolor="d3f5ff" rowspan="2"></td>
						</tr>
						<tr>
							<td width="391" valign="top" bgcolor="#fde05f" style="padding:10px 2px 10px 8px; font-size:12px; line-height:14px;">
								<font face="Tahoma, Arial, Helvetica, sans-serif">Время проведения акции: <b>с <?=date('d.m', $item['start_timestamp'])?> по <?=date('d.m.o', $item['end_timestamp'])?> г.</b></font>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
<td width="683" height="9" valign="top" colspan="4"><img src="http://ckidki.by/assets/newsfeed/dbox-b.jpg" width="681" height="21" border="0"></td>
</tr>