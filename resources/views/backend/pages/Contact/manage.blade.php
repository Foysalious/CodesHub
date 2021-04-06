@extends('backend.template.layout')

@section('body-content')
    <!-- main content start -->
    <div class="main-content">
        <div class="container-fluid">

            <!-- page indicator start -->
            <section class="page-indicator">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li>
                                <i class="fas fa-bars"></i>
                            </li>
                            <li>
                                Contact
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- page indicator end -->

            <!-- dashbaord statistics seciton start -->
            <section class="statistics">


                <!-- manage row start -->
                <div class="row">


                    <div class="col-md-12 table-responsive">
                        <table class="table table-striped" id="myTable">
                            <thead>
                            <tr>
                                <td>Id</td>
                                <td>Service Area</td>
                                <td>Requirements</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Number</td>
                                <td>Company Name</td>
                                <td>Company Type</td>
                                <td>Website</td>
                                <td>Address</td>
                                <td>Social Network ID</td>


                                <td>action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($contacts as $contact)
                                <tr>
                                    <th>{{ $i }}</th>
                                    <td>

                                        @foreach($contact->service_area as $service)

                                            #{{$service}}<br><br>
                                        @endforeach

                                    </td>
                                    <td> {!!  $contact->requirements!!} </td>
                                    <td> {{$contact->name}} </td>
                                    <td> {{$contact->email}} </td>
                                    <td> {{$contact->country_code}}{{$contact->number}} </td>
                                    <td> {{$contact->company_name}} </td>
                                    <td> {{$contact->company_type}} </td>
                                    <td> {{$contact->website}} </td>
                                    <td> {{$contact->address}} </td>
                                    <td> {{$contact->social_type}} </td>
                                    <td> {{$contact->network_id}} </td>

                                </tr>
                                @php
                                    $i++;
                                @endphp
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- manage row end -->

            </section>
            <!-- dashbaord statistics seciton end -->

        </div>
    </div>
    <!-- main content end -->
@endsection
