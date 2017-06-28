
<aside class="main-sidebar" style="position: fixed;top:0;left:0;">
<section  class="sidebar">
	<ul class="sidebar-menu">
	  <li class="header">sacon帅康后台管理系统</li>
	  <li class="treeview">
		<a href="../index.php">
		  <i class="fa fa-dashboard"></i> <span>首页</span> 
		</a>
		
	  </li>
	  <li class="treeview">
		<a href="../show.php">
		  <i class="fa fa-files-o"></i>
		  <span>帅康产品查询</span>
		</a>
	  </li>
	  <li class="treeview">
		<a href="../showwd.php">
		  <i class="fa fa-book"></i>
		  <span>帅康网点查询</span>
		</a>
	  </li>
	  <li>
		<a href="../duanyu.php">
		  <i class="fa fa-th"></i> <span>帅康快捷短语</span>
		</a>
	  </li>
	  <li class="treeview">
		<a href="../salary.php">
		  <i class="fa fa-pie-chart"></i>
		  <span>帅康售价查询</span>
		</a>
	  </li>
	  <li class="treeview">
		<a href="../liuyan.php">
		  <i class="fa fa-laptop"></i>
		  <span>留言</span>
		</a>
	  </li>


       <!-- 管理员开始 -->
	  <?php   
  if( $_SESSION['username']=="admin"){
   
echo '<li class="treeview">
		<a href="#">
		  <i class="fa fa-edit"></i> <span>后台管理</span>
		  <i class="fa fa-angle-left pull-right"></i>
		</a>
		<ul class="treeview-menu">
		  <li><a href="#"><i class="fa fa-circle-o"></i> 产品信息管理</a></li>
		  <li><a href="#"><i class="fa fa-circle-o"></i> 售后网点管理</a></li>
		  <li><a href="#"><i class="fa fa-circle-o"></i> 快捷短语管理</a></li>
		  <li><a href="adsalary.php"><i class="fa fa-circle-o"></i> 帅康售价管理</a></li>
		  <li><a href="adliuyan.php"><i class="fa fa-circle-o"></i> 留言管理</a></li>
		  <li><a href="user.php"><i class="fa fa-circle-o"></i> 用户管理</a></li>
		</ul>
	  </li>';

  }

     ?>

	 <!--  管理员结束 -->





	  <li class="header">个人设置</li>
	  <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>个人资料</span></a></li>
	  <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>密码修改</span></a></li>
	  <li><a href="../logout.php"><i class="fa fa-circle-o text-aqua"></i> <span>退出登录</span></a></li>
	</ul>
  </section>
 </aside>
<script src="../js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="../dist/sidebar-menu.js"></script>
<script>
$.sidebarMenu($('.sidebar-menu'))
</script>