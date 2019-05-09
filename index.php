<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head>
<title>Random text script useage example</title>
<style type="text/css">
body, td, p, input {
        color : #000000;
        font-family : Verdana, Geneva, Arial, Helvetica, sans-serif;
        font-size : 12px;
}
</style>
</head>

<body>

<p><b>Random text script usage example</b><br />
For further information on how to use the Random Text PHP script see <a href="readme.html">Readme file</a></p>

<ol>

<li>
<p>Random quote using Javascript:<br />
<script type="text/javascript" src="random.php?type=1"></script></p>
</li>

<li>
<p>Random quote as a PHP include:<br />
<?php $_GET['type'] = 0; include 'random.php'; ?></p>
</li>


</ol>

<p>&nbsp;</p>

</body>

</html>
