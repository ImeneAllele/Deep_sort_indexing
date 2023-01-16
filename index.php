<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Ajax PHP CRUD System">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

<style type="text/css">
	
	form{
		direction: rtl!important;
	}
</style>

</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Nibras</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
     
	<li class="nav-item">
        <a class="nav-link active" href="../index.php"> تسجيل الخروج  </a>
      </li> 

	<li class="nav-item">
        <a class="nav-link active" href="../ghiyab/index.php"> قائمة الغيابات  </a>
      </li>
     
    

       

       
   <li class="nav-item">
        <a class="nav-link active" href="../dofaa/index.php"> الدفعات و الافواج    </a>
      </li>
       
  <li class="nav-item">
        <a class="nav-link active" href="../coran/index.php">متابعة حفظ القرآن   </a>
      </li>

     
       <li class="nav-item">
        <a class="nav-link active" href="../jazaria/index.php"> متابعة حفظ الجزرية   </a>
      </li>

     
        <li class="nav-item">
        <a class="nav-link active" href="../cours/index.php"> الدروس المقدمة    </a>
      </li>


      <li class="nav-item">
        <a class="nav-link active" href="../annonce/index.php"> الأنشطة والإعلانات     </a>
      </li>
    <li class="nav-item">
        <a class="nav-link active"href="../ens/index.php"> قائمة المعلمين    </a>
      </li>
       <li class="nav-item">
        <a class="nav-link active" href="../etud/index.php"> قائمة الطلاب  </a>
      </li>
    
    </ul>
  </div>
</nav>
<body style="font-family:roboto,sans-serif;">

	<div class="container-fluid py-4" style="background:linear-gradient(to right, rgb(111, 207, 242), rgb(4, 147, 135));">
		
            <h1 class="text-center">  إضافة  درس   جديد </h1>
            <p class="text-center"> املأ الفراغات بالمعلومات الشخصية لكل  درس   </p>
	</div>
	<br>
<div class="container float-left col-md-4">
	<div class="container bg-light py-3" id='regBox'>
	<h2 class='text-center'><h1 class="text-center">  إضافة  درس   جديد </h1>
            <p class="text-center"> املأ الفراغات بالمعلومات الشخصية لكل  درس   </p></h2><br>
				<div id='msgReg'></div>
			<form action="" id='regForm' method="post">
             
 <div class="form-group">
	                                    <select style="color: black" class="form-control"    name="work" id="work">
	                                                  <option value="" disabled>اسم الفوج    </option>


	                                                  <?php

	                                                  $db = new mysqli('localhost', 'root','' ,'nibras');
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}  
	mysqli_set_charset($db, "utf8");
	$query = $db->query("SELECT * FROM afwaj");

	$rowCount = $query->num_rows;
	                                                  if($rowCount > 0){
	                                                      while($row = $query->fetch_assoc()){ 

	$name  = $row['work'];
	$id  = $row['id'];
	                                                          echo '<option value="'.$name.'">'.$name.'</option>';
	                                                      }
	                                                  }else{
	                                                      echo '<option value="">..</option>';
	                                                  }
	                                                  ?>
	                                      </select>
	                                </div>
			
									
 <div class="form-group">
	                                    <select style="color: black" class="form-control"    name="email" id="email">
	                                                  <option value="" disabled>اسم الاستاذ(ة)    </option>


	                                                  <?php

	                                                  $db = new mysqli('localhost', 'root','' ,'nibras');
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}  
	mysqli_set_charset($db, "utf8");
	$query = $db->query("SELECT * FROM users1");

	$rowCount = $query->num_rows;
	                                                  if($rowCount > 0){
	                                                      while($row = $query->fetch_assoc()){ 

	$name  = $row['first'] . ' ' .$row['last'];
	
	                                                          echo '<option value="'.$name.'">'.$name.'</option>';
	                                                      }
	                                                  }else{
	                                                      echo '<option value="">..</option>';
	                                                  }
	                                                  ?>
	                                      </select>
	                                </div>
			

											
 <div class="form-group">
	                                    <select style="color: black" class="form-control"    name="a0" id="a0">
	                                                  <option value="0"> اسم الاستاذ(ة) المعوض ان وجد    </option>
													  
					 <option value="0">  ...  </option>


	                                                  <?php

	                                                  $db = new mysqli('localhost', 'root','' ,'nibras');
	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}  
	mysqli_set_charset($db, "utf8");
	$query = $db->query("SELECT * FROM users1");

	$rowCount = $query->num_rows;
	                                                  if($rowCount > 0){
	                                                      while($row = $query->fetch_assoc()){ 

	$name  = $row['first'] . ' ' .$row['last'];
	
	                                                          echo '<option value="'.$name.'">'.$name.'</option>';
	                                                      }
	                                                  }else{
	                                                      echo '<option value="">..</option>';
	                                                  }
	                                                  ?>
	                                      </select>
	                                </div>
			
				<div class="form-group">
					<input type="text" id="first" name="first"  placeholder="الدرس"   class='form-control' required>
				</div>
				<div class="form-group">
					<input type="text" id="last" name="last" placeholder="التاريخ"  placeholder="اللقب" class='form-control' required>
				</div>
			


				<input type="submit" id="btnPost" value="حفظ البيانات" class='btn btn-info'>
			</form>
			<br>
	</div>
</div>
<div class="container col-sm-8 float-right">
		<div class="container">
			<h4 class='text-center'>سجلات قاعدة البيانات</h4><br>
			<input type="text" id="q" name='q' placeholder="بحث..." class='form-control col-sm-5 mx-auto' autocomplete='off' >
			<br>
			<div id="msg" class='mx-auto'></div>
		</div>
		<div id="table" class='text-center mx-auto'></div>
</div>
</body>
<script src="../jquery.min.js"></script>
<script src="js/main.js"></script>
</html>