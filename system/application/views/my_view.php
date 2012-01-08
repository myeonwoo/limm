Some plain text.

<div>
  You can use HTML.
</div>

<div>
  Display variables passed from a controller: <br />
  <?php echo $message; ?> <br />
  <?php echo $another_message; ?>
</div>

You can even do loops: <br />
<?php for ($i = 0; $i < 3; $i++) {

  echo "Counter shows: $i <br />";

} ?>

Or in alternate syntax: <br />
<?php for ($i = 0; $i < 3; $i++): ?>

  Counter shows: <?php echo $i; ?> <br />

<?php endfor; ?>
