@extends('layouts.master')

@section('title') Gestion des écoles @endsection

@section('content')

    @component('common-components.breadcrumb')
         @slot('title') Gestion des écoles @endslot
         @slot('li_1') Pages  @endslot
     @endcomponent
     
     
     
     <div class="row">
                        <div class="col-12">

                                <table   class="col-xs-12 col-sm-12 col-md-12 text-center"  border="0">
                                <tr><td>
                                <a  class="btn btn-outline-primary  waves-effect waves-light" href="{{ route('create_lycee') }}" >
                                         <i class="mdi mdi-domain-plus "></i><br>إضافة مؤسسة جديدة</a>

                              </td></tr>
                                </table>   
<br>
                                <!-- -->
                        <div class="card">
                                <div class="card-body">

                                   

                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>المؤسسة التربوية</th>
                                                <th>رمزالمؤسسة</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        @foreach($data ?? '' as $row)
                                        <tr>
        <td>  {{ $row->libetab }} </td>
            <td> <a  href="{{ route('lycees.show',$row->id) }}">{{ $row->id }}</a></td>
            <td>  <form action="{{ route('lycees.destroy',$row->id) }}" method="POST">
   
                    
    
   <a class="btn btn-primary" href="{{ route('editlycee',$row->id) }}">تعديل</a>

   @csrf
   @method('DELETE')

   <button type="submit" class="btn btn-danger">حذف</button>
</form></td>
           
          
        </tr>
                   @endforeach                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

   
      @endsection
