<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
<body >
		<h2 align="center">To Do List</h2>
		<div>
			<center>
				<form method="POST" action="add_query.php">
					<input type="text" name="task" required/>
					<button class="add_btn" name="add">Add Task</button>
				</form>
			</center>
		</div>
		
		<form>
			<table>
			<thead>
				<tr>
					<th>#</th>
					<th>Task</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'conn.php';
					$query = $conn->query("SELECT * FROM `task` ORDER BY `task_id` ASC");
					$count = 1;
					while($fetch = $query->fetch_array()){
				?>
				<tr>
					<td><?php echo $count++?></td>
					<td><?php echo $fetch['task']?></td>
					<td colspan="2">
						<center>
							<?php echo $fetch['status']?>
							<?php
								if($fetch['status'] != "Save"){
									echo 
									'<a href="update_task.php?task_id='.$fetch['task_id'].'" class="add_btn">Save</a>';
								}
							?>
							 
						
						</center>
					</td>
					<td><a href="delete.php?task_id=<?php echo $fetch['task_id']?>">delete</a></td>
				</tr>
				
				<?php
					}
				?>
			</tbody>
		</table>
		</form>
		
			<form>
				<div>
			
			<button class="add_btn" name="clear" onclick="document.location='clearall.php'">Clear All</button>

		</div>
			</form>
		
		<br>
	
</body>
</html>