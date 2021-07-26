@extends('layouts.app')

@section('content')
<!-- Content Wrapper. Contains pmassege_positive content -->
    <div class="content-wrapper">
      <!-- Content Header (Pmassege_positive header) -->
      <div class="content-header">
      </div>
    
      <!-- /.content-header -->
      <div class="container">
          <form method="post" enctype="multipart/form-data" action="{{ url('staff/update/'.$id)}}"> 
                 @csrf
                 @method('post')

                 <div class="row">
                     <label class="col-sm-2 col-form-label">{{ __('First Name') }}</label>
                     <div class="col-sm-7">
                         <div class="form-group{{ $errors->has('first_name') ? ' has-danger' : '' }}">
                             <input class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" id="input-first_name" type="text" placeholder="{{ __('first_name') }}"
                                            value="{{ $staff->first_name }}" required="true" aria-required="true" />
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <label class="col-sm-2 col-form-label">{{ __('Last Name') }}</label>
                     <div class="col-sm-7">
                         <div class="form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                             <input class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" id="input-last_name" type="text" placeholder="{{ __('last_name') }}"
                                            value="{{ $staff->last_name }}" required="true" aria-required="true" />
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <label class="col-sm-2 col-form-label">{{ __('School') }}</label>
                     <div class="col-sm-7">
                         <div class="form-group{{ $errors->has('school') ? ' has-danger' : '' }}">
                             <select class="form-control" name="school">
                                @foreach (App\School::where('id', '=', $staff->school_id)->get() as $school)                
                                <option value="{{ $school->id }}">{{ $school->name }}</option>
                                @endforeach 

                                @foreach (App\School::where('id', '!=', $staff->school_id)->get() as $school)                
                                <option value="{{ $school->id }}">{{ $school->name }}</option>
                                @endforeach    
                            </select>
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                     <div class="col-sm-7">
                         <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                             <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="text" placeholder="{{ __('email') }}"
                                            value="{{ $staff->email }}" required="true" aria-required="true" />
                         </div>
                     </div>
                 </div>

                 <div class="row">
                     <label class="col-sm-2 col-form-label">{{ __('Phone') }}</label>
                     <div class="col-sm-7">
                         <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                             <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="input-phone" type="text" placeholder="{{ __('phone') }}"
                                            value="{{ $staff->phone }}" required="true" aria-required="true" />
                         </div>
                     </div>
                 </div>
                     
                 <button type="submit" class="btn btn-outline-secondary pull-right">{{ _('Update staff') }}</button>
                     <div class="clearfix"></div>              
         </form>
     </div>
    </div>
@endsection