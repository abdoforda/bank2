<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#16223B">
    <meta property="og:image" content="/panel/assets/2f4ac810/logo.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:secure_url" content="/panel/assets/2f4ac810/logo.jpg">
    <meta itemprop="image" content="/panel/assets/2f4ac810/logo.jpg">
    <link rel="apple-touch-icon" href="/panel/assets/2f4ac810/logo.jpg">
    <link rel="apple-touch-icon" href="/panel/assets/2f4ac810/logo.jpg" sizes="72x72">
    <link rel="apple-touch-icon" href="/panel/assets/2f4ac810/logo.jpg" sizes="114x114">
    <link rel="apple-touch-icon" href="/panel/assets/2f4ac810/logo.jpg" sizes="144x144">
    <meta name="csrf-param" content="_csrf-frontend">
    <meta name="csrf-token"
        content="KAbx0En2WEGZj28u-0UyuZpFzKmYIjM2ZUHVMzCJwBt_P4aVG5UxNfvNI1aOFQHw9ny8-s9WC2EAFfhKR7-VcA==">
    <link href="/panel/assets/4fb60a01/css/mt.css" rel="stylesheet">
    <link href="/panel/assets/4fb60a01/css/style.css" rel="stylesheet">
    <link href="/panel/assets/69d997b7/css/style.css" rel="stylesheet">
    <link href="/panel/assets/69d997b7/css/media.css" rel="stylesheet">
    <link href="/panel/assets/e31d6fb/css/preloader.css" rel="stylesheet">
    <link href="/panel/assets/a228f137/css/bootstrap.min.css" rel="stylesheet">
    <link href="/panel/assets/a228f137/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/panel/assets/22758442/css/font-awesome.min.css" rel="stylesheet">
    <link href="/panel/assets/225ef734/css/simple-line-icons.css" rel="stylesheet">
    <link href="/panel/assets/aad899ec/metis-menu.css" rel="stylesheet">
    <link href="/panel/assets/a9d552d7/css/tools.css" rel="stylesheet">
    <link href="/panel/assets/a9d552d7/css/variable.css" rel="stylesheet">
    <link href="/panel/assets/a9d552d7/css/navbar.css" rel="stylesheet">
    <link href="/panel/assets/a9d552d7/css/left-sidebar.css" rel="stylesheet">
    <link href="/panel/assets/a9d552d7/css/style.css" rel="stylesheet">
    <link href="/panel/assets/a9d552d7/css/media.css" rel="stylesheet">
    <link href="/panel/assets/7548472b/css/poppins.css" rel="stylesheet">
    <link href="/panel/assets/df5f9821/toastr.min.css" rel="stylesheet">
</head>

<body class="">

    <div id="wrapper">

        <nav class="navbar navbar-fixed-top">

            <div class="navbar-arr">
                <a class="btn btn-xs btn-link btn-toggle-fullwidth burger_nav_span"
                    href="javascript:void(0);"><span></span><span></span><span></span><span></span></a>
            </div>
            <div class="navbar-brand">
                <a href="/"><img class="img-responsive logo" src="{{ Voyager::image(setting('site.logo_blue')) }}"
                        style="height: 54px;" alt="Personal Area"></a>
            </div>

            <div class="nav navbar-nav">
                <div class="dropdown dropdown_user-account">
                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu p-0 " data-toggle="dropdown">
                        <div class="user-account">
                            <img class="rounded-circle user-photo" src="/panel/assets/2f4ac810/no-avatar.svg"
                                alt="User">
                        </div>
                    </a>

                    <ul class="dropdown-menu dropdown-menu_user-menu">
                        <li class="dropdown-menu_user-info">
                            <span class="user-accoun">
                                <img class="rounded-circle user-photo" src="/panel/assets/2f4ac810/no-avatar.svg"
                                    alt="User"> </span>
                            <span><strong>user name</strong></span>
                        </li>
                        <li class="d-block d-md-none">
                            <div class="dropdown-toggle dropdown-toggle__btn_language">
                                <img src="/panel/assets/a1ec6794/en.png">
                                EN
                            </div>
                        </li>
                        <li class="user-profile">
                            <a class="d-flex align-items-center" href="/en/keyMetatrader/default/profile"
                                data-method="POST" data-params='{"tab":"settings"}'><i class="h h-equalizer"></i>
                                <span>My Profile</span></a>
                        </li>
                    </ul>

                </div>
                <div class="user user__logout">
                    <a class="d-flex align-items-center" href="/en/logout" data-method="POST"><i
                            class="h h-logout"></i></a>
                </div>
                <div class="dropdown dropdown_language">
                    <a href="javascript:void(0);" class="dropdown-toggle icon-menu d-none d-md-flex"
                        data-toggle="dropdown">
                        <img src="/panel/assets/a1ec6794/en.png" class="dropdown_language__active-lange_icon">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right account animated flipInY">
                        <a href="/en/keyMetatrader/default/dashboard">
                            <li><img src="/panel/assets/a1ec6794/en.png">English</li>
                        </a>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="main">
            <div id="left-sidebar" class="left-sidebar">
                <div class="left-sidebar_body">
                    <div class="tab-pane" id="hr_menu">
                        <nav class="sidebar-nav">
                            <ul class="main-menu metismenu">
                                <li class="active"><a href="/en/keyMetatrader/default/dashboard"><i
                                            class="h h-home"></i> <span>Dashboard</span> </a></li>
                                <li style="display: none;"><a href="" class="has-arrow"><i
                                            class="h h-bar-chart"></i>
                                        <span>Trading</span> <span class="pull-right-container"></span></a>
                                    <ul class='collapse'>
                                        <li><a href="/en/keyMetatrader/default/create"><i class="h h-plus-circle"></i>
                                                <span>Open account</span> </a></li>
                                        <li><a href="/en/keyMetatrader/default/account"><i
                                                    class="fa fa-credit-card-alt"></i> <span>Accounts</span> </a></li>
                                    </ul>
                                </li>
                                <li><a href="" class="has-arrow"><i class="h h-bar-chart"></i>
                                        <span>Trading</span> <span class="pull-right-container"></span></a>
                                    <ul class='collapse'>
                                        <li><a href="/en/keyMetatrader/default/create"><i class="h h-plus-circle"></i>
                                                <span>Open account</span> </a></li>
                                        <li><a href="/en/keyMetatrader/default/account"><i
                                                    class="fa fa-credit-card-alt"></i> <span>Accounts</span> </a></li>
                                    </ul>
                                </li>
                                <li><a href="" class="has-arrow"><i class="h h-exchange"></i>
                                        <span>Transfers</span> <span class="pull-right-container"></span></a>
                                    <ul class='collapse'>
                                        <li><a href="/en/keyMetatrader/default/deposit"><i class="fa fa-download"></i>
                                                <span>Deposit</span> </a></li>
                                        <li><a href="/en/keyMetatrader/default/withdraw"><i class="fa fa-upload"></i>
                                                <span>Withdraw</span> </a></li>
                                        <li><a href="/en/keyMetatrader/default/transfer"><i
                                                    class="fa fa-arrows-h"></i> <span>Internal transfer</span> </a>
                                        </li>
                                        <li><a href="/en/keyMetatrader/default/history"><i class="fa fa-history"></i>
                                                <span>Transfers report</span> </a></li>
                                    </ul>
                                </li>
                                <li><a href="/en/keyTickets/tickets/index"><i class="h h-ticket"></i> <span>Support
                                            Team</span> </a></li>
                                <li><a href="/en/belleo/index"><i class="fa fa-calendar"></i> <span>Economic
                                            Calendar</span> </a></li>
                            </ul>
                        </nav>

                        <nav class="sidebar-nav">
                            <ul class="main-menu metismenu">
                                <li>
                                    <a href="/en/keyMetatraderIb/pa/dashboard">
                                        <i class="h h-ib"></i> <span>Become an IB</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="left-dep">
                        <a href="/en/keyMetatrader/default/deposit" class="btn btn-primary">Deposit Funds 🔥</a>
                    </div>

                    <div class="left-sidebar_qr-code-text">Scan QR Code to Download TradeLive AI </div>
                    <div class="left-sidebar_qr-code has-arrow has-arrow_toggle">
                        <div class="btn btn-primary btn-transparent-white">Show QR code</div>
                        <div class="left-sidebar_qr-code__img has-arrow_toggle__block">
                            <img src="/panel/assets/a9d552d7/img/qr-code.svg" alt="QR Code" class="">
                        </div>
                    </div>

                </div>
            </div>

            <div id="main-content" class="main-content">
                <div class="container-fluid pt-4 pl-md-4 pr-md-4">
                    <div class="main-content_body">

                        <div class="dashboard">
                            <div class="upload-documents__window__birthday">
                                <div class="col-lg-12 verification-status_dashbord">
                                    <div class="verification-status_dashbord_header">
                                        <div class="verification-status__title">Verification status</div>
                                    </div>
                                    <div class="verification-status_visual verification-status_visual__icon-25">
                                        <span class="verification-status_visual__icon"><span>25</span>%</span>
                                    </div>
                                </div>
                            </div>


                            <div class="row blockTop_verification">
                                <div class="col-lg-12">
                                    <div class="verification-step background-color-grey">
                                        <div class="verification-step_item verification-step_item__active">
                                            <span class="verification-step__img">1</span>
                                            <span class="verification-step__title">Provide your info</span>
                                        </div>
                                        <div
                                            class="verification-step_item
                        verification-step_item__curent">
                                            <span class="verification-step__img">2</span>
                                            <span class="verification-step__title">Fund your account</span>
                                        </div>
                                        <div
                                            class="verification-step_item
                                            ">
                                            <span class="verification-step__img">3</span>
                                            <span class="verification-step__title">Start trading</span>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="verif-card-account mt-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-account_outer card-account_outer-notupload">
                                            <div class="card-account_body text-center">

                                                <div class="">
                                                    <div class="h2"><span>Verify your Documents</span><br>to Open a
                                                        Trading Account</div>
                                                    <div class="text-grey fz-16 text-center mb-2">2-5 minutes</div>
                                                </div>
                                                <div>
                                                    <a class="btn btn-primary btn-primary-main btn-primary_transparent"
                                                        href="/en/keyMetatrader/pa/upload-documents">Upload
                                                        Documents</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="dashboard_btn__block">
                                        <div class="dashboard_btn">History</div>
                                        <div class="dashboard_btn">Time Zone</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="dashboard_window">
                                        <div class="table-wrapper">
                                            <div id="w0" class="dataTables_wrapper">
                                                <div class="scroll_overflow">
                                                    <div class="scroll"></div>
                                                </div>
                                                <div class="table-overflow" id="slide-wrap-">
                                                    <table id="DataTables_Table_0" class="table table-hover"
                                                        role="grid" aria-describedby="DataTables_Table_0_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class=""></th>
                                                                <th class="sorting transaction_id"><a class="desc"
                                                                        href="/en/keyMetatrader/default/dashboard?sort=transaction_id"
                                                                        data-sort="transaction_id">ID</a></th>
                                                                <th class="sorting created_at"><a
                                                                        href="/en/keyMetatrader/default/dashboard?sort=created_at"
                                                                        data-sort="created_at">Date</a></th>
                                                                <th class="sorting transaction_type"><a
                                                                        href="/en/keyMetatrader/default/dashboard?sort=transaction_type"
                                                                        data-sort="transaction_type">From where</a>
                                                                </th>
                                                                <th class="sorting account_id"><a
                                                                        href="/en/keyMetatrader/default/dashboard?sort=account_id"
                                                                        data-sort="account_id">Where</a></th>
                                                                <th class="sorting transaction_amount"><a
                                                                        href="/en/keyMetatrader/default/dashboard?sort=transaction_amount"
                                                                        data-sort="transaction_amount">Bid amount</a>
                                                                </th>
                                                                <th class="sorting transaction_amount_credited"><a
                                                                        href="/en/keyMetatrader/default/dashboard?sort=transaction_amount_credited"
                                                                        data-sort="transaction_amount_credited">Actual
                                                                        amount</a></th>
                                                                <th class="sorting status"><a
                                                                        href="/en/keyMetatrader/default/dashboard?sort=status"
                                                                        data-sort="status">Status</a></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="8">
                                                                    <div class="empty">No results found.</div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="row paginator_row">
                                                    <div class="col-sm-2 col-md-1">

                                                    </div>
                                                    <div class="col-sm-10 col-md-6">
                                                        <div class="dataTables_info" id="DataTables_Table_0_info"
                                                            role="status" aria-live="polite">

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-5">
                                                        <div class="dataTables_paginate paging_simple_numbers"
                                                            id="DataTables_Table_0_paginate">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="show_all">
                                                <a class="" href="/en/keyMetatrader/default/history">All
                                                    payments (0) <i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dashboard_window background-color-grey">
                                        <div class="map">
                                            <? /*  Блок часы работы рынков */ ?>

                                            <div class="panel panel-default">
                                                <div class="panel-heading block-time-title">
                                                    <div class="title-but">
                                                        <div class="but-tab" data-title-open="full map"
                                                            data-title-close="minimize map">
                                                            <button class="cmn-toggle-switch cmn-toggle-switch__htla">
                                                                <span>
                                                                    minimize map </span>
                                                            </button>
                                                        </div>
                                                        <h3 class="panel-title">Forex Market Hours</h3>
                                                    </div>
                                                    <? /* надпись времени GMT */ ?>
                                                    <div class="cifra_time_GMT">
                                                        <div>
                                                            <span class="clock_grean1"></span>
                                                            <span class="" style="padding-left: 5px;"><b>Current
                                                                    Time:</b><span
                                                                    class="text_cifra_time"></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="clear_GMT" style="display: none"></div>
                                                </div>
                                                <!-- FOREX MARKET HOURS LARGE  -->
                                                <div class="panel-body pt-3 active" id="big">
                                                    <div class="row">
                                                        <div class="block_map1 w-100">
                                                            <div class="block_map2">
                                                                <? /* цифры */ ?>
                                                                <ul class="map_ul d-flex">
                                                                    <li class="chas" id="chas23">
                                                                        <span></span><? /* class="one_simv2" */ ?>
                                                                        <span></span>
                                                                    </li>
                                                                    <li class="chas" id="chas22"><span
                                                                            class="two_simv">22</span></li>
                                                                    <li class="chas" id="chas21"><span
                                                                            class="two_simv">21</span></li>
                                                                    <li class="chas" id="chas20"><span
                                                                            class="two_simv">20</span></li>
                                                                    <li class="chas" id="chas19"><span
                                                                            class="two_simv">19</span></li>
                                                                    <li class="chas" id="chas18"><span
                                                                            class="two_simv">18</span></li>
                                                                    <li class="chas" id="chas17"><span
                                                                            class="two_simv">17</span></li>
                                                                    <li class="chas" id="chas16"><span
                                                                            class="two_simv">16</span></li>
                                                                    <li class="chas" id="chas15"><span
                                                                            class="two_simv">15</span></li>
                                                                    <li class="chas" id="chas14"><span
                                                                            class="two_simv">14</span></li>
                                                                    <li class="chas" id="chas13"><span
                                                                            class="two_simv">13</span></li>
                                                                    <li class="chas" id="chas12"><span
                                                                            class="two_simv">12</span></li>
                                                                    <li class="chas" id="chas11"><span
                                                                            class="two_simv">11</span></li>
                                                                    <li class="chas" id="chas10"><span
                                                                            class="two_simv">10</span></li>
                                                                    <li class="chas" id="chas9"><span
                                                                            class="one_simv">9</span></li>
                                                                    <li class="chas" id="chas8"><span
                                                                            class="one_simv">8</span></li>
                                                                    <li class="chas" id="chas7"><span
                                                                            class="one_simv">7</span></li>
                                                                    <li class="chas" id="chas6"><span
                                                                            class="one_simv">6</span></li>
                                                                    <li class="chas" id="chas5"><span
                                                                            class="one_simv">5</span></li>
                                                                    <li class="chas" id="chas4"><span
                                                                            class="one_simv">4</span></li>
                                                                    <li class="chas" id="chas3"><span
                                                                            class="one_simv">3</span></li>
                                                                    <li class="chas" id="chas2"><span
                                                                            class="one_simv">2</span></li>
                                                                    <li class="chas" id="chas1"><span
                                                                            class="one_simv">1</span></li>
                                                                    <li class="chas" id="chas0"><span
                                                                            class="one_simv">0</span></li>
                                                                </ul>
                                                                <img src="/panel/assets/4fb60a01/img/amer.jpg"
                                                                    alt="" class="col-xs-12 big_img w-100">
                                                                <span id="temp_folder"
                                                                    data-folder="/panel/assets/4fb60a01" hidden></span>
                                                                <? /* поле для карты */ ?>
                                                                <div class="region_map">
                                                                    <? /* блок полосок */ ?>
                                                                    <div class="block_region">
                                                                        <? /* АМЕРИКА */ ?>
                                                                        <div id="NYSE_poloska" class="birja_region">
                                                                            <? /* блок названия */ ?>
                                                                            <div id="NYSE_block">
                                                                                <? /* название - часы */ ?>
                                                                                <div id="NYSE_text">NYSE</div>
                                                                            </div>
                                                                        </div>
                                                                        <? /* ЛОНДОН */ ?>
                                                                        <div id="London_poloska" class="birja_region">
                                                                            <? /* блок названия */ ?>
                                                                            <div id="London_block">
                                                                                <? /* название - часы */ ?>
                                                                                <div id="London_text">London</div>
                                                                            </div>
                                                                        </div>
                                                                        <? /* Tokyo1 */ ?>
                                                                        <div id="Tokyo_poloska1" class="birja_region">
                                                                        </div>
                                                                        <? /* Tokyo2 */ ?>
                                                                        <div id="Tokyo_poloska2" class="birja_region">
                                                                            <? /* блок названия */ ?>
                                                                            <div id="Tokyo_block2">
                                                                                <? /* название - часы */ ?>
                                                                                <div id="Tokyo_text2">Tokyo</div>
                                                                            </div>
                                                                        </div>
                                                                        <? /* Sydney1 */ ?>
                                                                        <div id="Sydney_poloska1"
                                                                            class="birja_region"></div>
                                                                        <? /* Sydney2 */ ?>
                                                                        <div id="Sydney_poloska2"
                                                                            class="birja_region">
                                                                            <? /* блок названия */ ?>
                                                                            <div id="Sydney_block2">
                                                                                <? /* название - часы */ ?>
                                                                                <div id="Sydney_text2">Sydney</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="time_active"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- FOREX MARKET HOURS SMALL  -->
                                                <div id="small" class="panel-body pt-3" style="display: none;">
                                                    <div class="row">
                                                        <div class="block_map1 w-100">
                                                            <div class="block_map2">
                                                                <? /* цифры */ ?>
                                                                <ul class="map_ul d-flex">
                                                                    <li class="chas" id="chas23">
                                                                        <span></span><? /* class="one_simv2" */ ?>
                                                                        <span></span>
                                                                    </li>
                                                                    <li class="chas" id="chas22"><span
                                                                            class="two_simv">22</span></li>
                                                                    <li class="chas" id="chas21"><span
                                                                            class="two_simv">21</span></li>
                                                                    <li class="chas" id="chas20"><span
                                                                            class="two_simv">20</span></li>
                                                                    <li class="chas" id="chas19"><span
                                                                            class="two_simv">19</span></li>
                                                                    <li class="chas" id="chas18"><span
                                                                            class="two_simv">18</span></li>
                                                                    <li class="chas" id="chas17"><span
                                                                            class="two_simv">17</span></li>
                                                                    <li class="chas" id="chas16"><span
                                                                            class="two_simv">16</span></li>
                                                                    <li class="chas" id="chas15"><span
                                                                            class="two_simv">15</span></li>
                                                                    <li class="chas" id="chas14"><span
                                                                            class="two_simv">14</span></li>
                                                                    <li class="chas" id="chas13"><span
                                                                            class="two_simv">13</span></li>
                                                                    <li class="chas" id="chas12"><span
                                                                            class="two_simv">12</span></li>
                                                                    <li class="chas" id="chas11"><span
                                                                            class="two_simv">11</span></li>
                                                                    <li class="chas" id="chas10"><span
                                                                            class="two_simv">10</span></li>
                                                                    <li class="chas" id="chas9"><span
                                                                            class="one_simv">9</span></li>
                                                                    <li class="chas" id="chas8"><span
                                                                            class="one_simv">8</span></li>
                                                                    <li class="chas" id="chas7"><span
                                                                            class="one_simv">7</span></li>
                                                                    <li class="chas" id="chas6"><span
                                                                            class="one_simv">6</span></li>
                                                                    <li class="chas" id="chas5"><span
                                                                            class="one_simv">5</span></li>
                                                                    <li class="chas" id="chas4"><span
                                                                            class="one_simv">4</span></li>
                                                                    <li class="chas" id="chas3"><span
                                                                            class="one_simv">3</span></li>
                                                                    <li class="chas" id="chas2"><span
                                                                            class="one_simv">2</span></li>
                                                                    <li class="chas" id="chas1"><span
                                                                            class="one_simv">1</span></li>
                                                                    <li class="chas" id="chas0"><span
                                                                            class="one_simv">0</span></li>
                                                                </ul>
                                                                <? /* поле для карты */ ?>
                                                                <div class="region_map">
                                                                    <? /* блок полосок */ ?>
                                                                    <div class="block_region">
                                                                        <? /* АМЕРИКА */ ?>
                                                                        <div id="NYSE_poloska" class="birja_region">
                                                                            <? /* блок названия */ ?>
                                                                            <div id="NYSE_block">
                                                                                <? /* название - часы */ ?>
                                                                                <div id="NYSE_text">NYSE</div>
                                                                            </div>
                                                                        </div>
                                                                        <? /* ЛОНДОН */ ?>
                                                                        <div id="London_poloska" class="birja_region">
                                                                            <? /* блок названия */ ?>
                                                                            <div id="London_block">
                                                                                <? /* название - часы */ ?>
                                                                                <div id="London_text">London</div>
                                                                            </div>
                                                                        </div>
                                                                        <? /* Tokyo1 */ ?>
                                                                        <div id="Tokyo_poloska1" class="birja_region">
                                                                        </div>
                                                                        <? /* Tokyo2 */ ?>
                                                                        <div id="Tokyo_poloska2" class="birja_region">
                                                                            <? /* блок названия */ ?>
                                                                            <div id="Tokyo_block2">
                                                                                <? /* название - часы */ ?>
                                                                                <div id="Tokyo_text2">Tokyo</div>
                                                                            </div>
                                                                        </div>
                                                                        <? /* Sydney1 */ ?>
                                                                        <div id="Sydney_poloska1"
                                                                            class="birja_region"></div>
                                                                        <? /* Sydney2 */ ?>
                                                                        <div id="Sydney_poloska2"
                                                                            class="birja_region">
                                                                            <? /* блок названия */ ?>
                                                                            <div id="Sydney_block2">
                                                                                <? /* название - часы */ ?>
                                                                                <div id="Sydney_text2">Sydney</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="time_active"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="markets-off__message">markets are closed</div>
                                            </div>
                                            <? /* КОНЕЦ Блок часы */ ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="/panel/assets/1410f0f3/jquery.js"></script>
    <script src="/panel/assets/4fb60a01/js/mt.js"></script>
    <script src="/panel/assets/4fb60a01/js/time_loc.js"></script>
    <script src="/panel/assets/69d997b7/js/theme.js"></script>
    <script src="/panel/assets/5759b355/yii.js"></script>
    <script src="/panel/assets/5759b355/yii.gridView.js"></script>
    <script src="/panel/assets/350263eb/js/grid-view.js"></script>
    <script src="/panel/assets/e31d6fb/js/preloader.js"></script>
    <script src="/panel/assets/a228f137/js/popper.min.js"></script>
    <script src="/panel/assets/a228f137/js/bootstrap.min.js"></script>
    <script src="/panel/assets/aad899ec/metis-menu.js"></script>
    <script src="/panel/assets/a9d552d7/js/theme.js"></script>
    <script src="/panel/assets/df5f9821/toastr.js"></script>
    <script>
        jQuery(function($) {
            jQuery('#w0').yiiGridView({
                "filterUrl": "\/en\/keyMetatrader\/default\/dashboard",
                "filterSelector": "#w0-filters input, #w0-filters select",
                "filterOnFocusOut": true
            });

            $(window).resize(function() {
                resizeTable();
            })

            function resizeTable() {
                if ($(window).width() < 769) {
                    $('.table-overflow').parent('.dataTables_wrapper').find('.scroll_overflow').width($(this)
                        .width() + 120);
                    //$('.table-overflow').parent('.dataTables_wrapper').find('.scroll_overflow').width($(window).width() + 50);
                    $('.dataTables_wrapper').width($('.main').width() - 55);
                } else {
                    $('.table-overflow').parent('.dataTables_wrapper').find('.scroll_overflow').width('auto');
                    $('.dataTables_wrapper').width('auto');
                }
            }
            resizeTable();
            $('.scroll_overflow').scroll(function() {
                $('.table-overflow').scrollLeft($('.scroll_overflow').scrollLeft());
            });
            $('.table-overflow').scroll(function() {
                $('.scroll_overflow').scrollLeft($('.table-overflow').scrollLeft());
            })
            toastr.options = {
                "positionClass": "toast-top-center",
                "timeOut": "7000",
                "newestOnTop": false,
            }

        });
    </script>
</body>

</html>
