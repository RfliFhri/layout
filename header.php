<div class="topnav" id="myTopnav">
  <a href="./" class="<?php echo ($page == 'home') ? 'active' : '' ; ?>">Home</a>
  <a href="sorting.php" class="<?php echo ($page == 'sorting') ? 'active' : '' ; ?>">Sorting</a>
  <a href="input.php" class="<?php echo ($page == 'input') ? 'active' : '' ; ?>">Input</a>
  <a href="tampil.php" class="<?php echo ($page == 'tampil') ? 'active' : '' ; ?>">Tampil</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="input.php" class="<?php echo ($page == 'input') ? 'active' : '' ; ?>">Input</a>
      <a href="tampil.php" class="<?php echo ($page == 'tampil') ? 'active' : '' ; ?>">Tampil</a>
    </div>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>