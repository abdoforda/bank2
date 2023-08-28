@extends('panel.app')

@section('content')
<style>
    .upload-documents .btn.btn-next.active{
        background: #8149e8 !important;
        margin: 14px;
        padding: 10px;
        color: #fff;
        cursor: pointer !important;
    }
    .upload-documents .btn.btn-next.active:hover{
        color: #fff;
        cursor: pointer !important;
        
    }
</style>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="upload-documents">
            <form id="w0" action="{{ route('updateDocProfile', app()->getLocale()) }}" method="post">
                @csrf
                
                <div class=" active upload-documents__window upload-documents__window__fiels">
                    <div class="col-lg-12 verification-status_dashbord">
                        <div class="verification-status_dashbord_header">
                            <div class="verification-status__title">Verification status</div>
                        </div>

                        <div class="verification-status_visual verification-status_visual__icon-25">
                            <span class="verification-status_visual__icon"><span>25</span>%</span>
                        </div>
                    </div>
                    <div class="upload-documents__container">
                        <h2 class="h2"><span>Upload</span> Your Documents</h2>
                        <div class="upload-doc-wrap">
                            <div class="upload-doc-top">
                                <div class="account-score_btn__block">
                                    <div class="account-score_btn account-score_btn__active" data-id="num01">Identity
                                        Verification</div>
                                    <div class="account-score_btn" data-id="num02">Address Verification</div>
                                </div>
                                <div class="text" id="upload-documents_descript" style="">You Can Choose and Upload
                                    Only One of Them</div>
                            </div>

                            <div class="upload-choose-wrap">
                                <div class="">
                                    <div class="account-score__tab-block account-score__tab-block__active" id="num01">

                                        <div class="upload-documents_ind-verification" title="Passport" style=""
                                            id="images1">
                                            <div data-id="showIdNum1"
                                                class="imgClick upload-documents_ind-verification_item upload-documents_ind-verification_item__checked">
                                                <img src="{{ asset('/images/new_images/svg/panel/upload_documints/passport2.svg') }}"
                                                    alt="Passport">
                                                <div class="upload-documents_ind-verification_item__title">Passport</div>

                                            </div>
                                            <div data-id="showIdNum2"
                                                class="imgClick upload-documents_ind-verification_item" title="National ID">
                                                <img src="{{ asset('/images/new_images/svg/panel/upload_documints/enirates-id2.svg') }}"
                                                    alt="National ID">
                                                <div class="upload-documents_ind-verification_item__title">National ID</div>

                                            </div>
                                            <div data-id="showIdNum3"
                                                class="imgClick upload-documents_ind-verification_item"
                                                title="Driving License">
                                                <img src="{{ asset('/images/new_images/svg/panel/upload_documints/driving2.svg') }}"
                                                    alt="Driving License">
                                                <div class="upload-documents_ind-verification_item__title">Driving License
                                                </div>

                                            </div>
                                        </div>

                                        <div class="">

                                            <div id="showIdNum1"class="upload-documents_ind-verification__loaded-block"
                                                style="display: none;">
                                                <div class="text-center"><b>Upload Your Passport</b></div>
                                                <div class="belleo-block upload-drag">
                                                    <div class="upload-drag-dash">
                                                        <div class="text-center">
                                                            <div class="form-group field-uploadform-documents-passport">

                                                                <input type="hidden" class="fileUpload"
                                                                    name="passport" value="">
                                                                <div class="file-input file-input-ajax-new">
                                                                    <div class="file-preview file-preview_upload-documents">
                                                                        <div class="file-drop-zone clickable"
                                                                            tabindex="-1">
                                                                            <div class="file-drop-zone-title">Drag &amp;
                                                                                drop files here …<br>(or click to select
                                                                                files)</div>
                                                                            <div
                                                                                class="file-preview-thumbnails hide-content">
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                            <div
                                                                                class="file-preview-status text-center text-success">
                                                                            </div>
                                                                            <div class="kv-fileinput-error file-error-message"
                                                                                style="display: none;"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="kv-upload-progress"
                                                                        style="display: none;">
                                                                        <div class="progress">
                                                                            <div class="progress-bar bg-success progress-bar-success progress-bar-striped active"
                                                                                role="progressbar" aria-valuenow="0"
                                                                                aria-valuemin="0" aria-valuemax="100"
                                                                                style="width:0%;">
                                                                                0%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <button type="button" tabindex="500"
                                                                        title="Clear selected files"
                                                                        class="btn_remove-files fileinput-remove fileinput-remove-button">
                                                                    </button>


                                                                    <div tabindex="500" class="btn_add-files btn-file">
                                                                        <div
                                                                            class="upload-documents_ind-verification_bnt_files">
                                                                            <img src="{{ asset('/images/new_images/svg/panel/upload_documints/cloud-1.svg') }}"
                                                                                alt="Max 10Mb per file. Only .jpg, .jpeg, .png, .pdf">
                                                                        </div> <span class="hidden-xs">
                                                                            <div class="color-grey ">Drag file here or
                                                                                <span class="color-blue">Browse file</span>
                                                                            </div>
                                                                            <p class="type-files__info">Max 10Mb per file.
                                                                                Only .jpg, .jpeg, .png, .pdf</p>
                                                                        </span><input type="file"
                                                                            id="uploadform-documents-passport"
                                                                            class="form-control fileUpload"
                                                                            name="passport"
                                                                            multiple=""
                                                                            data-krajee-fileinput="fileinput_d7c567b2">
                                                                    </div>
                                                                </div>
                                                                <!--[if lt IE 10]><br><div class="alert alert-warning"><strong>Note:</strong> Your browser does not support file preview and multiple file upload. Try an alternative or more recent browser to access these features.</div><script>
                                                                    document.getElementById("uploadform-documents-passport").className.replace(/\bfile-loading\b/, "");;
                                                                </script><![endif]-->

                                                                <div class="help-block"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="showIdNum2"class="upload-documents_ind-verification__loaded-block"
                                                style="display: none;">
                                                <div class="text-center"><b>Upload Your Emirates ID</b></div>
                                                <div class="belleo-block upload-drag">
                                                    <div class="upload-drag-dash">
                                                        <div class="text-center">
                                                            <div class="form-group field-uploadform-documents-emirates_id">

                                                                <input type="hidden" class="fileUpload"
                                                                    name="emirates_id"
                                                                    value="">
                                                                <div class="file-input file-input-ajax-new">
                                                                    <div
                                                                        class="file-preview file-preview_upload-documents">
                                                                        <div class="file-drop-zone clickable"
                                                                            tabindex="-1">
                                                                            <div class="file-drop-zone-title">Drag &amp;
                                                                                drop files here …<br>(or click to select
                                                                                files)</div>
                                                                            <div
                                                                                class="file-preview-thumbnails hide-content">
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                            <div
                                                                                class="file-preview-status text-center text-success">
                                                                            </div>
                                                                            <div class="kv-fileinput-error file-error-message"
                                                                                style="display: none;"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="kv-upload-progress"
                                                                        style="display: none;">
                                                                        <div class="progress">
                                                                            <div class="progress-bar bg-success progress-bar-success progress-bar-striped active"
                                                                                role="progressbar" aria-valuenow="0"
                                                                                aria-valuemin="0" aria-valuemax="100"
                                                                                style="width:0%;">
                                                                                0%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <button type="button" tabindex="500"
                                                                        title="Clear selected files"
                                                                        class="btn_remove-files fileinput-remove fileinput-remove-button">
                                                                    </button>


                                                                    <div tabindex="500" class="btn_add-files btn-file">
                                                                        <div
                                                                            class="upload-documents_ind-verification_bnt_files">
                                                                            <img src="{{ asset('/images/new_images/svg/panel/upload_documints/cloud-1.svg') }}"
                                                                                alt="Max 10Mb per file. Only .jpg, .jpeg, .png, .pdf">
                                                                        </div> <span class="hidden-xs">
                                                                            <div class="color-grey ">Drag file here or
                                                                                <span class="color-blue">Browse file</span>
                                                                            </div>
                                                                            <p class="type-files__info">Max 10Mb per file.
                                                                                Only .jpg, .jpeg, .png, .pdf</p>
                                                                        </span><input type="file"
                                                                            id="uploadform-documents-emirates_id"
                                                                            class="form-control fileUpload"
                                                                            name="emirates_id"
                                                                            multiple=""
                                                                            data-krajee-fileinput="fileinput_d7c567b2">
                                                                    </div>
                                                                </div>
                                                                <!--[if lt IE 10]><br><div class="alert alert-warning"><strong>Note:</strong> Your browser does not support file preview and multiple file upload. Try an alternative or more recent browser to access these features.</div><script>
                                                                    document.getElementById("uploadform-documents-emirates_id").className.replace(/\bfile-loading\b/, "");;
                                                                </script><![endif]-->

                                                                <div class="help-block"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="showIdNum3"class="upload-documents_ind-verification__loaded-block"
                                                style="display: none;">
                                                <div class="text-center"><b>Upload Your Driving license</b></div>
                                                <div class="belleo-block upload-drag">
                                                    <div class="upload-drag-dash">
                                                        <div class="text-center">
                                                            <div
                                                                class="form-group field-uploadform-documents-driving_license">

                                                                <input type="hidden" class="fileUpload"
                                                                    name="driving_license"
                                                                    value="">
                                                                <div class="file-input file-input-ajax-new">
                                                                    <div
                                                                        class="file-preview file-preview_upload-documents">
                                                                        <div class="file-drop-zone clickable"
                                                                            tabindex="-1">
                                                                            <div class="file-drop-zone-title">Drag &amp;
                                                                                drop files here …<br>(or click to select
                                                                                files)</div>
                                                                            <div
                                                                                class="file-preview-thumbnails hide-content">
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                            <div
                                                                                class="file-preview-status text-center text-success">
                                                                            </div>
                                                                            <div class="kv-fileinput-error file-error-message"
                                                                                style="display: none;"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="kv-upload-progress"
                                                                        style="display: none;">
                                                                        <div class="progress">
                                                                            <div class="progress-bar bg-success progress-bar-success progress-bar-striped active"
                                                                                role="progressbar" aria-valuenow="0"
                                                                                aria-valuemin="0" aria-valuemax="100"
                                                                                style="width:0%;">
                                                                                0%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <button type="button" tabindex="500"
                                                                        title="Clear selected files"
                                                                        class="btn_remove-files fileinput-remove fileinput-remove-button">
                                                                    </button>


                                                                    <div tabindex="500" class="btn_add-files btn-file">
                                                                        <div
                                                                            class="upload-documents_ind-verification_bnt_files">
                                                                            <img src="{{ asset('/images/new_images/svg/panel/upload_documints/cloud-1.svg') }}"
                                                                                alt="Max 10Mb per file. Only .jpg, .jpeg, .png, .pdf">
                                                                        </div> <span class="hidden-xs">
                                                                            <div class="color-grey ">Drag file here or
                                                                                <span class="color-blue">Browse file</span>
                                                                            </div>
                                                                            <p class="type-files__info">Max 10Mb per file.
                                                                                Only .jpg, .jpeg, .png, .pdf</p>
                                                                        </span><input type="file"
                                                                            id="uploadform-documents-driving_license"
                                                                            class="form-control fileUpload"
                                                                            name="driving_license"
                                                                            multiple=""
                                                                            data-krajee-fileinput="fileinput_d7c567b2">
                                                                    </div>
                                                                </div>
                                                                <!--[if lt IE 10]><br><div class="alert alert-warning"><strong>Note:</strong> Your browser does not support file preview and multiple file upload. Try an alternative or more recent browser to access these features.</div><script>
                                                                    document.getElementById("uploadform-documents-driving_license").className.replace(/\bfile-loading\b/, "");;
                                                                </script><![endif]-->

                                                                <div class="help-block"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="upload-documents_info-block">
                                            <div class="info-block">
                                                <div class="upload-doc-icon">
                                                    <div class="image-circle">
                                                        <img src="{{ asset('/images/new_images/svg/panel/upload_documints/doc2.svg') }}"
                                                            alt="documents">
                                                    </div>
                                                    <img src="{{ asset('/images/new_images/svg/panel/upload_documints/doc2-1.svg') }}"
                                                        alt="documents">
                                                </div>
                                                <div class="upload-doc-info">
                                                    <div class="d-flex flex-column-reverse flex-md-row">
                                                        <div class="upload-documents_info-block__list_outer">
                                                            <div class="mb-3">
                                                                <img class="upload-documents_info-block__icon d-none"
                                                                    src="{{ asset('/images/new_images/svg/panel/upload_documints/doc.svg') }}"
                                                                    alt="documents"> <b>The documents should clearly
                                                                    show:</b>
                                                            </div>
                                                            <div class="d-flex">
                                                                <ul
                                                                    class="upload-documents_info-block__list identity-list">
                                                                    <li>Your full name</li>
                                                                    <li>Your photo</li>
                                                                    <li>Date of birth</li>
                                                                    <li>Expiry date</li>
                                                                    <li>Document number</li>
                                                                    <li>Your signature</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="upload-documents__control-block upload-btns-control"
                                            style="display: none;" id="backBtn1">
                                            <span class="btn btn-medium btn-back" style="display: inline;"><i
                                                    class="icon_btn-back"></i><b>Back</b></span>
                                            <button type="submit" class="bts01 btn btn-next btn-preloader" disabled="disabled"
                                                style="display: inline-block;">
                                                SUBMIT
                                                <i class="icon_btn-back next"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="account-score__tab-block" id="num02">

                                        <div class="upload-documents_ind-verification" title="Bank Statement"
                                            id="images2">
                                            <div data-id="showIdNum4"
                                                class="imgClick upload-documents_ind-verification_item">
                                                <img src="{{ asset('/images/new_images/svg/panel/upload_documints/bank2.svg') }}"
                                                    alt="Bank Statement">
                                                <div class="upload-documents_ind-verification_item__title">Bank Statement
                                                </div>

                                            </div>
                                            <div data-id="showIdNum5"
                                                class="imgClick upload-documents_ind-verification_item"
                                                title="Utility Bill">
                                                <img src="{{ asset('/images/new_images/svg/panel/upload_documints/bill2.svg') }}"
                                                    alt="Utility Bill">
                                                <div class="upload-documents_ind-verification_item__title">Utility Bill
                                                </div>

                                            </div>
                                            <div data-id="showIdNum6"
                                                class="imgClick upload-documents_ind-verification_item"
                                                title="Other Documents">
                                                <img src="{{ asset('/images/new_images/svg/panel/upload_documints/oth-doc2.svg') }}"
                                                    alt="Other Documents">
                                                <div class="upload-documents_ind-verification_item__title">Other Documents
                                                </div>

                                            </div>
                                        </div>

                                        <div class="">

                                            <div id="showIdNum4" class="upload-documents_ind-verification__loaded-block "
                                                style="display: none;">
                                                <div class="text-center"><b>Upload Your Bank statement</b></div>
                                                <div class="belleo-block upload-drag">
                                                    <div class="upload-drag-dash">
                                                        <div class="text-center">
                                                            <div
                                                                class="form-group field-uploadform-statement_documents-bank_statement">

                                                                <input type="hidden" class="fileUpload"
                                                                    name="bank_statement"
                                                                    value="">
                                                                <div class="file-input file-input-ajax-new">
                                                                    <div
                                                                        class="file-preview file-preview_upload-documents">
                                                                        <div class="file-drop-zone clickable"
                                                                            tabindex="-1">
                                                                            <div class="file-drop-zone-title">Drag &amp;
                                                                                drop files here …<br>(or click to select
                                                                                files)</div>
                                                                            <div
                                                                                class="file-preview-thumbnails hide-content">
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                            <div
                                                                                class="file-preview-status text-center text-success">
                                                                            </div>
                                                                            <div class="kv-fileinput-error file-error-message"
                                                                                style="display: none;"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="kv-upload-progress"
                                                                        style="display: none;">
                                                                        <div class="progress">
                                                                            <div class="progress-bar bg-success progress-bar-success progress-bar-striped active"
                                                                                role="progressbar" aria-valuenow="0"
                                                                                aria-valuemin="0" aria-valuemax="100"
                                                                                style="width:0%;">
                                                                                0%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <button type="button" tabindex="500"
                                                                        title="Clear selected files"
                                                                        class="btn_remove-files fileinput-remove fileinput-remove-button">
                                                                    </button>


                                                                    <div tabindex="500" class="btn_add-files btn-file">
                                                                        <div
                                                                            class="upload-documents_ind-verification_bnt_files">
                                                                            <img src="{{ asset('/images/new_images/svg/panel/upload_documints/cloud-1.svg') }}"
                                                                                alt="Max 10Mb per file. Only .jpg, .jpeg, .png, .pdf">
                                                                        </div> <span class="hidden-xs">
                                                                            <div class="color-grey ">Drag file here or
                                                                                <span class="color-blue">Browse file</span>
                                                                            </div>
                                                                            <p class="type-files__info">Max 10Mb per file.
                                                                                Only .jpg, .jpeg, .png, .pdf</p>
                                                                        </span><input type="file"
                                                                            id="uploadform-statement_documents-bank_statement"
                                                                            class="form-control fileUpload"
                                                                            name="bank_statement"
                                                                            multiple=""
                                                                            data-krajee-fileinput="fileinput_d7c567b2">
                                                                    </div>
                                                                </div>
                                                                <!--[if lt IE 10]><br><div class="alert alert-warning"><strong>Note:</strong> Your browser does not support file preview and multiple file upload. Try an alternative or more recent browser to access these features.</div><script>
                                                                    document.getElementById("uploadform-statement_documents-bank_statement").className.replace(/\bfile-loading\b/, "");;
                                                                </script><![endif]-->

                                                                <div class="help-block"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="showIdNum5" class="upload-documents_ind-verification__loaded-block"
                                                style="display: none;">
                                                <div class="text-center"><b>Upload Your Utility Bill</b></div>
                                                <div class="belleo-block upload-drag">
                                                    <div class="upload-drag-dash">
                                                        <div class="text-center">
                                                            <div
                                                                class="form-group field-uploadform-documents-utility_bill">

                                                                <input type="hidden" class="fileUpload"
                                                                    name="utility_bill"
                                                                    value="">
                                                                <div class="file-input file-input-ajax-new">
                                                                    <div
                                                                        class="file-preview file-preview_upload-documents">
                                                                        <div class="file-drop-zone clickable"
                                                                            tabindex="-1">
                                                                            <div class="file-drop-zone-title">Drag &amp;
                                                                                drop files here …<br>(or click to select
                                                                                files)</div>
                                                                            <div
                                                                                class="file-preview-thumbnails hide-content">
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                            <div
                                                                                class="file-preview-status text-center text-success">
                                                                            </div>
                                                                            <div class="kv-fileinput-error file-error-message"
                                                                                style="display: none;"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="kv-upload-progress"
                                                                        style="display: none;">
                                                                        <div class="progress">
                                                                            <div class="progress-bar bg-success progress-bar-success progress-bar-striped active"
                                                                                role="progressbar" aria-valuenow="0"
                                                                                aria-valuemin="0" aria-valuemax="100"
                                                                                style="width:0%;">
                                                                                0%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <button type="button" tabindex="500"
                                                                        title="Clear selected files"
                                                                        class="btn_remove-files fileinput-remove fileinput-remove-button">
                                                                    </button>


                                                                    <div tabindex="500" class="btn_add-files btn-file">
                                                                        <div
                                                                            class="upload-documents_ind-verification_bnt_files">
                                                                            <img src="{{ asset('/images/new_images/svg/panel/upload_documints/cloud-1.svg') }}"
                                                                                alt="Max 10Mb per file. Only .jpg, .jpeg, .png, .pdf">
                                                                        </div> <span class="hidden-xs">
                                                                            <div class="color-grey ">Drag file here or
                                                                                <span class="color-blue">Browse file</span>
                                                                            </div>
                                                                            <p class="type-files__info">Max 10Mb per file.
                                                                                Only .jpg, .jpeg, .png, .pdf</p>
                                                                        </span><input type="file"
                                                                            id="uploadform-documents-utility_bill"
                                                                            class="form-control fileUpload"
                                                                            name="utility_bill"
                                                                            multiple=""
                                                                            data-krajee-fileinput="fileinput_d7c567b2">
                                                                    </div>
                                                                </div>
                                                                <!--[if lt IE 10]><br><div class="alert alert-warning"><strong>Note:</strong> Your browser does not support file preview and multiple file upload. Try an alternative or more recent browser to access these features.</div><script>
                                                                    document.getElementById("uploadform-documents-utility_bill").className.replace(/\bfile-loading\b/, "");;
                                                                </script><![endif]-->

                                                                <div class="help-block"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="showIdNum6" class="upload-documents_ind-verification__loaded-block"
                                                style="display: none;">
                                                <div class="text-center"><b>Upload Your Other documents</b></div>
                                                <div class="belleo-block upload-drag">
                                                    <div class="upload-drag-dash">
                                                        <div class="text-center">
                                                            <div
                                                                class="form-group field-uploadform-documents-other_documents">

                                                                <input type="hidden" class="fileUpload"
                                                                    name="other_documents"
                                                                    value="">
                                                                <div class="file-input file-input-ajax-new">
                                                                    <div
                                                                        class="file-preview file-preview_upload-documents">
                                                                        <div class="file-drop-zone clickable"
                                                                            tabindex="-1">
                                                                            <div class="file-drop-zone-title">Drag &amp;
                                                                                drop files here …<br>(or click to select
                                                                                files)</div>
                                                                            <div
                                                                                class="file-preview-thumbnails hide-content">
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                            <div
                                                                                class="file-preview-status text-center text-success">
                                                                            </div>
                                                                            <div class="kv-fileinput-error file-error-message"
                                                                                style="display: none;"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="kv-upload-progress"
                                                                        style="display: none;">
                                                                        <div class="progress">
                                                                            <div class="progress-bar bg-success progress-bar-success progress-bar-striped active"
                                                                                role="progressbar" aria-valuenow="0"
                                                                                aria-valuemin="0" aria-valuemax="100"
                                                                                style="width:0%;">
                                                                                0%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <button type="button" tabindex="500"
                                                                        title="Clear selected files"
                                                                        class="btn_remove-files fileinput-remove fileinput-remove-button">
                                                                    </button>


                                                                    <div tabindex="500" class="btn_add-files btn-file">
                                                                        <div
                                                                            class="upload-documents_ind-verification_bnt_files">
                                                                            <img src="{{ asset('/images/new_images/svg/panel/upload_documints/cloud-1.svg') }}"
                                                                                alt="Max 10Mb per file. Only .jpg, .jpeg, .png, .pdf">
                                                                        </div> <span class="hidden-xs">
                                                                            <div class="color-grey ">Drag file here or
                                                                                <span class="color-blue">Browse file</span>
                                                                            </div>
                                                                            <p class="type-files__info">Max 10Mb per file.
                                                                                Only .jpg, .jpeg, .png, .pdf</p>
                                                                        </span><input type="file"
                                                                            id="uploadform-documents-other_documents"
                                                                            class="form-control fileUpload"
                                                                            name="other_documents"
                                                                            multiple=""
                                                                            data-krajee-fileinput="fileinput_d7c567b2">
                                                                    </div>
                                                                </div>

                                                                <div class="help-block"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="upload-documents_info-block">
                                            <div class="info-block">
                                                <div class="upload-doc-icon">
                                                    <div class="image-circle">
                                                        <img src="{{ asset('/images/new_images/svg/panel/upload_documints/doc2.svg') }}"
                                                            alt="documents">
                                                    </div>
                                                    <img src="{{ asset('/images/new_images/svg/panel/upload_documints/doc2-1.svg') }}"
                                                        alt="documents">
                                                </div>
                                                <div class="upload-doc-info">
                                                    <div class="d-flex flex-column-reverse flex-md-row">
                                                        <div class="upload-documents_info-block__list_outer">
                                                            <div class="mb-3">
                                                                <img class="upload-documents_info-block__icon d-none"
                                                                    src="{{ asset('/images/new_images/svg/panel/upload_documints/doc.svg') }}"
                                                                    alt="documents"> <b>The documents should clearly
                                                                    show:</b>
                                                            </div>
                                                            <div class="d-flex">
                                                                <ul class="upload-documents_info-block__list">
                                                                    <li>Your full name</li>
                                                                    <li>Date</li>
                                                                    <li>Name of Company/Bank</li>
                                                                    <li>Residential Adress</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="upload-documents__control-block upload-btns-control"
                                            style="display: none;" id="backBtn2">
                                            <span class="btn btn-medium btn-back"><i
                                                    class="icon_btn-back"></i><b>Back</b></span>
                                            <button type="submit" class="bts01 btn btn-next btn-preloader"
                                                disabled="disabled">
                                                SUBMIT
                                                <i class="icon_btn-back next"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @include('panel.components.css')
@endsection

@section('js')
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var isSubmit = false;
        var idShow = '';
        $(function() {
            $(".account-score_btn").click(function() {
                $(".account-score_btn").removeClass("account-score_btn__active");
                $(this).addClass("account-score_btn__active");
                $(".account-score__tab-block").removeClass('account-score__tab-block__active');
                $("#" + $(this).data('id')).addClass('account-score__tab-block__active');
                $("#backBtn1 .btn-back").focus().click();
                $("#backBtn2 .btn-back").focus().click();
            });

            $(".imgClick").click(function() {
                $(".upload-documents__control-block").css({
                    "display": "none"
                });
                $(".upload-documents_ind-verification").slideUp();
                idShow = $(this).data('id');
                $("#" + idShow).slideDown();

                if ($(this).data('id') == 'showIdNum1' || $(this).data('id') == 'showIdNum2' || $(this)
                    .data('id') == 'showIdNum3') {
                    $("#backBtn1").css({
                        "display": "flex"
                    });
                } else {
                    $("#backBtn2").css({
                        "display": "flex"
                    });
                }
            });

            $("#backBtn1 .btn-back").click(function() {
                $("#backBtn1").slideUp();
                $("#" + idShow).slideUp();
                $("#images1").slideDown();
                $("#images2").slideDown();
            });

            $("#backBtn2 .btn-back").click(function() {
                $("#backBtn2").slideUp();
                $("#" + idShow).slideUp();
                $("#images1").slideDown();
                $("#images2").slideDown();
            });

            $(".file-drop-zone.clickable").click(function() {
                $(this).closest(".form-group").find("input").focus().click();
            });

        });
    </script>
    <script>
        $(function() {

            

            // preventing page from redirecting
            $("html").on("dragover", function(e) {
                e.preventDefault();
                e.stopPropagation();
                $(".color-blue").text("Drag here");
            });

            $("html").on("drop", function(e) {
                e.preventDefault();
                e.stopPropagation();
                $(".color-blue").text("Browse file");
            });

            // Drag enter
            $('.upload-drag-dash').on('dragenter', function(e) {
                e.stopPropagation();
                e.preventDefault();
                $(this).addClass('active');
                $(".color-blue").text("Drop");
            });

            // Drag over
            $('.upload-drag-dash').on('dragover', function(e) {
                e.stopPropagation();
                e.preventDefault();
                $(this).addClass('active');
                $(".color-blue").text("Drop");
            });

            // Drag leave
            $('.upload-drag-dash').on('dragleave', function(e) {
                e.stopPropagation();
                e.preventDefault();
                $(this).removeClass('active');
                $(".color-blue").text("Drag here");
            });

            // Drop
            $('.upload-drag-dash').on('drop', function(e) {
                var nameInput = $(this).closest(".upload-drag").find("input").attr("name");
                e.stopPropagation();
                e.preventDefault();
                $(".color-blue").text("Upload");
                var files = e.originalEvent.dataTransfer.files;
                handleFiles(files, nameInput);
            });

            // file selected
            $(".fileUpload").change(handleFileInput);
        });

        function handleFileInput(e) {
            var nameInput = $(this).closest(".upload-drag").find("input").attr("name");
                var files = e.target.files;
                handleFiles(files, nameInput);
            }

        function handleFiles(files, nameInput) {
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var validExtensions = ['jpg', 'jpeg', 'png', 'pdf'];
                var maxSize = 10 * 1024 * 1024; // 10MB

                // Check file extension
                var fileExtension = file.name.split('.').pop().toLowerCase();
                if ($.inArray(fileExtension, validExtensions) === -1) {
                    toast({
                        "message": "{{ __('Invalid file extension. Only .jpg, .jpeg, png, and .pdf files are allowed.') }}"
                    });
                    continue;
                }

                // Check file size
                if (file.size > maxSize) {
                    toast({
                        "message": "{{ __('File too large. File must be less than 10MB.') }}"
                    });
                    continue;
                }
                // Perform file upload using Ajax
                uploadFile(file, nameInput);
            }
        }

        
        function uploadFile(file, nameInput) {

            var progressBar = $("input[name='" + nameInput + "']").closest(".upload-drag").find(".kv-upload-progress");
            var progressBarFill = $("input[name='" + nameInput + "']").closest(".upload-drag").find(".progress-bar");
            progressBar.css('display', 'block');

                var formData = new FormData();
                formData.append(nameInput, file);
                formData.append("_token", "{{ csrf_token() }}");

                
                $.ajax({
                    url: '',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener('progress', function(e) {
                            if (e.lengthComputable) {
                                var percent = (e.loaded / e.total) * 100;
                                progressBarFill.css('width', percent + '%');
                                progressBarFill.text(percent.toFixed(2) + '%');
                            }
                        }, false);
                        return xhr;
                    },
                    success: function(response) {
                        progressBar.slideUp();
                        var ddd = response.split("^");
                        isSubmit = true;
                        checkSubmit();
                    },
                    error: function(xhr, status, error) {
                        progressBar.slideUp();
                        console.error('Error uploading file:', error);
                        // Handle the error or display an error message
                    },
                    complete: function(dataa) {
                        if(dataa.status == 422){
                            toast({
                                "message": dataa.responseJSON.errors[nameInput][0]
                            });
                        }
                        progressBar.slideUp();
                        console.log(dataa);
                        progressBarFill.css('width', '0');
                    }
                });
            }
        

        function toast(json) {
            if (json.redirect) {
                Swal.fire({
                    title: json.message,
                    showCancelButton: true,
                    confirmButtonText: json.confirmText,
                    cancelButtonText: okk,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = json.redirect;
                    }
                });
                return;
            }

            Swal.fire({
                title: json.message,
                confirmButtonText: okk,
            });
        }
        function checkSubmit() {
            $(".bts01").removeClass('active');
            if (isSubmit) {
                $(".bts01").removeAttr('disabled').addClass('active');
                return;
            }
            return;
            $(".bts01").attr('disabled', 'disabled');
        }
    </script>

<script src="{{asset('js/main.js')}}"></script>
<script src="{{ asset('js/ajax.form.js') }}"></script>
    <script>
        $(document).ready(function(e) {

var old_html;
var new_html = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span class="sr-only"></span>';

var forms = $("#w0");
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
                return;
            }
            if(data.status == 401){
                toast(data.responseJSON);
                return;
            }
            
            toast(data.responseJSON);
        }
});
});
    </script>
@endsection
