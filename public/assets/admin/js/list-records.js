var getParameters = function () {
    var parameters = '';
    if ($('#q').val() != null && $('#q').val() != '')
        parameters += '&q=' + $('#q').val();
    if ($('#user_name').val() != null && $('#user_name').val() != '')
        parameters += '&name=' + $('#user_name').val();
    if ($('#user_email').val() != null && $('#user_email').val() != ''){
        parameters += '&email=' + $('#user_email').val();
    }
    if ($('#accident_spot').val() != null && $('#accident_spot').val() != ''){
        parameters += '&accident_spot=' + $('#accident_spot').val();
    }
    if ($('#brand_name').val() != null && $('#brand_name').val() != ''){
        parameters += '&brand_name=' + $('#brand_name').val();
    }
    if ($('#model_name').val() != null && $('#model_name').val() != ''){
        parameters += '&model_name=' + $('#model_name').val();
    }
    if ($('#user_mobile').val() != null && $('#user_mobile').val() != '')
        parameters += '&mobile=' + $('#user_mobile').val();
     if ($('#user_gender').val() != null && $('#user_gender').val() != '')
        parameters += '&gender=' + $('#user_gender').val();
    if ($('#user_platform').val() != null && $('#user_platform').val() != '')
        parameters += '&platform=' + $('#user_platform').val();
    if ($('#pickup_point').val() != null && $('#pickup_point').val() != '')
        parameters += '&pickup_point=' + $('#pickup_point').val();
    if ($('#dest_point').val() != null && $('#dest_point').val() != '')
        parameters += '&dest_point=' + $('#dest_point').val();
    if ($('#datepicker-from').val() != null && $('#datepicker-from').val() != '')
        parameters += '&from_date=' + $('#datepicker-from').val();
    if ($('#datepicker-to').val() != null && $('#datepicker-to').val() != '')
        parameters += '&to_date=' + $('#datepicker-to').val();
    if (getUrlParameter('page') != null)
        parameters += '&page=' + getUrlParameter('page');
    if ($('#offset').val() != null && $('#offset').val() != '')
        parameters += '&offset=' + $('#offset').val();
    if ($('#confirmedSelect').val() != null && $('#confirmedSelect').val() != '')
        parameters += '&confirmed=' + $('#confirmedSelect').val();
    return parameters;
};

var getParametersObject = function () {
    var parameters = new Object();
    parameters['sync'] = 1;
    if ($('#q').val() != null && $('#q').val() != '')
        parameters['q'] = $('#q').val();
    if ($('#user_name').val() != null && $('#user_name').val() != '')
        parameters['name'] = $('#user_name').val();
    if ($('#brand_name').val() != null && $('#brand_name').val() != '')
        parameters['brand_name'] = $('#brand_name').val();
    if ($('#model_name').val() != null && $('#model_name').val() != '')
        parameters['model_name'] = $('#model_name').val();
    if ($('#user_email').val() != null && $('#user_email').val() != '')
        parameters['email'] = $('#user_email').val();
    if ($('#user_mobile').val() != null && $('#user_mobile').val() != '')
        parameters['mobile'] = $('#user_mobile').val();
     if ($('#user_gender').val() != null && $('#user_gender').val() != '')
        parameters['gender'] = $('#user_gender').val();
    if ($('#user_platform').val() != null && $('#user_platform').val() != '')
        parameters['platform'] = $('#user_platform').val();
    if ($('#pickup_point').val() != null && $('#pickup_point').val() != '')
        parameters['pickup_point'] = $('#pickup_point').val();
    if ($('#dest_point').val() != null && $('#dest_point').val() != '')
        parameters['dest_point'] = $('#dest_point').val();
    if ($('#accident_spot').val() != null && $('#accident_spot').val() != '')
        parameters['accident_spot'] = $('#accident_spot').val();
    if ($('#datepicker-from').val() != null && $('#datepicker-from').val() != '')
        parameters['from_date'] = $('#datepicker-from').val();
    if ($('#datepicker-to').val() != null && $('#datepicker-to').val() != '')
        parameters['to_date'] = $('#datepicker-to').val();
    if (getUrlParameter('page') != null)
        parameters['page'] = getUrlParameter('page');
    if ($('#offset').val() != null && $('#offset').val() != '')
        parameters['offset'] = $('#offset').val();
    if ($('#confirmedSelect').val() != null && $('#confirmedSelect').val() != '')
        parameters['confirmed'] = $('#confirmedSelect').val();
    return parameters;
};

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};
    
    var recordList = function(){
        $('#btnSearch').html('Please Wait');
        $('#btnSearch').attr("disabled", true);
        var parameters = getParametersObject();
       var urlparameters = getParameters();
                var tblObj = $("#record-list");
                $.ajax({
                    url: tblObj.data('url'),
                    type : 'GET',
                    data : parameters,
                    dataType: 'json'
                })
                        .success(function(response) {
                            tblObj.find('tbody').html(response.rows);
                            tblObj.find('tfoot tr td').html(response.pagination);
                            reinitPagination();
                            window.history.replaceState({
                                isBackPage: false,
                                "html": 'jscv',
                                "pageTitle": 'bsckj'
                            }, "", listUrl + '?query=q' + urlparameters);
                            $('#btnSearch').html('Search');
                            $('#btnSearch').attr("disabled", false);
                            //paginationURL(1);
                            //initPosition();
                        })
                        .error(function(response, code) {
                            if(response.status == "419"){
                                toastr.error('Page session expired');
                                setTimeout(function(){
                                    location.reload();             
                                   },2000);
                            }
                            toastr.error('Error in listing rows');
                        });
            };

    recordList();

    var reinitPagination = function(){
        $('.pagination a').on('click', function(e){
            var parameters = getParameters();
            e.preventDefault();
            $("#record-list").data('url', ($(this).data('url') + parameters));
            recordList();
        });
    }

    var deleteRecord = function(id){
        if(confirm('Are you sure want to delete this record?'))
        {
            $.ajax({
                url: deleteUrl,
                type : 'DELETE',
                data : {id:id, _token:window.Laravel.csrfToken},
                dataType: 'json'
            })
                    .success(function(response) {
                        toastr.success(response.message);
                        recordList();
                    })
                    .error(function(response, code) {
                        if(response.status == "419"){
                            toastr.error('Page session expired');
                            setTimeout(function(){
                                location.reload();             
                               },2000);
                        }
                        toastr.error(response.message);
                    });
        }
    }

    var deleteImageRecord = function(id){
        if(confirm('Are you sure want to delete this record?'))
        {
            $.ajax({
                url: deleteUrl,
                type : 'DELETE',
                data : {id:id, _token:window.Laravel.csrfToken},
                dataType: 'json'
            })
                    .success(function(response) {
                        toastr.success(response.message);
                        productImageList();
                    })
                    .error(function(response, code) {
                        if(response.status == "419"){
                            toastr.error('Page session expired');
                            setTimeout(function(){
                                location.reload();             
                               },2000);
                        }
                        toastr.error(response.message);
                    });
        }
    }

    var changeStatus = function(id){
        if(confirm('Are you sure want to change this status?'))
        {
            $.ajax({
                url: changeUrl,
                type : 'POST',
                data : {id:id, _token:window.Laravel.csrfToken},
                dataType: 'json'
            })
                .success(function(response) {
                    toastr.success(response.message);
                    recordList();
                })
                .error(function(response, code) {
                    if(response.status == "419"){
                        toastr.error('Page session expired');
                        setTimeout(function(){
                            location.reload();             
                           },2000);
                    }
                    toastr.error(response.message);
                });
        }
    }

    var searchProductList = function(reset = true){
        if(reset)
        paginationURL(1);
        $('#btnSearch').html('Please Wait');
        $('#btnSearch').attr("disabled", true);
        var parameters = getParametersObject();
       var urlparameters = getParameters();
        var tblObj = $("#record-list");
        $.ajax({
            url: searchUrl,
            type : 'GET',
            data : parameters,
            dataType: 'json'
        })
                .success(function(response) {
                    tblObj.find('tbody').html(response.rows);
                    tblObj.find('tfoot tr td').html(response.pagination);
                    reinitSearchedProductPagination();
                    window.history.replaceState({
                        isBackPage: false,
                        "html": 'jscv',
                        "pageTitle": 'bsckj'
                    }, "", listUrl + '?query=q' + urlparameters);
                    $('#btnSearch').html('Search');
                    $('#btnSearch').attr("disabled", false);
                    //initPosition();
                })
                .error(function(response, code) {
                    if(response.status == "419"){
                        toastr.error('Page session expired');
                        setTimeout(function(){
                            location.reload();             
                           },2000);
                    }
                    console.log('Error in listing rows');
                });
                return false;
    };

var reinitSearchedProductPagination = function(){
    $('.pagination a').on('click', function(e){
        var parameters = getParameters();
        e.preventDefault();
        searchUrl = $(this).data('url') + parameters;
        searchProductList(false);
    });
}

var searchUserList = function(reset = true){
    if(reset)
    paginationURL(1);
    var btn = $(".saveBtn");
    var loader = $("#ajaxloader");
    btn.hide();
    loader.fadeIn(500);
    var parameters = getParametersObject();
       var urlparameters = getParameters();
    var tblObj = $("#record-list");
    $.ajax({
        url: searchUrl,
        type : 'GET',
        data : parameters,
        dataType: 'json'
    })
            .success(function(response) {
                tblObj.find('tbody').html(response.rows);
                tblObj.find('tfoot tr td').html(response.pagination);
                loader.hide();
                btn.fadeIn(500);
                reinitSearchedUserPagination();
                window.history.replaceState({
                    isBackPage: false,
                    "html": 'jscv',
                    "pageTitle": 'bsckj'
                }, "", listUrl + '?query=q' + urlparameters);
                //initPosition();
            })
            .error(function(response, code) {
                if(response.status == "419"){
                    toastr.error('Page session expired');
                    setTimeout(function(){
                        location.reload();             
                       },2000);
                }
                console.log('Error in listing rows');
            });
            return false;
};

var reinitSearchedUserPagination = function(){
$('.pagination a').on('click', function(e){
    var parameters = getParameters();
    e.preventDefault();
    searchUrl = $(this).data('url') + parameters;
    searchUserList(false);
});
}

var searchUserPageList = function(reset = true){
    if(reset)
    paginationURL(1);
    
    var parameters = getParametersObject();
       var urlparameters = getParameters();
    var tblObj = $("#record-list");
    $.ajax({
        url: searchUrl,
        type : 'GET',
        data : parameters,
        dataType: 'json'
    })
            .success(function(response) {
                tblObj.find('tbody').html(response.rows);
                tblObj.find('tfoot tr td').html(response.pagination);
                
                reinitSearchedUserPagePagination();
                window.history.replaceState({
                    isBackPage: false,
                    "html": 'jscv',
                    "pageTitle": 'bsckj'
                }, "", listUrl + '?query=q' + urlparameters);
                //initPosition();
            })
            .error(function(response, code) {
                if(response.status == "419"){
                    toastr.error('Page session expired');
                    setTimeout(function(){
                        location.reload();             
                       },2000);
                }
                console.log('Error in listing rows');
            });
            return false;
};

var reinitSearchedUserPagePagination = function(){
$('.pagination a').on('click', function(e){
    var parameters = getParameters();
    e.preventDefault();
    searchUrl = $(this).data('url') + parameters;
    searchUserPageList(false);
});
}

var searchOrdersList = function(){
    paginationURL(1);
    var parameters = getParametersObject();
       var urlparameters = getParameters();
    var tblObj = $("#record-list");
    $.ajax({
        url: searchUrl,
        type : 'GET',
        data : parameters,
        dataType: 'json'
    })
            .success(function(response) {
                tblObj.find('tbody').html(response.rows);
                tblObj.find('tfoot tr td').html(response.pagination);
                reinitSearchedOrdersPagination();
                window.history.replaceState({
                    isBackPage: false,
                    "html": 'jscv',
                    "pageTitle": 'bsckj'
                }, "", listUrl + '?query=q' + urlparameters);
                //initPosition();
            })
            .error(function(response, code) {
                if(response.status == "419"){
                    toastr.error('Page session expired');
                    setTimeout(function(){
                        location.reload();             
                       },2000);
                }
                console.log('Error in listing rows');
            });
            return false;
};

var reinitSearchedOrdersPagination = function(){
$('.pagination a').on('click', function(e){
    var parameters = getParameters();
    e.preventDefault();
    searchUrl = $(this).data('url') + parameters;
    searchOrdersList();
});
}

/*
var searchListFilter = function(){
    var tblObj = $("#record-list");
    $.ajax({
        url: searchUrl,
        type : 'GET',
        data : {sync:1,q:$('#searchQ').val(),qfilter:$('#searchQFilter').val()},
        dataType: 'json'
    })
            .success(function(response) {
                tblObj.find('tbody').html(response.rows);
                tblObj.find('tfoot tr td').html(response.pagination);
                reinitSearchedFilterPagination();
                initPosition();
            })
            .error(function(response, code) {
                if(response.status == "419"){
                                toastr.error('Page session expired');
                                setTimeout(function(){
                                    location.reload();             
                                   },2000);
                            }
                console.log('Error in listing rows');
            });
};

var reinitSearchedFilterPagination = function(){
$('.pagination a').on('click', function(e){
    e.preventDefault();
    searchUrl = $(this).attr('href')+'&qfilter='+$('#searchQFilter').val()+'&q='+$('#searchQ').val();
    searchListFilter();
});
}

*/


var paginationURL = function (page) {
    if (getUrlParameter('page') != null){
        var newUrl = location.href.replace("page="+encodeURIComponent(getUrlParameter('page').trim()), "page="+page);
        window.history.replaceState({
            isBackPage: false,
            "html": 'jscv',
            "pageTitle": 'bsckj'
        }, "", newUrl);
    }else if(window.location.search){
        window.history.replaceState({
            isBackPage: false,
            "html": 'jscv',
            "pageTitle": 'bsckj'
        }, "", window.location.href+'&page='+page);
    }else{
        window.history.replaceState({
            isBackPage: false,
            "html": 'jscv',
            "pageTitle": 'bsckj'
        }, "", window.location.href+'?page='+page);
    }
   }