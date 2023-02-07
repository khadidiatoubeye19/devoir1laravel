<!DOCTYPE html>

<br>
<br>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>gestion salle de sport</title>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
<style>

body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}
.modal form label {
	font-weight: normal;
}
</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();

	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;
			});
		} else{
			checkbox.each(function(){
				this.checked = false;
			});
		}
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>

<body>
@if(session('message'))
<div class="alert alert-success"><h1>{{(session('message'))}}</h1></div>
@endif
@if($errors->any())

  <div class="alert alert-danger" role="alert">
      non enregister la date de fin passer!
    </div>

@endif


<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>classe<b>etudiant</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>nouveau abonne</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
					</div>
				</div>
			</div>
			<!-- @php
	 $moyenG=0;
$p=$etudiant[0];
     $moyen=0;
			@endphp -->
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Name</th>
						<th>prenom</th>
						<th>note</th>
						<th>examen</th>
						<th>matiere</th>
                        <th>semestre</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					@foreach ( $etudiant as $m)
                    @php
  $moyenG=($moyen+$m->note+$m->examen)/$nbetudiant
                    @endphp
                                      @php
 $moyen=($m->note+$m->examen)/2
                                                        @endphp
                 <?php

                if($moyen >($p->note+$p->examen)/2){
                    $p = $etd ;
                                    }
                            ?>

						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
                        <td>{{$m->nom}}</td>
						<td>{{$m->prenom}}</td>
						<td>{{$m->note}}</td>
                        <td>{{$m->examen}}</td>
                        @foreach ($matiere as $mat )
                        @if ($mat->id==$m->matiere_id)
                        <td>{{$mat->nom}}</td>
                        @endif
                        @endforeach
                        @foreach ($semestre as $sem )
                        @if ($sem->id==$m->semestre_id)
                        <td>{{$sem->nom}}</td>
                        @endif
                        @endforeach

                     <td>{{$moyen}}</td>


<td>

						<input type="hidden" value="{{$m->id}}" name="id">




							<form action="/supprimer"method="POST">
                        @csrf

                       <input type="hidden" value="{{ $m->id }}" name="idab">
                       <td>
							<button onclick="myFunction()" name="delete"class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
						</td></td>


					 </form>

					</tr>
					@endforeach
				</tbody>

			</table>

			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>

			</div>
		</div>
	</div>
</div>
<h2>la Moyenne General {{$moyen}}</h1>

    <h3>l'etudiant qui est le premier est {{$p->prenom}} {{$p->nom}}</h3>


<!-- Edit Modal HTML -->

<div id="addModal" class="modal fade">
@if($errors->any())

  <div class="alert alert-danger" role="alert">
      non enregister la date de fin passer!
    </div>

@endif
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="classe" method="POST">
			@csrf
			<div class="modal-body">
				<div class="modal-header">
 					<h4 class="modal-title">ajout abonnee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>

                <div class="form-group">
                    <label>nom</label>
                    <input type="text" class="form-control" name="nom" required>
                </div>
                <div class="form-group">
                    <label>prenom</label>
                    <input type="text" class="form-control" name="prenom" required>
                </div>



					<div class="form-group">
						<label>semestre</label>
					<select class="form-select" aria-label="Default select example"  name="semestre" required  class="form-control">
						@foreach($semestre as $t)
				 <option value="{{$t->id}}">{{$t->nom}}</option>
                     @endforeach
				</select>

					</div>

					<div class="form-group">
						<label>matiere</label>

						<select class="form-select" aria-label="Default select example"  name="matiere" required  class="form-control">
						@foreach($matiere as $cli)
				         <option value="{{$cli->id}}">{{$cli->nom}}</option>
				 @endforeach
					</select>
				</div>


					<div class="form-group">
						<label>NOTE1</label>
						<input type="number" class="form-control" name="note" >
					</div>
					<div class="form-group">
						<label>examen</label>
						<input type="number" class="form-control" name="examen" required>
					</div>

				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>



<script>
function myFunction(){
	alert("voullez vous supprimer l'abonne")


}

</script>

</body>
</html>


