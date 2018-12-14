<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="POST">
        <table>
            <tr><td>Word Name</td><td><input type="text" name="txtWordName"/></td></tr>
            <tr><td>Status</td><td>
				<select name="status">
				  <option value="planning">Planning</option>
				  <option value="doing">Doing</option>
				  <option value="complete">Complete</option>
				</select>
			</td></tr>
            <tr><td>Start Date</td><td><input type="date" name="startDate"/></td></tr>
            <tr><td>End Date</td><td><input type="date" name="endDate"/></td></tr>
            <tr><td></td><td><input type="submit" name="action" value="them"></td></tr>
        </table>
        </form>
    </body>
</html>