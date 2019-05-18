<?php require_once ('../../../private/initialize.php'); ?>
<?php
$pages = [
['id' => '1' , 'position' => '1', 'visible' => '1', 'page_name' => 'About'],
['id' => '2' , 'position' => '1', 'visible' => '1', 'page_name' => 'Consumer'],
['id' => '3' , 'position' => '1', 'visible' => '1', 'page_name' => 'Small Business'],
['id' => '4' , 'position' => '1', 'visible' => '1', 'page_name' => 'Commercial'],
];
?>

<?php $page_title = 'Pages'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<div id="content">
  <div class="subjects listing">
<h1>Pages</h1>
<table class="list">
  <tr>
    <th>ID</th>
    <th>Page</th>
    <th>Position</th>
    <th>Visible</th>
    <th>&nbsp;</th>
      <th>&nbsp;</th>
        <th>&nbsp;</th>

  </tr>
  <?php foreach($pages as $page) { ?>
    <tr>
      <td><?php echo h($page['id']); ?></td>
      <td><?php echo h($page['page_name']); ?></td>
        <td><?php echo h($page['position']); ?></td>
          <td><?php echo $page['visible']; ?></td>
      <td> <a class="action" href="<?php echo url_for('/staff/pages/show.php?id=' . h(u($page['id']))); ?>">Visit</a>
        <td><a class="action" href="">Edit</a></td>
        <td><a class="action" href="">Delete</a></td>
    </tr>
  <?php } ?>

</table>
</div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>



  }
