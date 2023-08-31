@extends('layouts.app')


@section('content')
    <div class="i-f-w min-vh-50 d-flex align-items-center" style="--img: url(/images/new_images/pages/white_label.webp)">
        <div class="container">
            <div class="display-5 color2 fw-bold letter-s-4">
                @lang('White Label')
            </div>
            <div class="row mt-4">
                <div class="col-md-9 text-white desc_page">
                    <p>@lang('text05')</p>
                </div>
            </div>
        </div>
    </div>

    @include('components.benefitting_your_business')

    <section style="background: #3c3c3c;">
        <div class="container">
            <div class="row justify-content-center align-items-center g-4">
                <div class="col-md-6">
                    <div >
                        <h3 class="h2 color2">
                            @lang('Have a Question?')<br> @lang('Get in Touch')
                        </h3>
                        <p class="mt-4 text-white-50">@lang('If you have any questions or enquiries, fill in the form in this section. Alternatively, contact us at partners@TradeLive AI .ae and one of our Account Managers will get back to you soon.')</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div >
                        <form class="form_white" action="" method="POST" id="form1">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control"
                                    placeholder="username*" name="username"  required>
                            </div>
                            <div class="mb-3">
                                <input type="phone" class="form-control"
                                    placeholder="Phone*" name="phone" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Email*" name="email" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control"
                                    placeholder="Message*" name="message" required></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-outline-primary">@lang('SUBMIT')</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <style>
        .form_white input, .form_white textarea{
            border: 1px solid #e7e7e7;
        }
    </style>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(e) {

var old_html;
var new_html = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span class="sr-only"></span>';

var forms = $("#form1");
$(forms).ajaxForm({
beforeSend : function(){
        old_html = forms.find("[type='submit']").html();
        forms.find("[type='submit']").html(new_html);
        forms.find("[type='submit']").attr("disabled", "disabled");
        removeErrors(forms);
},
uploadProgress : function(event , position, total, percentComplete){},
        complete: function(data){
            
        forms.find("[type='submit']").html(old_html);
        forms.find("[type='submit']").removeAttr("disabled");

            if(data.status == 200){
                forms.html('<div class="alert alert-success" role="alert">Thank you for contacting us. We will get back to you soon.</div>').hide().fadeIn();
            }
            if(data.status == 422){
                errors(forms, data.responseJSON);
            }
        }
});
});

    </script>
@endsection