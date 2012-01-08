<html>
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>My Homepage</title>
    <link href="<?=base_url(); ?>css/tabs.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>My Homepage</h1>
<ol id="toc">
    <li><a href="#page-1"><span>Page 1</span></a></li>

    <li><a href="#page-2"><span>Page 2</span></a></li>
    <li><a href="#page-3"><span>Page 3</span></a></li>
</ol>
<div class="content" id="page-1">
    <h2>Page 1</h2>
    <p>Text...</p>
</div>
<div class="content" id="page-2">
    <h2>Page 2</h2>

    <p>Text...</p>
</div>
<div class="content" id="page-3">
    <h2>Page 3</h2>
    <p>Text...</p>
</div>
<script src="<?=base_url(); ?>js/activatables.js" type="text/javascript"></script>
<script type="text/javascript">
activatables('page', ['page-1', 'page-2', 'page-3']);
</script>
</body>

</html>
