@php
session_start();
$tasks=['walk the dog' , 'study for your exams'];
@endphp
<x-layout> 
	<div id="mainAlert" class="hide">
	</div>
</div>

	<div class="container">
		<h1 class="text-center text-capitalize text-primary">my tasks</h1>
		<div class="row">			
			<div  class="col-sm-6 form mt-5">
				<form id='add-task' action="./post/"  method="POST">
					<input type="text"  class="form-control" name="task"  placeholder="add a task" >
					<button class="btn btn-primary my-3" type="submit" name='add-task' >add task</button>
				</form>
			</div>			
			<div class="tasks col-sm-6 mt-5 text-primary">
				<h1>	hello 2</h1>
				<div class="tasks-list__display">
					@foreach($tasks as $task)
						<li class="lisst-task">{{$task}} <span><i class='fa-circle-thin'></i> <i></span>span></li>
					@endforeach	
				</div>
			</div>
		</div>	




</x-layout>