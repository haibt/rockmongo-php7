<script type="text/javascript">
var showMore = <?php echo $moreOptions; ?>;

$(function () {
	showMore = !showMore;
	r_show_more_options($("#more_options_btn")[0]);

	//go to top window
	if (window.self != window.top) {
		if (window.parent.location.toString().match(/\?action=admin/)) {
			window.parent.location.reload();
		}
	}
});

function r_show_more_options(btn) {
	if (!showMore) {
		$("#more_options").show();
		$(btn).html("Less &raquo;");
		showMore = 1;
		$("#show_more_options").val(1);
	}
	else {
		$("#more_options").hide();	
		$(btn).html("More &raquo;");
		showMore = 0;
		$("#show_more_options").val(0);
	}
	return false;
}
</script>

<div style="padding:10px;margin:100px auto;width:300px;border:1px #ccc solid;text-align:center;">
<?php if (isset($message)):?><p class="error"><?php h($message); ?></p><?php endif;?>
<img src="themes/default/images/logo.png" style="width:200px;margin:auto;">
	<form method="post">
	<input type="hidden" name="more" id="show_more_options" value="<?php echo $moreOptions; ?>"/>
	<table>
		<tr>
			<td colspan="2" style="background:#eee"><strong>Log-in:</strong></td>
		</tr>
		<tr>
			<td width="100">Host</td>
			<td><?php render_select_hosts("host", $hostIndex); ?></td>
		</tr>
		<tr>
			<td nowrap><?php hm("username"); ?>:</td>
			<td><input type="text" name="username" value="<?php echo $username;?>" style="width:150px"/></td>
		</tr>
		<tr>
			<td><?php hm("password"); ?>:</td>
			<td><input type="password" name="password" style="width:150px"/></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="<?php hm("loginandrock"); ?>"/></td>
		</tr>
	</table>
	</form>
	
<div style="width:100%;text-align:center;padding-top:20px;"><?php hm("rockmongocredits") ?></div>
</div>