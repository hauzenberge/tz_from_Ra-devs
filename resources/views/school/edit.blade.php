@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains pmassege_positive content -->
    <div class="content-wrapper">
      <!-- Content Header (Pmassege_positive header) -->
      <div class="content-header">
      </div>
    
      <!-- /.content-header -->
      <div class="container">
          <form method="post" enctype="multipart/form-data" action="{{ url('school/update/'.$id)}}"> 
                 @csrf
                 @method('post')
                 <div class="row">
                         <label class="col-sm-2 col-form-label">{{ __('School Image') }}</label>
                         <div class="col-sm-7">
                             <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                 @if($school->logo != null)

                                     <img src="{{asset($school->logo)}}" 
                                        width="150px">
                                     <br>
                                     <a href="{{url('/school/destroy-logo/'.$id)}}"><i class="fa fa-trash" aria-hidden="true"></i> Delete Image</a>
                                     <input name="logo" type="file">
                                         
                                 @else
                                      <input name="logo" type="file">
                                 @endif
                             </div>
                         </div>
                 </div>

                 <div class="row">
                     <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                     <div class="col-sm-7">
                         <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                             <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('name') }}"
                                            value="{{ $school->name }}" required="true" aria-required="true" />
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                     <div class="col-sm-7">
                         <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                             <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="text" placeholder="{{ __('email') }}"
                                            value="{{ $school->email }}" required="true" aria-required="true" />
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <label class="col-sm-2 col-form-label">{{ __('Site') }}</label>
                     <div class="col-sm-7">
                         <div class="form-group{{ $errors->has('website') ? ' has-danger' : '' }}">
                             <input class="form-control{{ $errors->has('website') ? ' is-invalid' : '' }}" name="website" id="input-website" type="text" placeholder="{{ __('website') }}"
                                            value="{{ $school->website }}" required="true" aria-required="true" />
                         </div>
                     </div>
                 </div>
                     
                 <button type="submit" class="btn btn-outline-secondary pull-right">{{ _('Update School') }}</button>
                     <div class="clearfix"></div>              
         </form>
     </div>
    </div>
@endsection