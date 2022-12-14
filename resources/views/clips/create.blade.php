@extends('layout')
@section('content')


        <div id="all-output" class="col-md-10 upload">
        	<div id="upload">
                <div class="row">

                    <!-- upload -->
                    <div class="col-md-8">

						<h1 class="page-title"><span>Upload</span> Video</h1>
						<form action="{{route('clips.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        	<div class="row">
                            	<div class="col-md-6">
                                	<label>@lang('clips.name')</label>
                                    <input name="name" type="text" class="form-control"  value="{{old("name")}}"
                                    placeholder="@lang('clips.name')">
                                </div>
                            	<div class="col-md-6">
                                	<label>@lang('clips.length')</label>
                                    <input type="text" name="length" class="form-control" value="{{old("length")}}"
                                     placeholder="@lang('clips.length')">
                                </div>
                            	<div class="col-md-6">
                                	<label>@lang('clips.slug')</label>
                                    <input type="text" name="slug" class="form-control" value="{{old("slug")}}"
                                     placeholder="@lang('clips.slug')">
                                </div>
                            	<div class="col-md-6">
                                	<label>آدرس کلیپ</label>
                                 <input type="file" name="NameFile" class="form-control">
                                </div>
                                <div class="col-md-6">
                                	<label>@lang('clips.thumbnail')</label>
                                    <input type="text" name="thumbnail" class="form-control" value="{{old("thumbnail")}}"
                                    placeholder="@lang('clips.thumbnail')">
                                </div>
                            	<div class="col-md-12">
                                	<label>@lang('clips.discription')</label>
                                    <textarea class="form-control" name="discription" rows="4"  placeholder="@lang('clips.discription')"></textarea>
                                </div>

                            	<div class="col-md-6">
                                    <button type="submit" id="contact_submit" class="btn btn-dm">@lang('clips.save')</button>
                                </div>
                            </div>
                        </form>
                        <x-validation-errors></x-validation-errors>
                    </div><!-- // col-md-8 -->

                    <div class="col-md-4">
                    	<a href="#"><img src="demo_img/upload-adv.png" alt=""></a>
                    </div><!-- // col-md-8 -->
                    <!-- // upload -->
                </div><!-- // row -->
            </div><!-- // upload -->
		</div>
      </div>

      @endsection
