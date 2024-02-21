@extends('layouts.site')
@section('content')

        <section class="page section-padding">
            <div class="container text-center">
                <h2 class="title">Company Policies</h2>
            </div>
        </section> <!-- header-title -->


        <section class="service-page-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h3>Company Policies</h3>
                        <table class="table table-bordered">
                            <tr>
                                <th>Document Name</th>
                                <th>Downloads</th>
                            </tr>
                            <tr>
                                <td>Privacy Policy</td>
                                <td>
                                    <a href="{{ asset('site/assets/documents/pdf/privacy_notice.pdf') }}">
                                        <i class="fa fa-eye"></i>
                                        View
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Data Protection Policy</td>
                                <td>
                                    <a href="{{ asset('site/assets/documents/pdf/data-privacy.pdf') }}">
                                        <i class="fa fa-eye"></i>
                                        View
                                    </a>
                                </td>
                            </tr>
                             <tr>
                                <td>Customer Consent Form</td>
                                <td><a href="{{ asset('site/assets/documents/pdf/consent-form.pdf') }}">
                                    <i class="fa fa-eye"></i>
                                    View
                                </a></td>
                            </tr>
                            <tr>
                                <td>Data Breach Policy</td>
                                <td><a href="{{ asset('site/assets/documents/pdf/Data_breach_policy.pdf') }}">
                                    <i class="fa fa-eye"></i>
                                    View
                                </a></td>
                            </tr>
                            <tr>
                                <td>Data Subject Access Request Policy</td>
                                <td><a href="{{ asset('site/assets/documents/pdf/data-subject-access.pdf') }}">
                                    <i class="fa fa-eye"></i>
                                    View
                                </a></td>
                            </tr>
                            <tr>
                                <td>Best Execution Policy</td>
                                <td><a href="{{ asset('site/assets/documents/pdf/BEST EXECUTION POLICY - OCML LTD.pdf') }}">
                                    <i class="fa fa-eye"></i>
                                    View
                                </a></td>
                            </tr>
                            
                        </table>
                    </div>
                    

                </div>

            </div>
        </section> <!-- service-page-section -->
@endsection
