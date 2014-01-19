


<html>

<head></head>
<body>

<?php if(isset($_POST['done'])): ?>

<table>
<tr>
<td>Row</td></tr></table>

<?php endif; ?>

<form action="" method="post">
<input type="file" name="f1"></input>
<input type="submit" name="done" value="Validate Codes"></input>

<?php if($_POST['done']): ?>
<input type="submit" name="proceed" value="Next">
<?php endif; ?>

</form>

</body>
</html>


