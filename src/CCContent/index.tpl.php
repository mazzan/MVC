<h1>Content</h1>
<p>Create, edit and view content.</p>


<h2>All content</h2>
<?php if($contents != null):?>
  <ul>
  <?php foreach($contents as $val):?>
    <li><?=$val['id']?>, <?=esc($val['title'])?> by <?=$val['owner']?> <?php if($user['hasRoleUser']): ?><a href='<?=create_url("content/edit/{$val['id']}")?>'>edit</a> <?php endif;?><a href='<?=create_url("page/view/{$val['id']}")?>'>view</a>
  <?php endforeach; ?>
  </ul>
  
<?php else:?>
  <p>No content exists.</p>
<?php endif;?>

<h2>Actions</h2>
<ul>
<li><a href='<?=create_url('blog')?>'>View as blog</a>
 <?php if($user['hasRoleUser']): ?>
  <li><a href='<?=create_url('content/create')?>'>Create new content</a>
<?php else:?>
<p><h4 class = 'info'>You have to log in to create and edit content. </h4></p> 
<?php endif;?>
</ul>
