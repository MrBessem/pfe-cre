@extends('layouts.master')

@section('title') Gestion des besoins @endsection
@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset("/bower_components/admin-lte/plugins/datepicker/datepicker3.css") }}" rel="stylesheet" type="text/css" />

@endsection
@section('content')

    @component('common-components.breadcrumb')
         @slot('title') Gestion des besoins  @endslot
         @slot('li_1') Pages  @endslot
     @endcomponent
     
    
     @yield('cont')
     <div class="card">
          <div class="card-body">
<section class="content-header">
     <h1>
     تعديل بيانات الأستاذ     </h1>
     
   </section>

       <section class="content">

      <div class="row">
        <div class="col-md-12">
         <div class="box box-primary">
         <div class="box-header with-border">
              <h3 class="box-title">المعلومات الشخصية</h3>
            </div>
            <!-- form start -->

         

      
  <div class="box-body">



        <div class="col-xs-12">
                <div class="row">
                @foreach($data as $row)
                
  <form method="post" action="{{ route('enseignants.update', $row->id) }}">
   @csrf
   @method('PATCH')
                <div class="form-group{{ $errors->has('unique_id') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="unique_id" class="control-label">المعرف الوحيد</label>
                                <input id="unique_id" type="number" max="9999999999" class="form-control" name="unique_id" value="{{ $row->unique_id }}" autofocus>
                                @if ($errors->has('unique_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('unique_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">


                        <div class="form-group{{ $errors->has('sec_s') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="sec_s" class="control-label">رقم الضمان الاجتماعي</label>
                                <input id="sec_s" type="number" class="form-control" name="sec_s" value="{{ $row->sec_s }}" autofocus>
                                @if ($errors->has('sec_s'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sec_s') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="nom" class="control-label">اللقب</label>
                                <input id="nom" type="text" class="form-control" name="nom" value="{{ $row->nom }}" autofocus>
                                @if ($errors->has('nom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 

                        <div class="form-group{{ $errors->has('prenom_fr') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="prenom_fr" class="control-label">الاسم باللاتينية</label>
                                <input id="prenom_fr" type="text" class="form-control" name="prenom_fr" value="{{ $row->prenom_fr }}"  autofocus>
                                @if ($errors->has('prenom_fr'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom_fr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 

                       

                        <div class="form-group{{ $errors->has('nbr_enf') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="nbr_enf" class="control-label">عدد الاطفال</label>
                                <input id="nbr_enf" type="number" class="form-control" name="nbr_enf" value="{{ $row->nbr_enf }}"  autofocus>
                                @if ($errors->has('nbr_enf'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nbr_enf') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                    </div>
                <div class="col-xs-6">

                        <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="prenom" class="control-label">الاسم</label>
                                <input id="prenom" type="text" class="form-control" name="prenom" value="{{ $row->prenom }}"  autofocus>
                                @if ($errors->has('prenom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 

                        <div class="form-group{{ $errors->has('nom_fr') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="nom_fr" class="control-label">اللقب باللاتينية</label>
                                <input id="nom_fr" type="text" class="form-control" name="nom_fr" value="{{ $row->nom_fr }}"  autofocus>
                                @if ($errors->has('nom_fr'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nom_fr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 

                        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="telephone" class="control-label">رقم الهاتف</label>
                                <input id="telephone" type="number" class="form-control" name="telephone" value="{{ $row->telephone }}"  autofocus>
                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="situation_f" class="control-label">الحالة الاجتماعية</label>
                            <select class="form-control" name="situation_f" value="{{ $row->situation_f }}" >
                            
                                <option value="أعزب">أعزب</option>
                                <option value="متزوج">متزوج</option>
                                <option value="أرمل">أرمل</option>
                                <option value="مطلق">مطلق</option>

                            </select>

                        </div>
                    </div>





                </div>
                <div class="col-xs-12">

                        <div class="form-group{{ $errors->has('adresse') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="adresse" class="control-label">العنوان</label>
                                <textarea id="adresse" name="adresse" class="form-control" rows="3" value="{{ $row->adresse }}"  autofocus>{{ $row->adresse }}</textarea>
                                @if ($errors->has('adresse'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                                @endif
                            </div>
                         </div>   
                </div>  

            <div class="col-xs-4">

                       <div class="form-group">
                            <div class="col-md-12">
                            <label for="sexe" class="control-label">الجنس</label>
                            <input id="sexe" type="text" class="form-control" name="sexe" value="{{ $row->sexe  }}"  autofocus>
                            
                            
                            </div>
                         </div>

                </div>  

                <div class="col-xs-4">
                       <div class="form-group">
                            <div class="col-md-12">
                            <label for="designation_grade" class="control-label">الرتبة</label>
                           
                            <select class="form-control" name="designation_grade">
                            <option value="{{ $row->codegrade }}" selected>{{ $row->libgrade }} </option>
                              @foreach($data2 as $row2)
                              <option value="{{ $row2->codegrade }}">{{ $row2->libgrade }} </option>
                              @endforeach
                            </select>
                            </div>
                        </div>
                 </div>  

                 <div class="col-xs-4">
                       <div class="form-group">
                            <div class="col-md-12">
                            <label for="matiere" class="control-label"> المادة التي يدرسها الأستاذ</label>

                            <select class="form-control" name="matiere">
                            <option value="{{ $row->codelibmat }}" selected>{{ $row->libmat }} </option>
                              @foreach($data3 as $row3)
                              <option value="{{ $row3->codemat }}">{{ $row3->libmat }} </option>
                              @endforeach
                            </select>

                            </div>
                        </div>
                 </div> 
                       



                <div class="col-xs-4">

                       <div class="form-group{{ $errors->has('lieu_n') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                            <label for="lieu_n" class="control-label">مكان الميلاد</label>
                             <input id="lieu_n" type="lieu_n" class="form-control" name="lieu_n" value="{{ $row->lieu_n }}" >
                            </div>
                         </div>
                </div>
                
                  
                <div class="col-xs-4">

                <div class="form-group">
                    <div class="col-md-12">
                    <label for="datepicker" class="control-label">تاريخ الميلاد</label>
                  <input type="date" id="datepicker" class="form-control" name="date_n" value="{{ $row->date_n }}" >
                </div>
                </div>  
          </div>




                    <div class="col-xs-4 ">

                        <div class="form-group{{ $errors->has('date_s') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="datepicker1" class="control-label">تاريخ أول توظيف</label>
                                <input type="date" id="datepicker1" class="form-control" name="date_s" value="{{ $row->date_s }}" >
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">

                        <div class="form-group{{ $errors->has('statu') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="statu" class="control-label">الوضعية القانونية</label>
                               
                                <select class="form-control" name="statu" value="{{ $row->statu }}">
                                    <option value="مرسم">مرسم</option>
                                    <option value="متربص">متربص</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4">

                        <div class="form-group{{ $errors->has('date_r') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="datepicker2" class="control-label"> تاريخ الالتحاق بالمدرسة</label>
                                <input type="date" id="datepicker2" class="form-control" name="date_r" value="{{ $row->date_r }}" >
                            </div>
                        </div>
                    </div>


                </div>




</div></div>

        
             <div class="box-footer">
                                <button type="submit" class="btn btn-primary pull-left">تعديل أستاذ</button>
            </div>
                </form>
                @endforeach
    </div>
        </div>
            </div>
    
    </section>
    </div>
            </div>

    @endsection
@section('script')

<!-- Required datatable js -->
<script src="{{ URL::asset('/libs/datatables/datatables.min.js')}}"></script>
<script src="{{ URL::asset('/libs/bootstrap-editable/bootstrap-editable.min.js')}}"></script>

<script src="{{ URL::asset('/js/pages/table-editable.int.js')}}"></script>
@endsection