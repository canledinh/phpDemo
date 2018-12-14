<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="POST">
                <table>
                    <tr>
                    <td>Tên sản phẩm</td>
                    <td><input type="text" value="<?php echo $sp['name']?>" name="txtWordName"/></td>
                    <td>
					<!--<input type="text" value="<?php echo $sp['status']?>" name="status"/>-->
					<select name="status">
					  <option value="<?php if ($sp['status']=='planning') { ?>selected='selected'<?php } ?>">Planning</option>
					  <option value="<?php if ($sp['status']=='doing') { ?>selected='selected'<?php } ?>">Doing</option>
					  <option value="<?php if ($sp['status']=='complete') { ?>selected='selected'<?php } ?>">Complete</option>
					</select>
					</td>
                    <td><input type="date" value="<?php echo $sp['startDate']?>" name="startDate"/></td>
                    <td><input type="date" value="<?php echo $sp['endDate']?>" name="endDate"/></td>
                    </tr>
                <tr>
                <td></td><td><input type="submit" name="action" value="edit"></td>
                </tr>
                </table>
        </form>
    </body>
</html>