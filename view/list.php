<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="?action=add">Add</a>
        <table cellpadding="10" style="background: #ccc">
            <tr>
				<td>
					Word Name
				</td>
				<td>
					Status
				</td>
				<td>
					Start Date
				</td>
				<td>
					End Date
				</td>
				<td>
				Sửa/Xóa
				</td>
			</tr>
				<?php foreach($sps as $sp) { ?>
            <tr>
			<td>
				<?php echo $sp['name'] ?>
            </td>
			<td>
				<?php echo $sp['status'] ?>
            </td>
			<td>
				<?php echo $sp['startDate'] ?>
            </td>
			<td>
				<?php echo $sp['endDate'] ?>
            </td>
			<td><a href="index.php?action=edit&id=<?php echo $sp['id'] ?>">Edit</a>
            /<a href="index.php?action=delete&id=<?php echo $sp['id'] ?>">Delete</a></td></tr>
            <?php } ?>
            
        </table>
    </body>
</html>