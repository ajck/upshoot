@extends('layout')

@section('content')
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#owners" aria-controls="owners" role="tab" data-toggle="tab">Owners</a></li>
				<li role="presentation"><a href="#motorbikes" aria-controls="profile" role="tab" data-toggle="tab">Motorbikes</a></li>
				<li role="presentation"><a href="#closest" aria-controls="closest" role="tab" data-toggle="tab">Closest Owner</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="owners">
					<form class="form-horizontal">
						{!! csrf_field() !!}
						<div class="form-group">
							<label for="name" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="name">
							</div>
						</div>
						<div class="form-group">
							<label for="motorbike_id" class="col-sm-2 control-label">Motorbike Id</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" id="motorbike_id">
							</div>
						</div>
						<div class="form-group">
							<label for="location" class="col-sm-2 control-label">Location</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="location" placeholder="Latitude,Longitude">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="button" class="btn btn-primary" id="ownersave">Save</button>
							</div>
						</div>
					</form>
					<table class="table table-bordered" id="owners_table">
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Motorbike Id</th> 
							<th>Location</th>
						</tr>
						<!-- Table data for new owners injected here by JS using AJAX data  -->
					</table>
				</div>
				<div role="tabpanel" class="tab-pane" id="motorbikes">
					<form class="form-horizontal">
						<div class="form-group">
							<label for="brand" class="col-sm-2 control-label">Brand</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="brand">
							</div>
						</div>
						<div class="form-group">
							<label for="colour" class="col-sm-2 control-label">Colour</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="colour">
							</div>
						</div>
						<div class="form-group">
							<label for="model_year" class="col-sm-2 control-label">Model Year</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" id="model_year">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="button" class="btn btn-primary" id="motorbikesave">Save</button>
							</div>
						</div>
					</form>
					<table class="table table-bordered" id="motorbikes_table">
						<tr>
							<th>Id</th>
							<th>Brand</th>
							<th>Colour</th> 
							<th>Model Year</th>
						</tr>
						<!-- Table data for new motorbikes injected here by JS using AJAX data  -->
					</table>
				</div>
				<div role="tabpanel" class="tab-pane" id="closest">
					<button type="button" class="btn btn-primary" id="closestbtn">Find closest owner</button>
					<table class="table table-bordered" id="closest_table">
						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>Motorbike Id</th> 
							<th>Location</th>
						</tr>
						<!-- Table data for closest owner injected here by JS using AJAX data  -->
					</table>
				</div>
			</div>
@endsection