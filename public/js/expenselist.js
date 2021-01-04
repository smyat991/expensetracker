<!DOCTYPE html>
<html>
<head>
	<title>Expense list</title>
	<script type="text/javascript" src="jquery.min.js"></script>

	<script>
		$(document).ready(function(){
			showdata();
			/*$('#divedit').hide();*/


			$('#btnsubmit').click(function(){  //function call ko button click function htl mr bl htae ya ml
				var amount = $('#amount').val();
				var note = $('#note').val();
				/*var gender = $('input[name="gender"]:checked').val();*/

				var expense = {
					amount:amount,
					note:note
					/*gender:gender*/
				}
				console.log(expense);

				var expenselist = localStorage.getItem('expense');
				var expenseArray;
				if(expenselist == null) {
					expenseArray=[];
				}
				else {
					var expenseArray = JSON.parse(expenselist);
				}
				expenseArray.push(expense);

				var stringExpense = JSON.stringify(expenseArray);
				localStorage.setItem('expense', stringExpense); 
				showdata();
				})

				function showdata() {
					var expenselist = localStorage.getItem('expense');
					if(expenselist){
						var expenseArray = JSON.parse(expenselist);

						var html="";
						expenseArray.forEach( function(v, i) {
							html+=`<tr>
							<td>${v.amount}</td>
							<td>${v.note}</td>
						
							<td><button class="btnedit" data-id='${i}'>Edit</button>
							<button class="btndelete" data-id='${i}'>Delete</button></td>
							</tr>`
						})

						$('#mytbody').html(html);
					}
				}


				/*$("#mytbody").on('click','.btnedit',function(){
				$("#divregister").hide();
				$("#divedit").show();
				
				var id=$(this).data('id');  //carry array of index with button click
				var studentlist=localStorage.getItem("university");
				if(studentlist){
					var studentArray=JSON.parse(studentlist);
					var mystudent=studentArray[id];  
					console.log(mystudent);  //object
					var myname=mystudent.name;
					var myage=mystudent.age;
					var myaddress=mystudent.address;
					var gender=mystudent.gender;
					$("#myid").val(id);  //add data to the input of edit form
					$("#ename").val(myname);
					$("#eage").val(myage);
					$("#eaddress").val(myaddress);
					if(gender=="male"){
						$("#emale").prop("checked","checked");
					}else{
						$("#efemale").prop("checked","checked");
					}
				}*/
				//console.log(id);
			})


		/*	$('#btnupdate').click(function(){
				var id=$('#myid').val();
				var name=$('#ename').val();
				var age=$('#eage').val();
				var address=$('#eaddress').val();
				var gender=$("input[name='gender']:checked").val();
				var university ={
					id:id,
					name:name,
					age:age,
					address:address,
					gender:gender
				}

				var studentlist=localStorage.getItem("university");
				if(studentlist){
					var studentArray=JSON.parse(studentlist);
					console.log(studentArray);
					studentArray[id]=university;  //edit click lite tat index htae ko bl edit lote lite tat data try htae
					var stringStudent=JSON.stringify(studentArray);
					localStorage.setItem("university", stringStudent);
					showdata(); //update lote tine data tway twr pyin
				}

			})
*/
			
		})
	</script>
</head>
<body>

	<!-- <div id="divregister">
		<h1>Register Form</h1>
		Name:<input type="text" name="" id="name"><br>
		Age:<input type="text" name="" id="age"><br>
		Address:<input type="text" name="" id="address"><br>
		Gender:<br>
		Male:<input type="radio" name="gender" value="male">
		Female:<input type="radio" name="gender" value="female"><br>
		<button id="btnregister">Register</button>
	</div>

	<div id="divedit">
		<h1>Edit Form</h1>
		<input type="hidden" name="" id="myid">
		Name:<input type="text" name="" id="ename"><br>
		Age:<input type="text" name="" id="eage"><br>
		Address:<input type="text" name="" id="eaddress"><br>
		Gender:<br>
		Male:<input type="radio" name="gender" value="male" id="emale">
		Female:<input type="radio" name="gender" value="female" id="efemale"><br>
		<button id="btnupdate">Update</button>
	</div> -->

	

	<!-- <div>
	<h3>Student Table</h3>
	<table border="1" cellpadding="5">
		<thead>
			<tr>
				<th>Name</th>
				<th>Age</th>
				<th>Address</th>
				<th>Gender</th>
				<th>Action</th>
			</tr>
			
		</thead>
		<tbody id="mytbody">
			
		</tbody>
	</table>
	</div> -->

	<div>
	<h3>Expense List</h3>
	<table border="1" cellpadding="5">
		<thead>
			<tr>
				<th>Category</th>
				<th>Amount</th>
				<th>Note</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody id="mytbody">
			
		</tbody>
	</table>
	</div> 

</body>
</html>