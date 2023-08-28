<style>
    
:root{
    --hr-color-2: #2B63AD;
    --white:#fff;
}


.upload-documents_ind-verification_item__checked,.upload-documents_ind-verification_item:hover{box-shadow:6px 6px 16px #D0DFEF!important;}
.account-score_btn__block{display:flex;justify-content:center;gap:90px;}
.account-score_btn{font-family:'Effra', sans-serif;font-style:normal;font-weight:500;font-size:18px;line-height:24px;color:#070417;text-align:center;padding:10px;cursor:pointer;position:relative;border-radius:4px;border:1px solid #070417;transition:all 0.4s;}
.account-score_btn:hover{color:#2B63AD;}
.account-score_btn__active{background:linear-gradient(90deg, #2B63AD 0%, #2B63AD 100.02%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;border:1px solid #2B63AD;border-radius:4px;}
.account-score__tab-block{display:none;}
.account-score__tab-block__active{display:block;}
.upload-documents .h2{margin-top:-20px!important;}
.upload-documents .account-score_btn{padding:10px 15px;font-weight:400;border:2px solid #E5EDF5;}
.upload-documents .account-score_btn__active{font-weight:500;}
.upload-documents .upload-documents__window{display:none;}
.upload-documents .upload-documents__window.active{display:block;}
.upload-documents .account-score_btn{width:auto;}
.upload-documents .account-score_btn__block{border-bottom:1px solid var(--border-color);}
.upload-documents_ind-verification{display:flex;justify-content:center;}
.upload-documents_ind-verification_item{box-shadow:6px 6px 14px #a5aab733;height:200px;width:200px;display:flex;align-items:center;justify-content:center;flex-direction:column;background:#fff;margin:10px;cursor:pointer;transition:all 0.4s;}
.upload-documents_ind-verification_item__title{font-size:16px;font-weight:600;}
.upload-documents_info-block{margin-top:60px;}
.upload-documents_info-block__list_outer{flex:1 0 auto;}
.upload-documents_info-block__list{flex:1 0 50%;line-height:26px;max-width:190px;}
.upload-documents_info-block__list li{list-style:disc;}
.upload-documents_ind-verification_bnt_files{display:flex;background:#F4F5F7;border-radius:3px;height:71px;width:71px;margin:10px auto;align-items:center;justify-content:center;}
.upload-documents_ind-verification__loaded-block{font-family:Poppins;display:none;}
.upload-documents_ind-verification__loaded-block .file-input .color-blue{transition:all 0.4s;}
.upload-documents_ind-verification__loaded-block .file-input:hover  .color-blue{color:#92c0e6;}
.file-preview_upload-documents{border:none!important;padding:0!important;margin-bottom:0!important;position:relative;z-index:10;}
.file-preview_upload-documents .file-drop-zone{border:none;vertical-align:middle;margin:0;padding:0;}
.file-preview_upload-documents  .file-drop-zone.clickable:hover{border:none!important;}
.file-preview_upload-documents .file-drop-zone-title{opacity:0;padding-bottom:40px;}
.upload-documents .btn_add-files{position:absolute;top:0;width:100%;z-index:1;}
.upload-documents .btn_remove-files{background:url(/images/new_images/svg/panel/upload_documints/icon/remove-file.svg) no-repeat center;display:block;width:20px;height:20px;border:none;border-radius:50%;color:#fff;position:absolute;right:10px;top:0px;z-index:10;cursor:pointer;}
.type-files__info{font-size:13px;color:var(--grey-text);font-style:italic;text-align:center;font-family:Poppins;margin-top:10px;}
.upload-documents .form-group{margin-bottom:0;}
.upload-documents__control-block{display:flex;}
.upload-documents__control-block .btn-back,.upload-documents__control-block .btn-next{display:none;}
.upload-documents__control-block .btn-next{background:#eee!important;border:1px solid transparent!important;box-shadow:none!important;cursor:auto!important;}
.upload-documents__control-block .btn.btn-preloader{background:linear-gradient(90deg, #2B63AD 0%, #2B63AD 100.02%);border-radius:4px;font-family:'Effra', sans-serif;font-style:normal;font-weight:500;font-size:18px;line-height:24px;color:#FFFFFF;padding:16px 10px;max-width:200px;width:100%;transition:all ease-in-out .4s;}
.upload-documents__control-block .btn.btn-preloader .icon_btn-back.next{display:none;}
.upload-documents__control-block .btn.btn-preloader:hover{background:transparent;color:#6B2AC8;border:2px solid var(--hr-color-2);}
.icon_btn-back{background:url(/images/new_images/svg/panel/upload_documints/arrow-back.svg) no-repeat 6px 2px;width:20px;height:20px;display:inline-block;}
.file-preview .clickable{transition:all .4s ease-in-out;}
.file-preview .clickable:hover{background:#EE743B20;}
.upload-documents .h2{font-family:'Effra', sans-serif;font-style:normal;font-weight:500;font-size:24px;line-height:34px;color:#000000;margin-bottom:24px;}
.upload-documents .upload-documents__container{margin-top:80px;}
.upload-documents .upload-doc-top{margin-bottom:24px;}
.upload-documents .upload-doc-top .text{font-family:'Effra', sans-serif;font-style:normal;font-weight:400;font-size:18px;line-height:34px;text-align:center;text-transform:capitalize;color:#000000;}
.upload-documents .upload-doc-top .account-score_btn__block{max-width:500px;margin-left:auto;margin-right:auto;gap:20px;margin-bottom:40px;}
.upload-documents .upload-doc-top .account-score_btn{font-weight:700;width:100%;max-width:240px;padding:16px 10px;border:2px solid #070417;border-radius:4px;cursor:pointer;}
.upload-documents .upload-doc-top  .account-score_btn__active{border:2px solid var(--hr-color-2);}
.upload-documents .upload-documents_ind-verification{max-width:510px;margin:0 auto;justify-content:space-between;flex-wrap:wrap;}
.upload-documents .upload-choose-wrap .upload-documents_ind-verification_item{margin:0;background:linear-gradient(90deg, #2B63AD 0%, #2B63AD 100.02%);box-shadow:0px 1px 3px rgb(0 0 0 / 8%);border-radius:12px;max-width:156px;width:100%;height:156px;padding:28px 22px 24px 22px;justify-content:space-between;}
.upload-documents .upload-documents_ind-verification_item__title{font-family:'Effra', sans-serif;font-style:normal;font-weight:400;font-size:14px;line-height:17px;display:flex;align-items:center;color:var(--white);}
.upload-documents .upload-documents__control-block{display:none;}
.upload-documents .upload-documents_info-block{margin-top:24px;margin-left:auto;margin-right:auto;background:#FFFFFF;box-shadow:0px 1px 3px rgba(0, 0, 0, 0.08);border-radius:12px;max-width:390px;padding:20px;}
.upload-documents .upload-documents_info-block .image-circle{background:linear-gradient(90deg, #2B63AD 0%, #2B63AD 100.02%);border-radius:8px;width:48px;height:48px;display:flex;align-items:center;justify-content:center;}
.upload-documents .upload-documents_info-block .upload-doc-icon{display:flex;align-items:flex-start;justify-content:space-between;margin-bottom:24px;}
.upload-documents .upload-documents_info-block__list_outer b{font-family:'Effra', sans-serif;font-style:normal;font-weight:500;font-size:18px;line-height:24px;text-transform:capitalize;color:#202020;}
.upload-documents .upload-documents_info-block__list li{font-family:'Effra', sans-serif;font-style:normal;font-weight:400;font-size:14px;line-height:17px;text-transform:capitalize;color:#202020;}
.upload-documents .upload-documents_info-block__list{max-width:inherit;padding-left:15px;display:grid;grid-template-columns:1fr 1fr;gap:14px 23px;}
.upload-documents .upload-documents_info-block__list.identity-list{grid-template-columns:1fr 1fr 1fr;}
.upload-documents .upload-documents_info-block__list_outer{flex:1 0 100%;}
.upload-documents .upload-documents_ind-verification__loaded-block{max-width:774px;margin:0 auto;font-family:'Effra', sans-serif;}
.upload-documents .upload-documents_ind-verification__loaded-block div b{font-family:'Effra', sans-serif;font-style:normal;font-weight:500;font-size:18px;line-height:34px;text-align:center;text-transform:capitalize;color:#000000;}
.upload-documents .upload-documents__control-block{align-items:center;justify-content:center;margin-top:30px;}
.upload-documents .upload-documents__control-block .btn-back,.upload-documents .btn.btn-next{font-family:'Effra', sans-serif;font-style:normal;font-weight:500;font-size:18px;line-height:34px;text-align:center;text-transform:capitalize;}
.upload-documents .upload-documents__control-block .btn-back{background:linear-gradient(90deg, #2B63AD 0%, #2B63AD 100.02%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;}
.upload-documents .btn.btn-next{color:#CFD3E9;background:transparent!important;}
.upload-documents .icon_btn-back{background:url('/images/new_images/svg/panel/upload_documints/arrow-back2.svg') no-repeat 0 5px;}
.upload-documents .icon_btn-back.next{background:url('/images/new_images/svg/panel/upload_documints/arrow-next.svg') no-repeat 0 5px;}
.upload-documents .upload-drag{box-shadow:0px 1px 3px rgb(0 0 0 / 8%);border-radius:12px;padding:12px;}
.upload-documents .upload-drag .upload-drag-dash{background:#FAFBFC;border:2px dashed #D2D2D2;box-shadow:0px 1px 3px rgba(0, 0, 0, 0.08);border-radius:8px;}
.upload-documents .upload-drag .upload-drag-dash.active{background: #f3f3f3; border: 2px dashed #424242;}
.upload-documents .file-preview_upload-documents .file-drop-zone-title{padding:41px;}
.upload-documents .btn_add-files{display:flex;align-items:center;justify-content:center;top:calc(50% - 32px);}
.upload-documents .upload-documents_ind-verification_bnt_files{width:64px;height:64px;border-radius:50%;border:3px solid #2B63AD;background:transparent;margin:0;margin-right:16px;}
.upload-documents .btn_add-files .color-grey{font-family:'Effra', sans-serif;font-style:normal;font-weight:400;font-size:18px;line-height:24px;text-align:center;text-transform:capitalize;color:#000000;}
.upload-documents .btn_add-files .color-blue{color:#2B63AD;}
.upload-documents .btn_add-files .type-files__info{margin-bottom:0;margin-top:5px;font-family:'Effra', sans-serif;font-style:normal;font-weight:400;font-size:16px;line-height:21px;text-align:center;color:#CFD3E9;}
.file-input .btn_add-files.btn-file{display:none;}
.file-input.file-input-ajax-new .btn_add-files.btn-file{display:flex;}
.progress{
    width: 96%;
    margin: 12px auto !important;
}
div:where(.swal2-container) div:where(.swal2-popup){
    width: 46em;
}
@media (max-width: 1024px){
.upload-documents .h2{margin-top:20px!important;}
}
@media (max-width: 768px){
.account-score_btn__block{border-bottom:none;}
.upload-documents_ind-verification_item{height:120px;margin:0 auto 15px;width:220px;padding:0 10px;}
.upload-documents_ind-verification_item > img{max-width:42px;}
.upload-documents .account-score_btn{font-size:13px;}
.upload-documents_info-block{font-size:14px;position:relative;margin-top:40px;}
.upload-documents_info-block__list_outer{margin:0 25px;position:relative;}
.upload-documents__control-block{margin-bottom:30px;justify-content:flex-end;}
.upload-documents_info-block__icon{position:absolute;width:50px;top:-17px;left:-35px;}
.file-preview-thumbnails{align-items:flex-start!important;}
.upload-documents .account-score_btn{padding:10px;margin:0 2px;}
}
@media (max-width: 600px){
h2,.h2{font-size:20px!important;font-weight:900;}
.form-control{font-size:0.9rem;}
.file-preview_upload-documents .file-drop-zone-title{padding-bottom:0;padding-top:40px;}
}
@media (max-width: 360px){
.upload-documents_ind-verification__loaded-block{max-width:100%;overflow:hidden;}
}


.btn-file input[type=file]{position:absolute;}
.file-input-ajax-new .fileinput-remove-button,.kv-hidden{display:none;}
.btn-file,.file-input,.file-preview{position:relative;}
.btn-file{overflow:hidden;}
.btn-file input[type=file]{top:0;left:0;min-width:100%;min-height:100%;text-align:right;opacity:0;background:none;cursor:inherit;display:block;}
.file-error-message{color:#a94442;background-color:#f2dede;margin:5px;border:1px solid #ebccd1;border-radius:4px;padding:15px;}
.file-preview{border-radius:5px;border:1px solid #ddd;padding:8px;width:100%;margin-bottom:5px;}
.file-preview .clickable{cursor:pointer;}
.kv-upload-progress .progress{height:20px;margin:10px 0;overflow:hidden;}
.kv-upload-progress .progress-bar{height:20px;font-family:Verdana,Helvetica,sans-serif;}
.file-drop-zone{border:1px dashed #aaa;border-radius:4px;text-align:center;vertical-align:middle;margin:12px 15px 12px 12px;padding:5px;}
.file-drop-zone.clickable:hover{border:2px dashed #999;}
.file-drop-zone.clickable:focus{border:2px solid #5acde2;}
.file-drop-zone .file-preview-thumbnails{cursor:default;}
.file-drop-zone-title{color:#aaa;font-size:1.6em;padding:85px 10px;cursor:default;}
@media (max-width:767px){
.file-preview-thumbnails{display:flex;justify-content:center;align-items:center;flex-direction:column;}
}
.clickable .file-drop-zone-title{cursor:pointer;}



div,*{scrollbar-width:thin;scrollbar-color:var(--accent) #EDEEEF;}
::-webkit-scrollbar{width:5px;height:5px;}
::-webkit-scrollbar-track{background-color:#999;}
::-webkit-scrollbar-track-piece{background-color:#ffffff;}
::-webkit-scrollbar-thumb{height:50px;background-color:var(--hr-color);border-radius:3px;}
::-webkit-scrollbar-corner{background-color:var(--accent);}
::-webkit-resizer{background-color:var(--accent);}
input{min-width:250px;height:50px;border:none;background:#F5F5F5;border-color:transparent;}
li{list-style:none;}
ul{padding:0;}
img{max-width:100%;}
.btn{transition:all 0.4s;font-size:16px;display:flex;align-items:center;justify-content:center;min-height:45px;font-family:Roboto;}
.btn:focus{box-shadow:none!important;}
.btn-medium{width:115px;}
.form-control:focus{background-color:#F5F5F5;border:1px solid var(--hr-color);outline:0;box-shadow:var(--accent-hover);}
.color-grey{color:var(--grey);}
.color-blue{color:var(--blue);}
.col-lg-12{padding-right:10px;padding-left:10px;}
.belleo-block{background:#fff;border-radius:4px;box-shadow:6px 6px 14px #A5AAB733;}
.help-block{display:none;}
h2,.h2{text-align:center;margin:30px 0 20px;}
h2,.h2{font-size:22px;font-weight:900;}
h2 span,.h2 span{color:var(--accent);}
.verification-status_dashbord{display:flex;justify-content:flex-end;font-size:16px;font-weight:600;align-items:center;height:100%;padding:0 15px;}
.verification-status_dashbord_header{text-align:right;margin-inline-end:25px;}
.verification-status__title{margin-bottom:5px;}
.verification-status_visual{flex:0 0 50px;height:50px;border-radius:50%;text-align:center;display:flex;align-items:center;justify-content:center;position:relative;background:linear-gradient(358deg, var(--accent) 0%, #fff 120%);box-shadow:5px 4px 14px #D0DFEF;opacity:1;}
.verification-status_visual{filter:drop-shadow(0px 0px 4px rgba(0, 0, 0, 0.15));box-shadow:none;background:linear-gradient(90deg, #14177200 0%, #2B63AD 100.02%);border:4px solid rgba(0, 0, 0, .05);width:104px;height:104px;border-radius:50%;display:flex;flex:0 0 auto;}
.verification-status_visual__icon{background:linear-gradient(90deg, #2B63AD 0%, #2B63AD 100.02%);width:100%;height:100%;border-radius:50%;display:flex;align-items:center;justify-content:center;}
.verification-status_visual__icon{font-family:'Gotham Pro', sans-serif;font-style:normal;font-weight:700;font-size:36px;line-height:100%;color:#FFFFFF;}
.verification-status_dashbord{justify-content:center;background:linear-gradient(90deg, #2B63AD 0%, #2B63AD 100.02%);box-shadow:0px 1px 3px rgb(0 0 0 / 8%);border-radius:12px;max-width:774px;margin:0 auto;padding:18px;margin-bottom:60px;}
.verification-status__title{font-family:'Effra', sans-serif;font-style:normal;font-weight:500;font-size:36px;line-height:140%;text-align:center;letter-spacing:0.02em;color:#FFFFFF;margin-bottom:0;}
@media (max-width: 533px){
.verification-status_dashbord{margin-bottom:30px;}
.verification-status_dashbord_header{margin-inline-end:0;margin-right:10px;}
.verification-status__title{font-size:24px;}
.verification-status_visual{width:75px;height:75px;}
.verification-status_visual__icon{font-size:20px;}
.form-control{height:45px!important;}
.upload-documents .upload-documents__container{margin-top:40px;}
.upload-documents .upload-doc-top .account-score_btn__block{margin-bottom:20px;gap:10px;}
.upload-documents .upload-doc-top .account-score_btn{max-width:160px;padding:10px 5px;}
.upload-documents .h2{margin-top:0!important;margin-bottom:12px;}
.upload-documents .upload-doc-top .text{font-size:16px;line-height:24px;}
.upload-documents .upload-choose-wrap .upload-documents_ind-verification_item{padding:12px;height:100px;max-width:125px;}
.upload-documents .upload-documents_ind-verification_item__title{font-size:12px;line-height:15px;}
.upload-documents .upload-documents_ind-verification{gap:10px;max-width:400px;justify-content:center;}
.upload-documents .upload-documents_info-block{padding:10px;margin-top:12px;}
.upload-documents .upload-documents_info-block .upload-doc-icon{margin-bottom:12px;}
.upload-documents .upload-documents_info-block__list_outer{margin:0;}
.upload-documents .upload-documents_info-block__list_outer b{font-size:16px;line-height:22px;}
.upload-documents .upload-documents_info-block__list{gap:10px 20px;}
.upload-documents .file-preview_upload-documents .file-drop-zone-title{padding:50px;}
.upload-documents .btn_add-files{flex-direction:column;top:calc(50% - 57px);}
.upload-documents .upload-documents_ind-verification_bnt_files{margin-right:0;margin-bottom:16px;}
.upload-documents .upload-documents_info-block__list.identity-list{grid-template-columns:1fr 1fr;}
}
</style>