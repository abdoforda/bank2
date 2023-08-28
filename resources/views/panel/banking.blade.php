@extends('panel.app')

@section('content')
    <div class="container">
        <div class="content-wrapper mt-4">
            <div class="row content-header"></div>
            <div class="content-body">
                <div class="pb-3">
                    <div class="tabs custom-tabs bg-white" id="__BVID__992" style="z-index: 1;">
                        <!---->
                        <div class="">
                            <ul role="tablist" class="nav nav-tabs nav-fill" id="__BVID__992__BV_tab_controls_">
                                <!---->
                                <li role="presentation" class="nav-item"><a role="tab" aria-selected="true"
                                        aria-setsize="2" aria-posinset="1" href="#" target="_self"
                                        class="nav-link active active-tabs" id="__BVID__993___BV_tab_button__"
                                        aria-controls="__BVID__993">DEPOSIT</a></li>
                                <li role="presentation" class="nav-item"><a role="tab" aria-selected="false"
                                        aria-setsize="2" aria-posinset="2" href="#" target="_self" class="nav-link"
                                        id="__BVID__1004___BV_tab_button__" aria-controls="__BVID__1004"
                                        tabindex="-1">WITHDRAWAL</a></li>
                                <!---->
                            </ul>
                        </div>
                        <div class="tab-content my-5 my-md-5" id="__BVID__992__BV_tab_container_">
                            <div role="tabpanel" aria-hidden="false" class="tab-pane custom-tab bg-white pb-5 px-2 active"
                                id="__BVID__993" aria-labelledby="__BVID__993___BV_tab_button__" style="">
                                <div class="row">
                                    <div class="mb-1 ml-md-1 col-md-2 col-12"><label for="amount">@lang('Amount')</label>
                                        <div class="d-flex align-items-center"><span
                                                style="margin-left: -15px; margin-right: 5px;">$</span><input id="amount"
                                                type="text" placeholder="amount" class="form-control"></div>
                                        <!---->
                                    </div>
                                    <div class="mb-1 col-md-3 col-12"><label for="amount">@lang('Method')</label>
                                        <div class="d-flex align-items-center">
                                            <select name="" id="" class="form-control">
                                                <option value="" selected disabled></option>
                                                <option value="" >@lang('Cryptocurrency')</option>
                                                <option value="" >@lang('Local Card')</option>
                                            </select>
                                        </div>
                                        <!---->
                                    </div>
                                    <div class="mb-1 col-md-3 col-12"><label for="amount">@lang('Name')</label>
                                        <div class="d-flex align-items-center">
                                            <select name="" id="" class="form-control">
                                                <option value="" selected>USD</option>
                                            </select>
                                        </div>
                                        <!---->
                                    </div>
                                    <div
                                        class="d-flex align-items-center justify-content-center mb-1 mb-lg-0 position-relative col-lg-3 col-12">
                                        <div class="cta-style">
                                            <div class="text-center" style="height: 185px;"><img
                                                    src="{{ asset('images/new_images/panel/qr.png') }}"
                                                    alt="" width="150">
                                                <div class="mt-1"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-copy"
                                                        style="color: gray; cursor: pointer;">
                                                        <rect x="9" y="9" width="13"
                                                            height="13" rx="2" ry="2"></rect>
                                                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1">
                                                        </path>
                                                    </svg>
                                                    <div>0x55d398326f99059ff775485246999027</div>
                                                </div>
                                            </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-12 margin-required">
                                        <div><label for="qrCode-name">Receipt image</label>
                                            <div id="qrCode-name__BV_file_outer_"
                                                class="custom-file b-form-file position-relative"><input type="file"
                                                    id="qrCode-name" accept=".jpeg, .png, .jpg" class="custom-file-input"
                                                    style="z-index: -5;"><label for="qrCode-name" data-browse="Browse"
                                                    class="custom-file-label"><span class="d-block form-file-text"
                                                        style="pointer-events: none;">choose file or drag it
                                                        here</span></label></div>
                                            <!---->
                                        </div><label for="textarea" class="mt-2">Receipt description</label>
                                        <textarea id="textarea" placeholder="about receipt..." wrap="soft" class="form-control"
                                            style="resize: none; overflow-y: scroll; overflow-x: hidden !important; height: 92px;"></textarea><button type="button" class="btn btn-primary"
                                            style="margin-top: 1.5rem; min-width: 139px;"><span>Send
                                                Receipt</span></button>
                                    </div>
                                </div>
                                <!---->
                            </div>
                            <div role="tabpanel" aria-hidden="true" class="tab-pane custom-tab bg-white pb-5 px-2"
                                id="__BVID__1004" aria-labelledby="__BVID__1004___BV_tab_button__"
                                style="display: none;">
                                <div class="row">
                                    <div class="mb-1 col-md-2 col-12"><label for="amount">Amount</label><input
                                            id="amount" type="text" placeholder="amount" class="form-control">
                                    </div>
                                    <div class="mb-1 col-md-3 col-12">
                                        <div dir="auto" class="v-select vs--single vs--searchable">
                                            <div class="list-header">Method</div>
                                            <div id="vs40__combobox" role="combobox" aria-expanded="false"
                                                aria-owns="vs40__listbox" aria-label="Search for option"
                                                class="vs__dropdown-toggle">
                                                <div class="vs__selected-options"><span class="vs__selected"><span>
                                                            Cryptocurrency</span>
                                                        <!---->
                                                    </span> <input aria-autocomplete="list"
                                                        aria-labelledby="vs40__combobox" aria-controls="vs40__listbox"
                                                        type="search" autocomplete="off" class="vs__search"></div>
                                                <div class="vs__actions"><button type="button" title="Clear Selected"
                                                        aria-label="Clear Selected" class="vs__clear"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="10" height="10">
                                                            <path
                                                                d="M6.895455 5l2.842897-2.842898c.348864-.348863.348864-.914488 0-1.263636L9.106534.261648c-.348864-.348864-.914489-.348864-1.263636 0L5 3.104545 2.157102.261648c-.348863-.348864-.914488-.348864-1.263636 0L.261648.893466c-.348864.348864-.348864.914489 0 1.263636L3.104545 5 .261648 7.842898c-.348864.348863-.348864.914488 0 1.263636l.631818.631818c.348864.348864.914773.348864 1.263636 0L5 6.895455l2.842898 2.842897c.348863.348864.914772.348864 1.263636 0l.631818-.631818c.348864-.348864.348864-.914489 0-1.263636L6.895455 5z">
                                                            </path>
                                                        </svg></button> <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="14" height="10" role="presentation"
                                                        class="vs__open-indicator">
                                                        <path
                                                            d="M9.211364 7.59931l4.48338-4.867229c.407008-.441854.407008-1.158247 0-1.60046l-.73712-.80023c-.407008-.441854-1.066904-.441854-1.474243 0L7 5.198617 2.51662.33139c-.407008-.441853-1.066904-.441853-1.474243 0l-.737121.80023c-.407008.441854-.407008 1.158248 0 1.600461l4.48338 4.867228L7 10l2.211364-2.40069z">
                                                        </path>
                                                    </svg>
                                                    <div class="vs__spinner" style="display: none;">Loading...</div>
                                                </div>
                                            </div>
                                            <ul id="vs40__listbox" role="listbox"
                                                style="display: none; visibility: hidden;"></ul>
                                        </div>
                                    </div>
                                    <div class="mb-1 col-md-3 col-12">
                                        <div dir="auto" class="v-select depitems-dropdown vs--single vs--searchable">
                                            <div class="list-header">Name</div>
                                            <div id="vs41__combobox" role="combobox" aria-expanded="false"
                                                aria-owns="vs41__listbox" aria-label="Search for option"
                                                class="vs__dropdown-toggle">
                                                <div class="vs__selected-options"><span class="vs__selected"><span> USDT
                                                            (TRC20)</span>
                                                        <!---->
                                                    </span> <input aria-autocomplete="list"
                                                        aria-labelledby="vs41__combobox" aria-controls="vs41__listbox"
                                                        type="search" autocomplete="off" class="vs__search"></div>
                                                <div class="vs__actions"><button type="button" title="Clear Selected"
                                                        aria-label="Clear Selected" class="vs__clear"
                                                        style="display: none;"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="10" height="10">
                                                            <path
                                                                d="M6.895455 5l2.842897-2.842898c.348864-.348863.348864-.914488 0-1.263636L9.106534.261648c-.348864-.348864-.914489-.348864-1.263636 0L5 3.104545 2.157102.261648c-.348863-.348864-.914488-.348864-1.263636 0L.261648.893466c-.348864.348864-.348864.914489 0 1.263636L3.104545 5 .261648 7.842898c-.348864.348863-.348864.914488 0 1.263636l.631818.631818c.348864.348864.914773.348864 1.263636 0L5 6.895455l2.842898 2.842897c.348863.348864.914772.348864 1.263636 0l.631818-.631818c.348864-.348864.348864-.914489 0-1.263636L6.895455 5z">
                                                            </path>
                                                        </svg></button> <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="14" height="10" role="presentation"
                                                        class="vs__open-indicator">
                                                        <path
                                                            d="M9.211364 7.59931l4.48338-4.867229c.407008-.441854.407008-1.158247 0-1.60046l-.73712-.80023c-.407008-.441854-1.066904-.441854-1.474243 0L7 5.198617 2.51662.33139c-.407008-.441853-1.066904-.441853-1.474243 0l-.737121.80023c-.407008.441854-.407008 1.158248 0 1.600461l4.48338 4.867228L7 10l2.211364-2.40069z">
                                                        </path>
                                                    </svg>
                                                    <div class="vs__spinner" style="display: none;">Loading...</div>
                                                </div>
                                            </div>
                                            <ul id="vs41__listbox" role="listbox"
                                                style="display: none; visibility: hidden;"></ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center col-md-4 col-12">
                                        <div class="text-center"><button type="button" class="btn mx-auto btn-primary"
                                                style="margin-top: 0.7rem; min-width: 115px;"><span>Withdraw</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <div class="row table-row">
                        <div class="bg-white m-0 p-0 col-12" style="overflow-x: auto;">
                            <div>
                                <table role="table" aria-busy="false" aria-colcount="12"
                                    class="table b-table bg-white mb-0" id="__BVID__1016" style="z-index: 0;">
                                    <!---->
                                    <!---->
                                    <thead role="rowgroup" class="thead-light">
                                        <!---->
                                        <tr role="row" class="">
                                            <th role="columnheader" scope="col" tabindex="0" aria-colindex="1"
                                                aria-sort="none" class="">
                                                <div>Psp</div><span class="sr-only"> (Click to sort Ascending)</span>
                                            </th>
                                            <th role="columnheader" scope="col" tabindex="0" aria-colindex="2"
                                                aria-sort="none" class="">
                                                <div>Payment Method</div><span class="sr-only"> (Click to sort
                                                    Ascending)</span>
                                            </th>
                                            <th role="columnheader" scope="col" tabindex="0" aria-colindex="3"
                                                aria-sort="none" class="">
                                                <div>transaction id</div><span class="sr-only"> (Click to sort
                                                    Ascending)</span>
                                            </th>
                                            <th role="columnheader" scope="col" tabindex="0" aria-colindex="4"
                                                aria-sort="none" class="">
                                                <div>Amount</div><span class="sr-only"> (Click to sort Ascending)</span>
                                            </th>
                                            <th role="columnheader" scope="col" tabindex="0" aria-colindex="5"
                                                aria-sort="none" class="">
                                                <div>Date</div><span class="sr-only"> (Click to sort Ascending)</span>
                                            </th>
                                            <th role="columnheader" scope="col" tabindex="0" aria-colindex="6"
                                                aria-sort="none" class="">
                                                <div>deposit/withdrawal</div><span class="sr-only"> (Click to sort
                                                    Ascending)</span>
                                            </th>
                                            <th role="columnheader" scope="col" tabindex="0" aria-colindex="7"
                                                aria-sort="none" class="">
                                                <div>status</div><span class="sr-only"> (Click to sort Ascending)</span>
                                            </th>
                                            <th role="columnheader" scope="col" tabindex="0" aria-colindex="8"
                                                aria-sort="none" class="">
                                                <div>Comment</div><span class="sr-only"> (Click to sort Ascending)</span>
                                            </th>
                                            <th role="columnheader" scope="col" tabindex="0" aria-colindex="9"
                                                aria-sort="none" class="">
                                                <div>receipt</div><span class="sr-only"> (Click to sort Ascending)</span>
                                            </th>
                                            <th role="columnheader" scope="col" tabindex="0" aria-colindex="10"
                                                aria-sort="none" class="">
                                                <div>reciept image</div><span class="sr-only"> (Click to sort
                                                    Ascending)</span>
                                            </th>
                                            <th role="columnheader" scope="col" tabindex="0" aria-colindex="11"
                                                aria-sort="none" class="">
                                                <div>receipt name</div><span class="sr-only"> (Click to sort
                                                    Ascending)</span>
                                            </th>
                                            <th role="columnheader" scope="col" tabindex="0" aria-colindex="12"
                                                aria-sort="none" class="">
                                                <div>action</div><span class="sr-only"> (Click to sort Ascending)</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody role="rowgroup">
                                        <!---->
                                        <tr role="row" class="">
                                            <td aria-colindex="1" role="cell" class="">
                                                <div> </div>
                                            </td>
                                            <td aria-colindex="2" role="cell" class="">
                                                <div> Cryptocurrency </div>
                                            </td>
                                            <td aria-colindex="3" role="cell" class="">7</td>
                                            <td aria-colindex="4" role="cell" class="">
                                                <div class="d-flex align-items-center"> $ 100 </div>
                                            </td>
                                            <td aria-colindex="5" role="cell" class="">
                                                <div> February 1st 2023, 8:19:08 pm </div>
                                            </td>
                                            <td aria-colindex="6" role="cell" class="">
                                                <div class="d-flex align-items-center">
                                                    <div style="width: 15px; height: 15px; border-radius: 50px;"></div>
                                                    <div class="mx-1"> Deposit </div>
                                                </div>
                                            </td>
                                            <td aria-colindex="7" role="cell" class="">
                                                <div class="d-flex align-items-center">
                                                    <div
                                                        style="width: 15px; height: 15px; border-radius: 50px; background-color: rgb(255, 87, 34);">
                                                    </div>
                                                    <div class="mx-1"> Canceled </div>
                                                </div>
                                            </td>
                                            <td aria-colindex="8" role="cell" class=""></td>
                                            <td aria-colindex="9" role="cell" class=""></td>
                                            <td aria-colindex="10" role="cell" class="">
                                                <div class="text-center"><a target="_blank"
                                                        href="#"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="20px"
                                                            height="20px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-image"
                                                            style="color: gray;">
                                                            <rect x="3" y="3" width="18"
                                                                height="18" rx="2" ry="2"></rect>
                                                            <circle cx="8.5" cy="8.5" r="1.5">
                                                            </circle>
                                                            <polyline points="21 15 16 10 5 21"></polyline>
                                                        </svg></a></div>
                                            </td>
                                            <td aria-colindex="11" role="cell" class="">USDT</td>
                                            <td aria-colindex="12" role="cell" class=""></td>
                                        </tr>
                                        <tr role="row" class="">
                                            <td aria-colindex="1" role="cell" class="">
                                                <div> </div>
                                            </td>
                                            <td aria-colindex="2" role="cell" class="">
                                                <div> Cryptocurrency </div>
                                            </td>
                                            <td aria-colindex="3" role="cell" class="">6</td>
                                            <td aria-colindex="4" role="cell" class="">
                                                <div class="d-flex align-items-center"> $ 100 </div>
                                            </td>
                                            <td aria-colindex="5" role="cell" class="">
                                                <div> February 1st 2023, 8:09:30 pm </div>
                                            </td>
                                            <td aria-colindex="6" role="cell" class="">
                                                <div class="d-flex align-items-center">
                                                    <div style="width: 15px; height: 15px; border-radius: 50px;"></div>
                                                    <div class="mx-1"> Deposit </div>
                                                </div>
                                            </td>
                                            <td aria-colindex="7" role="cell" class="">
                                                <div class="d-flex align-items-center">
                                                    <div
                                                        style="width: 15px; height: 15px; border-radius: 50px; background-color: rgb(255, 87, 34);">
                                                    </div>
                                                    <div class="mx-1"> Canceled </div>
                                                </div>
                                            </td>
                                            <td aria-colindex="8" role="cell" class=""></td>
                                            <td aria-colindex="9" role="cell" class=""></td>
                                            <td aria-colindex="10" role="cell" class="">
                                                <div class="text-center"><a target="_blank"
                                                        href="#"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="20px"
                                                            height="20px" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-image"
                                                            style="color: gray;">
                                                            <rect x="3" y="3" width="18"
                                                                height="18" rx="2" ry="2"></rect>
                                                            <circle cx="8.5" cy="8.5" r="1.5">
                                                            </circle>
                                                            <polyline points="21 15 16 10 5 21"></polyline>
                                                        </svg></a></div>
                                            </td>
                                            <td aria-colindex="11" role="cell" class="">USDT</td>
                                            <td aria-colindex="12" role="cell" class=""></td>
                                        </tr>
                                        <tr role="row" class="">
                                            <td aria-colindex="1" role="cell" class="">
                                                <div> </div>
                                            </td>
                                            <td aria-colindex="2" role="cell" class="">
                                                <div> Local Card </div>
                                            </td>
                                            <td aria-colindex="3" role="cell" class="">5</td>
                                            <td aria-colindex="4" role="cell" class="">
                                                <div class="d-flex align-items-center"> $ 100 </div>
                                            </td>
                                            <td aria-colindex="5" role="cell" class="">
                                                <div> December 19th 2022, 4:21:44 pm </div>
                                            </td>
                                            <td aria-colindex="6" role="cell" class="">
                                                <div class="d-flex align-items-center">
                                                    <div style="width: 15px; height: 15px; border-radius: 50px;"></div>
                                                    <div class="mx-1"> Deposit </div>
                                                </div>
                                            </td>
                                            <td aria-colindex="7" role="cell" class="">
                                                <div class="d-flex align-items-center">
                                                    <div
                                                        style="width: 15px; height: 15px; border-radius: 50px; background-color: rgb(76, 175, 80);">
                                                    </div>
                                                    <div class="mx-1"> Approved </div>
                                                </div>
                                            </td>
                                            <td aria-colindex="8" role="cell" class=""></td>
                                            <td aria-colindex="9" role="cell" class=""></td>
                                            <td aria-colindex="10" role="cell" class=""></td>
                                            <td aria-colindex="11" role="cell" class=""></td>
                                            <td aria-colindex="12" role="cell" class=""></td>
                                        </tr>
                                        <!---->
                                        <!---->
                                    </tbody>
                                    <!---->
                                </table>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between p-2 pagination-bar bg-white w-100">
                            <div class="color: #B9B9C3; font-size:14px;"> Showing 1 to <span>3</span> of 3 </div>
                            <ul role="menubar" aria-disabled="false" aria-label="Pagination"
                                class="pagination mb-0 b-pagination">
                                <!---->
                                <li role="presentation" aria-hidden="true" class="page-item disabled prev-item"><span
                                        role="menuitem" aria-label="Go to previous page" aria-disabled="true"
                                        class="page-link"><svg xmlns="http://www.w3.org/2000/svg" width="18px"
                                            height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-chevron-left">
                                            <polyline points="15 18 9 12 15 6"></polyline>
                                        </svg></span></li>
                                <!---->
                                <!---->
                                <li role="presentation" class="page-item active"><button role="menuitemradio"
                                        type="button" aria-label="Go to page 1" aria-checked="true" aria-posinset="1"
                                        aria-setsize="1" tabindex="0" class="page-link">1</button></li>
                                <!---->
                                <!---->
                                <li role="presentation" aria-hidden="true" class="page-item disabled next-item"><span
                                        role="menuitem" aria-label="Go to next page" aria-disabled="true"
                                        class="page-link"><svg xmlns="http://www.w3.org/2000/svg" width="18px"
                                            height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-chevron-right">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg></span></li>
                                <!---->
                            </ul>
                        </div>
                    </div>
                    <!---->
                </div>
            </div>
        </div>
    </div>
    <style>
/*! CSS Used from: Embedded */


[dir] label{margin-bottom:0.2857rem;}
input{font-family:inherit;font-size:inherit;line-height:inherit;}
[dir] input{margin:0;}
input{overflow:visible;}
.custom-file{position:relative;display:inline-block;width:100%;height:2.714rem;}
[dir] .custom-file{margin-bottom:0;}
.custom-file-input{position:relative;z-index:2;width:100%;height:2.714rem;overflow:hidden;opacity:0;}
[dir] .custom-file-input{margin:0;}
[dir] .custom-file-input:focus ~ .custom-file-label{border-color:#7367f0;box-shadow:0 3px 10px 0 rgba(34, 41, 47, 0.1);}
[dir] .custom-file-input:disabled ~ .custom-file-label{background-color:#efefef;}
.custom-file-input:lang(en) ~ .custom-file-label::after{content:"Browse";}
.custom-file-input ~ .custom-file-label[data-browse]::after{content:attr(data-browse);}
.custom-file-label{position:absolute;top:0;z-index:1;height:2.714rem;overflow:hidden;font-weight:400;line-height:1.45;color:#6e6b7b;}
[dir] .custom-file-label{padding:0.438rem 1rem;background-color:#fff;border:1px solid #d8d6de;border-radius:0.357rem;}
[dir=ltr] .custom-file-label{right:0;left:0;}
.custom-file-label::after{position:absolute;top:0;bottom:0;z-index:3;display:block;height:2.714rem;line-height:1.45;color:#6e6b7b;content:"Browse";}
[dir] .custom-file-label::after{padding:0.438rem 1rem;background-color:white;}
[dir=ltr] .custom-file-label::after{right:0;border-left:inherit;border-radius:0 0.357rem 0.357rem 0;}
.custom-file-label{transition:background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, background 0s, border-color 0s;}
@media (prefers-reduced-motion: reduce){
.custom-file-label{transition:none;}
}
.d-block{display:block!important;}
.position-relative{position:relative!important;}
@media print{
[dir] *,[dir] *::before,[dir] *::after{text-shadow:none!important;box-shadow:none!important;}
}
label{color:#5e5873;font-size:0.857rem;}
.custom-file-label{line-height:1.75;height:2.714rem!important;}
.custom-file-label:after{height:2.58rem;line-height:1.75;}
.custom-file-label{white-space:nowrap;overflow-x:hidden;}
.b-form-file .custom-file-label{height:100%!important;}
.custom-file-label{height:calc(1.65em + 1.4rem + 1px);}


    </style>
@endsection
