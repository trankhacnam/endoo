@extends('admin.layouts.master')
@section('content')
	<section id="main-content">
		<section class="wrapper">
			<div class="table-agile-info">
			 	<div class="panel panel-default">
			        <div class="panel-heading">
			         Basic table
			        </div>
			        <div>
			            <table class="table table-create-blog" ui-jq="footable" ui-options='{
			                "paging": {
			                    "enabled": true
			                },
			                "filtering": {
			                    "enabled": true
			                },
			                "sorting": {
			                    "enabled": true
			                }}' style="table-layout: fixed;" width="100%">
			                <thead>
			                	<colgroup>
			                		<col span="1" width = "10%">
			                	</colgroup>
			                    <tr>
			                        <th >STT</th>
			                        <th>Danh Mục</th>
			                        <th>Tiêu Đề</th>
			                        <th data-breakpoints="xs">Tóm Tắt</th>
			                     	<th data-breakpoints="xs sm md" data-title="DOB">Hình Ảnh</th>
			                        <th data-breakpoints="xs sm md" data-title="DOB">Hành Động</th>
			                    </tr>
			                </thead>
			                <tbody>
			                	@foreach ($blogs as $key => $blog)
			                		<tr>
				                        <td>{{ $key + 1 }}</td>
				                        <td>{{ $blog->category }}</td>
				                        <td>{{ $blog->title }}</td>
				                        <td>{{ $blog->summary }}</td>
				                        <td> <img src="{{ asset('storage/images') . '/' . $blog->image }}" alt="" style="max-width: 100%;"></td>
				                        <td>
				                        	<ul class="list-inline m-0 ul-create-blog">
				                        		<li class="list-inline-item">
                                                    <button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="modal" data-target="#show-up-modal-{{ $key }}"><i class="fa fa-table"></i> Chi Tiết</button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i> Sửa</button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i> Xóa</button>
                                                </li>
                                            </ul>
				                        </td>
				                    </tr>
			                	@endforeach
			                </tbody>
			            </table>
			            <div>{!! $blogs->links() !!}</div>
			        </div>
			    </div>
			</div>
			@foreach ($blogs as $key => $blog)
		        <div class="modal fade" id="show-up-modal-{{ $key }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		            <div class="modal-dialog modal-md  modal-dialog-centered" role="document" style="width: 1350px !important;">
		                <div class="modal-content rounded-0">
		                    <div class="modal-body py-0">
		                        <div class="d-block main-content">
		                            <img src="{{ asset('storage/images') . '/' . $blog->image }}" alt="Image" class="img-fluid" style="background-color: #b2fcff; max-height: 500px; width: 100%;" >
		                            <div class="content-text p-4">
		                                <h3 class="mb-4">{{ $blog->title }}</h3>
		                                <div class="mb-4 blog-content">{!! $blog->content !!}</div>
		                            </div>
		                            <div class="d-flex">
		                                <div class="ml-auto">
		                                    <a href="#" class="btn btn-primary px-4" data-dismiss="modal" style="margin-bottom: 20px; margin-right: 20px;">Close</a>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
			@endforeach
		</section>
		<!-- footer -->
	    	<div class="footer">
				<div class="wthree-copyright">
			    	<p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
				</div>
	    	</div>
		<!-- / footer -->
	</section>
@endsection

@section('custom-css')
	<link rel="stylesheet" href="{{ asset('css/custom_admin.css') }}">
@endsection