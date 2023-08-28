window.GridView = {
    init: function()
    {
        $('.nav-link').on('click', function(e){
            let tabId = this.hash;
            if(tabId){
                let p = tabId.indexOf('#');
                tabId = (p != -1)? tabId.substring(p+1) : tabId;
                let pjaxId = $('#'+tabId+' div[data-pjax-container]').attr('id');

                let tick = 0;
                let timerId = setInterval(function(){
                    if(window.GridView.changeScrollGrid(pjaxId) || tick > 10){
                        clearInterval(timerId);
                    }
                    tick++;
                }, 200);
            }
        });
    },
    sendPageSize: function(gridPjaxID, pageSizeSelect, searchModel)
    {
        let data = {};
        data[searchModel+"[pageSize]"] = $(pageSizeSelect).find("option:selected").val();
        jQuery.ajax({
            type: 'POST',
            url: this.sendPageSize.url,
            data: data,
            success: function(data){
                $.pjax.reload({container : '#'+gridPjaxID});
            },
            error: function(data){
                console.log('Err: bad params')
            }
        });
    },
    changeScrollGrid: function (gridId)
    {
        let tableWidth = $('#'+gridId+' table').width();
        let scrollLeft = $('#slide-wrap-'+gridId).scrollLeft();
        let slideWrap = $('#slide-wrap-'+gridId).width();

        if(!tableWidth){
            $('#left-scroll-button-'+gridId).css({display: 'none'});
            $('#right-scroll-button-'+gridId).css({display: 'none'});
            return false;
        }

        let maxScroll = tableWidth - scrollLeft - slideWrap;

        if ( 0 >= $('#slide-wrap-'+gridId).scrollLeft()) {
            $('#left-scroll-button-'+gridId).css({display: 'none'});
        } else {
            $('#left-scroll-button-'+gridId).css({display: 'block'});
        }

        if ( 1 >= maxScroll) {
            $('#right-scroll-button-'+gridId).css({display: 'none'});
        } else {
            $('#right-scroll-button-'+gridId).css({display: 'block'});
        }
        return true;
    },
    scrollThumb: function (gridPjaxID, direction)
    {
        if (direction=='Go_L') {
            $('#slide-wrap-'+gridPjaxID).animate({
                scrollLeft: '-=' + 250 + 'px'
            }, function(){
                window.GridView.changeScrollGrid(gridPjaxID);
            });
        }else if (direction=='Go_R') {
            $('#slide-wrap-'+gridPjaxID).animate({
                scrollLeft: '+=' + 250 + 'px'
            }, function(){
                window.GridView.changeScrollGrid(gridPjaxID);
            });
        }
    },
    showFilter: function(filterButtonClass, filterRowID)
    {
        let showFilter = document.getElementsByClassName(filterButtonClass);
        if(showFilter.length != 0)
        {
            showFilter[0].onclick = function(){
                if (document.getElementById(filterRowID).classList.contains('hide_filters')){
                    document.getElementById(filterRowID).classList.remove('hide_filters');
                    document.getElementById(filterRowID).classList.add('show_filters');
                }else{
                    document.getElementById(filterRowID).classList.remove('show_filters');
                    document.getElementById(filterRowID).classList.add('hide_filters');
                }
            };
        }
    },
};

window.GridView.init();
$.GridView = window.GridView;