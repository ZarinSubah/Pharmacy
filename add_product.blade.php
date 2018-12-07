@extends('admin_layout')
@section('admin_content')
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Category</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Category</h2>
						
					</div>
					<?php
						$message=Session::get('message');
						if($message)
						{
                           echo $message;
                           Session::put('message');
						}
						?>
					<div class="box-content">
						<form class="form-horizontal" action="{{url('')}}" method="post" enctype="multipart/form-data">  
							{{csrf_field()}}
						  <fieldset>
					
							 
							<div class="control-group">
							  <label class="control-label" for="date01">Product Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_name">
							  </div>
							</div>

					<div class="control-group">								
								<label class="control-label" for="selectError3">Product category</label>
								<div class="controls">
								  <select id="selectError3">
									<option>Option 1</option>
									<option>Option 2</option>
									<option>Option 3</option>						<!--drop down css-->
								  </select>
								</div>
							  </div>
						         
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Product description </label>
							  <div class="controls">
								<textarea class="cleditor" name="product_description" rows="3"></textarea>
							  </div>

							  <div class="control-group">
							  <label class="control-label" for="date01">Product price</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="product_price">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Product image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="product_image" id="fileInput" type="file">
							  </div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add product</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
@endsection()