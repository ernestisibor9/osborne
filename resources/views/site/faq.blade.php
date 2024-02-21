@extends('layout.site')
@section('content')

<section class="page section-padding">
    <div class="container text-center">
        <h2 class="title">F.A.Q</h2>
        <span class="sub-title">Home > FAQ </span>
    </div>
</section> <!-- header-title -->


<section class="faq-page-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="brochure text-left">
                    <h4>Brochure</h4>
                    <p>View our 2016 financial prospectus brochure for an easy to read guide on all of the services offer.</p>

                    <span><a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download Brochure</a></span>

                    <span><a href="#"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Characteristics</a></span>
                </div>
            </div>

            <div class="col-md-8">
                <div class="faq-content">
                    <h3>Frequently Asked Question</h3>

                    <div id="accordion" class="accordion-content ui-accordion ui-widget ui-helper-reset" role="tablist">
                        <h3 class="ui-accordion-header ui-corner-top ui-state-default ui-accordion-header-active ui-state-active ui-accordion-icons" role="tab" id="ui-id-1" aria-controls="ui-id-2" aria-selected="true" aria-expanded="true" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span>Lorem ipsum dolor sit amet</h3>
                        <div style="display: block; height: 140px;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content ui-accordion-content-active" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
                            <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <h3 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Dolor sit amet, consectetuer adipiscing elit</h3>
                        <div style="display: none; height: 140px;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true">
                            <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        </div>

                        <h3 class="ui-accordion-header ui-corner-top ui-accordion-header-collapsed ui-corner-all ui-state-default ui-accordion-icons" role="tab" id="ui-id-5" aria-controls="ui-id-6" aria-selected="false" aria-expanded="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Sed diam nonummy nibh euismod</h3>
                        <div style="display: none; height: 140px;" class="ui-accordion-content ui-corner-bottom ui-helper-reset ui-widget-content" id="ui-id-6" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true">
                            <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div> <!-- research-content -->
            </div>
        </div>
    </div>
 </section>





@endsection