<div class="col-sm-1 col-md-1 sidebar">
  <ul class="nav nav-sidebar">
    <li class="<?php if(isset($_GET['page']) && $_GET['page']=='home'){ echo 'active'; } ?>" ><a href="index.php?page=home">استخدام</a></li>
    <li class="<?php if(isset($_GET['page']) && $_GET['page']=='peygiri'){ echo 'active'; } ?>" ><a href="index.php?page=peygiri">پیگیری</a></li>
    <li class="<?php if(isset($_GET['page']) && $_GET['page']=='sms'){ echo 'active'; } ?>" ><a href="index.php?page=sms">اس ام اس</a></li>
    <li class="<?php if(isset($_GET['page']) && $_GET['page']=='project'){ echo 'active'; } ?>" ><a href="index.php?page=project">پروژه جدید</a></li>
    <li class="<?php if(isset($_GET['page']) && $_GET['page']=='edit'){ echo 'active'; } ?>" ><a href="index.php?page=edit">ویرایش پروژه</a></li>
    <li class="<?php if(isset($_GET['page']) && $_GET['page']=='order'){ echo 'active'; } ?>" ><a href="index.php?page=order">سفارش ها</a></li>
  </ul>
</div>