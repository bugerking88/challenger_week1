
<html>
	<?php ?>
	<head>
		<meta charset="utf-8">
		<link href="/book_active/css/form.css" rel="stylesheet">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script>
		function add_new_data() {
		 //先取得目前的row數
		 var num = document.getElementById("mytable").rows.length;
		 //建立新的tr 因為是從0開始算 所以目前的row數剛好為目前要增加的第幾個tr
		 var Tr = document.getElementById("mytable").insertRow(num);
		 //建立新的td 而Tr.cells.length就是這個tr目前的td數
		 Td = Tr.insertCell(Tr.cells.length);
		 //而這個就是要填入td中的innerHTML
		 Td.innerHTML='<input name="employee_id[]" type="text" size="12">';
		 //這裡也可以用不同的變數來辨別不同的td (我是用同一個比較省事XD)
		 //這樣就好囉 記得td數目要一樣 不然會亂掉~
		}
		function remove_data() {
		 //先取得目前的row數
		 var num = document.getElementById("mytable").rows.length;
		 //防止把標題跟原本的第一個刪除XD
		  //刪除最後一個
		  if(num>1)
		  document.getElementById("mytable").deleteRow(-1);
		}
		</script>
	</head>
	<body>
 <ul>
  <li><a class="active" href="/book_active/back/back_page">後台</a></li>
  <li><a class="bg-danger" href="/book_active/font/font_page">前台</a></li>
</ul>
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">活動報名後台</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form name="form" method="post" action="/book_active/back/createActive">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="act_name" id="act_name" class="form-control input-sm" placeholder="活動名稱">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="max_per" id="max_per" class="form-control input-sm" placeholder="人數限制">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label>可否攜伴</label>
			    						<input type="checkbox" name="checkbox" id="check_part" class="form-control input-sm">
			    					</div>
			    				</div>
			    			</div>
			    			<div class="form-group">
			    				<label for="bookdate">開始日期：</label>
								<input type="date" name="bookdate_start" id="bookdate_start" placeholder="2014-09-18" min="2016-08-04" max="2017-09-18">
			    			</div>
			    			<div class="form-group">
			    				<label for="bookdate">結束日期：</label>
								<input type="date" name="bookdate_end" id="bookdate_end" placeholder="2014-09-18" min="2016-08-04">
			    			</div>
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<label>可參加員工編號：</label>
			    						<table id="mytable" width="300">
										  <tr>
										    <td>
										    <input name="employee_id[]" type="text" size="12">
										    
										  <td>
											  <input type="button" value="增加" onclick="add_new_data()"> 
											  <input type="button" value="減少" onclick="remove_data()">
										 
										  </tr>
										</table>
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" value="創建活動" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
			    	<div class="container">
						<table class="table">
					      <tr>
					        <th>活動名稱</th>
					        <th>限制人數</th>
					        <th>可否攜伴</th>
					        <th>開始時間</th>
					        <th>結束時間</th>
					        <th>活動網址</th>
					      </tr>
					      	<?php for($i=0;$i<count($data);$i++){ ?>
					      <tr>
					        <th><?php echo $data[$i]['act_name']?></th>
					        <th><?php echo $data[$i]['max_person']?></th>
					        <th><?php echo $data[$i]['partner']?></th>
					        <th><?php echo $data[$i]['start_time']?></th>
					        <th><?php echo $data[$i]['end_time']?></th>
					        <th><?php echo "<a href='../font/font_page/?id=".$data[$i]['url']."'>".$data[$i]['url']."</a>"?></th>
					      </tr>
					        <?php } ?>

					      </table>
					</div>
    	</div>
    </div>
</body>
</html>