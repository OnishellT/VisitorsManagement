@extends('admin.layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/id-card-print.css') }}">
@endsection
@section('main-content')

	<section class="section">
        <div class="section-header">
            <h1>{{ __('Visitantes') }}</h1>
            {{ Breadcrumbs::render('visitors/show') }}
        </div>

        <div class="section-body">
        	<div class="row">
	   			<div class="col-4 col-md-4 col-lg-4">
			    	<div class="card">
                        <div class="card-header">
                            <a href="#" id="print" class="btn btn-icon icon-left btn-primary"><i class="fas fa-print"></i> {{ __('Imprimir ID') }}</a>
                        </div>
					    <div class="card-body ">
                            <div class="img-cards" id="printidcard">
                                <div class="id-card-holder">
                                    <div class="id-card">
                                        <!--<div class="id-card-photo">
                                            @if($visitingDetails->getFirstMediaUrl('visitor'))
                                                <img src="{{ asset($visitingDetails->getFirstMediaUrl('visitor')) }}" alt="">
                                            @else
                                                <<img src="{{ asset('images/'.setting('id_card_logo')) }}" alt="">
                                            @endif
                                        </div>-->
                                        <h1>{{$visitingDetails->visitor->name}}</h1>
                                        <h3>{{__('Numero Telefonico: ')}}{{$visitingDetails->visitor->phone}}</h3>
                                         <!--<h3>{{__('ID ')}}{{$visitingDetails->reg_no}}</h3>-->
                                        <h3>{{$visitingDetails->company_name}}</h3>
                                        <h3>{{$visitingDetails->visitor->company_name}}</h3>
                                        <h2>{{__('Visita ')}}</h2>
                                        <h3>{{__('Empleado :')}} {{$visitingDetails->employee->name}}</h3>
                                        <hr>
                                        <!--<p><strong>{{ setting('site_name') }} </strong></p>-->
                                        <p><strong>{{ setting('site_address') }} </strong></p>
                                        <p>{{__('Telefono:')}} {{ setting('site_phone_number') }} | {{__('E-Mail: ')}} {{ setting('site_email') }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
					    <!-- /.box-body -->
					</div>
				</div>
	   			<div class="col-8 col-md-8 col-lg-8">
			    	<div class="card">
			    		<div class="card-body">
			    			<div class="profile-desc">
			    				<div class="single-profile">
			    					<p><b>{{ __('Nombre') }}: </b> {{ $visitingDetails->visitor->first_name}}</p>
			    				</div>
			    				<div class="single-profile">
			    					<p><b>{{ __('Apellido') }}: </b> {{ $visitingDetails->visitor->last_name}}</p>
			    				</div>
			    				<div class="single-profile">
			    					<p><b>{{ __('Email') }}: </b> {{ $visitingDetails->visitor->email}}</p>
			    				</div>
			    				<div class="single-profile">
			    					<p><b>{{ __('Numero Telefonico') }}: </b> {{ $visitingDetails->visitor->phone}}</p>
			    				</div>
                                <div class="single-profile">
			    					<p><b>{{ __('Empleado') }}: </b> {{ $visitingDetails->employee->user->name}}</p>
			    				</div>
                                <div class="single-profile">
                                    <p><b>{{ __('Proposito') }}: </b> {{ $visitingDetails->purpose}}</p>
                                </div>
                                <div class="single-profile">
                                    <p><b>{{ __('Compañia') }}: </b> {{ $visitingDetails->company_name}}</p>
                                </div>
                                <div class="single-profile">
                                    <p><b>{{ __('Documento de Identidad') }}: </b> {{ $visitingDetails->national_identification_no}}</p>
                                </div>
			    				<!--<div class="single-profile">
			    					<p><b>{{ __('Fecha') }}: </b> {{date('d-m-Y', strtotime($visitingDetails->created_at))}}</p>
			    				</div>-->
                                <div class="single-profile">
			    					<p><b>{{ __('Entrada') }}: </b> {{date('d-m-Y h:i A', strtotime($visitingDetails->checkin_at))}}</p>
			    				</div>
                                @if($visitingDetails->checkout_at)
                                <div class="single-profile">
			    					<p><b>{{ __('Salida') }}: </b> {{date('d-m-Y h:i A', strtotime($visitingDetails->checkout_at))}}</p>
			    				</div>
                                @endif
                                <!--<div class="single-profile">
                                    <p><b>{{ __('Direccion') }}: </b> {{ $visitingDetails->visitor->address}}</p>
                                </div>-->
                                <div class="single-profile">
                                    <p><b>{{ __('Estado') }}: </b> {{ $visitingDetails->my_status}}</p>
                                </div>
			    			</div>
			    		</div>
			    	</div>
				</div>
        	</div>
        </div>
    </section>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('assets/modules/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/modules/datatables.net-select-bs4/js/select.bootstrap4.min.js') }}"></script>

    <script>
        var idCardCss = "{{ asset('css/id-card-print.css') }}";
    </script>

    <script src="{{ asset('js/visitor/view.js') }}"></script>
@endsection
