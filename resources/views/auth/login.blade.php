<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="/css/bootstrap/bootstrap.css" rel="stylesheet" />
    {{-- <link href="../../../public/css/bootstrap/bootstrap.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="global">
        <div class="container c-main">
            <div class="row justify-content-center">


                <div class="col-12 bg-white g-0">
                    <div class="container">
                        <div class="row justify-content-center align-items-center">
                            <div class="col">

                                <div class="dropdown lang02">
                                    <button class="btn dropdown-toggle" id="dr01" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="flag-icon flag-icon-us"></span>

                                    </button>
                                    <div class="dropdown-menu sub_lang">
                                        <a class="dropdown-item" href="#">
                                            <span class="flag-icon flag-icon-my"></span>
                                            Melayu
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span class="flag-icon flag-icon-tr"></span>
                                            Türkçe
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span class="flag-icon flag-icon-cn"></span>
                                            繁體中文
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span class="flag-icon flag-icon-sa"></span>
                                            Arabic
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="p-5 pb-3">
                        <div class="text-center">
                            <img src="{{ Voyager::image(setting('site.logo_blue')) }}" height="60px" alt="" />
                        </div>

                        <form class="mt-4" action="" id="form1" method="post">
                            @csrf
                            <div class="mb-4">
                                <input name="email" class="form-control " placeholder="Email">
                            </div>

                            <div class="input-group mb-5">
                                <input type="password" name="password" class="form-control pass" placeholder="Password">
                                <span class="input-group-text">
                                    <i class="far fa-eye" id="togglePassword" style="cursor: pointer"></i>
                                </span>
                            </div>

                            <br>

                            <div class="mb-4 text-center">
                                <button type="submit" class="btn btn-primary btn-lg w-45">Login</button>
                            </div>

                            <div class="text-center">
                                <p class="mb-0">Don't have an account?<br />
                                    <a href="https://portal.TradeLive AI .com/en/auth/register" class="text-primary">Sign
                                        up with TradeLive AI  now!</a>
                                </p>
                            </div>

                        </form>
                    </div>

                    <p class="mt-3 small text-black-50" style="background: #f1f1f1; padding: 8px; margin: 0;">
                        Invest Responsibly: CFDs are complex instruments and come with a high risk of losing money
                        rapidly due to leverage. You should consider whether you understand how CFDs work and whether
                        you can afford to take the high risk of losing your money.
                    </p>

                </div>

            </div>
        </div>
    </div>



    <div class="chat-right-b position-fixed">
        <img src="/images/icons/life chat3.png" class="rounded-circle" alt="" />
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>


    <style>
        h3 {
            font-weight: 800;
            color: #0068c7;
        }

        * {
            font-family: 'Cairo', sans-serif;
        }

        .items-images img {
            margin-right: 8px;
        }

        .global {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url(../../images/new_images/auth/30.jpg);
            background-size: cover;
        }

        .c-main {
            max-width: 570px;
            border-radius: 10px;
            box-shadow: 0 0 30px 2px #00000099;
            background: transparent;
            overflow: hidden;
        }

        .input-group label {
            width: 50%;
            padding: 12px 0px;
        }

        .input-group label:nth-child(0) {
            margin-left: -1px;
            border-top-left-radius: 0.375rem;
            border-bottom-left-radius: 0.375rem;
        }

        .w-45 {
            width: 45%;
        }

        .lang02 {
            float: right;
            margin: 10px;
            margin-right: 0;
        }

        .chat-right-b {
            display: table;
            right: 10px;
            bottom: 10px;
        }

        .chat-right-b img {
            background-color: #ffffff4f;
            padding: 8px;
            display: block;
            width: 60px;
            height: 60px;
            margin: 8px 0px;
            cursor: pointer;
        }
    </style>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <script src="../js/main.js"></script>

    <script src="{{ asset('js/ajax.form.js') }}"></script>
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

                        if(data.status == 422){
                            errors(forms, data.responseJSON);
                        }else{
                            window.location.href = "{{ route('panel_dashboard', app()->getLocale()) }}";
                        }
                    }
            });
        });
    </script>

</body>

</html>
