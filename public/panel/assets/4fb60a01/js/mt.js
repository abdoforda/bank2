$.mt = {
    rate: 1,
    rateInvers: 1,
    url: '',
    urlIn: '',
    csrfToken: '',
    action: '',
    back: false,
    deposit: function (currencyID, accountID) {
        let currency = $('#' + currencyID + ' :selected').val();
        let account = $('#' + accountID + ' :selected').val();
        data = {
            'currency': currency,
            'account': account
        };
        key = ($.mt.back === false) ? '_csrf-frontend' : '_csrf-backend';
        data[key] = $.mt.csrfToken;

        $.ajax({
            type: 'POST',
            url: $.mt.url,
            data: data,
            success: function (data) {
                if (data != '') {
                    let jsonData = JSON.parse(data);

                    $('#amount').text(jsonData.currency);
                    $('#amount_to').text(jsonData.account);
                    $('#rate').text(jsonData.rate);

                    $.mt.rate = jsonData.rate;
                    $.mt.rateInvers = jsonData.rateInverse;
                    fromCurrency = jsonData.currency;
                    whereCurrency = jsonData.account;

                    $('#rateBlock').hide();
                    if (fromCurrency != whereCurrency) {
                        $('#rateBlock').show();
                    }
                    $.mt.reloadAmount();
                    console.log($.mt);
                }
            },
            error: function (data) {
                console.log('Err currency price');
            }
        });
    },
    withdrawal: function (accountID, currencyID) {
        let account = $('#' + accountID + ' :selected').val();
        let currency = $('#' + currencyID + ' :selected').val();
        data = {
            'currency': currency,
            'account': account
        };
        key = ($.mt.back === false) ? '_csrf-frontend' : '_csrf-backend';
        data[key] = $.mt.csrfToken;

        $.ajax({
            type: 'POST',
            url: $.mt.url,
            data: data,
            success: function (data) {
                if (data != '') {
                    let jsonData = JSON.parse(data);

                    $('#amount').text(jsonData.account);
                    $('#amount_to').text(jsonData.currency);
                    $('#rate').text(jsonData.rate);

                    $.mt.rate = jsonData.rate;
                    $.mt.rateInvers = jsonData.rateInverse;
                    fromCurrency = jsonData.account;
                    whereCurrency = jsonData.currency;

                    $('#rateBlock').hide();
                    if (fromCurrency != whereCurrency) {
                        $('#rateBlock').show();
                    }
                    $.mt.reloadAmount();
                }
            },
            error: function (data) {
                console.log('Err currency price');
            }
        });
    },
    withdrawalType: function () {
        let selected = $('#mttransactions-transaction_type :selected').val();
        $('.webmoney').hide();
        $('.bank-select').hide();
        $('#mttransactions-transaction_submit').prop("disabled", false);

        let bankField = $('#w0 #mttransactions-transaction_details-swift');
        let bankBlock = $('.bank');

        let webmoneyField = $('#w0 #mttransactions-transaction_details-webmoney');
        let webmoneyBlock = $('.webmoney');

        let tetherField = $('#w0 #mttransactions-transaction_details-usdt');
        let tetherBlock = $('.usdt');

        let bitcoinField = $('#w0 #mttransactions-transaction_details-bitcoin');
        let bitcoinBlock = $('.bitcoin');

        let etheriumField = $('#w0 #mttransactions-transaction_details-etherium');
        let etheriumBlock = $('.etherium');

        let rippleField = $('#w0 #mttransactions-transaction_details-ripple');
        let rippleBlock = $('.ripple');

        bankField.prop('required', false);
        webmoneyField.prop('required', false);
        tetherField.prop('required', false);
        bitcoinField.prop('required', false);
        etheriumField.prop('required', false);
        rippleField.prop('required', false);

        bankBlock.hide();
        webmoneyBlock.hide();
        tetherBlock.hide();
        bitcoinBlock.hide();
        etheriumBlock.hide();
        rippleBlock.hide();

        switch (selected) {
            case '1':
                bankField.prop('required', true);
                $('.bank-select').show();
                bankBlock.show();
                break;
            case '14':
                bitcoinField.prop('required', true);
                bitcoinBlock.show();
                break;
            case '15':
                tetherField.prop('required', true);
                tetherBlock.show();
                break;
            case '17':
                bankField.prop('required', true);
                $('.bank-select').show();
                bankBlock.show();
                break;
            case '21':
                bankField.prop('required', true);
                $('.bank-select').show();
                bankBlock.show();
                break;
            case '23':
                bankField.prop('required', true);
                $('.bank-select').show();
                bankBlock.show();
                break;
        }

        //     let selected = $('#mttransactions-transaction_type :selected').val();
        //     $('.webmoney').hide();
        //     $('.bank-select').hide();
        //     $('#mttransactions-transaction_submit').prop( "disabled", false );
        //     switch(selected)
        //     {
        //         case '1':
        //             $('.bank-select').show();
        //             this.bankAccount();
        //             break;
        //         case '2':
        //             $('.bank').hide();
        //             $('.webmoney').show();
        //             break;
        //         case '7':
        //             $('.bank-select').show();
        //             this.bankAccount();
        //             break;
        //         default:
        //             $('.bank').hide();
        //     }
    },
    bankAccount: function () {
        let selected = $('#mttransactions-transaction_details-banks_list :selected').val();

        if (selected == 0) {
            $('.bank').hide();
            $('#mttransactions-transaction_submit').prop("disabled", true);
        } else {
            $('.bank').show();
            $('#mttransactions-transaction_submit').prop("disabled", false);
        }
    },
    transfer: function (accountID, secondAccountID) {
        let account_first = $('#' + accountID + ' :selected').val();
        let account_second = $('#' + secondAccountID + ' :selected').val();
        data = {
            'account_first': account_first,
            'account_second': account_second
        };
        key = ($.mt.back === false) ? '_csrf-frontend' : '_csrf-backend';
        data[key] = $.mt.csrfToken;

        $.ajax({
            type: 'POST',
            url: $.mt.url,
            data: data,
            success: function (data) {
                if (data != '') {
                    let jsonData = JSON.parse(data);

                    $('#amount').text(jsonData.currency_first);
                    $('#amount_to').text(jsonData.currency_second);
                    $('#rate').text(jsonData.rate);

                    $.mt.rate = jsonData.rate;
                    $.mt.rateInvers = jsonData.rateInvers;
                    fromCurrency = jsonData.currency_first;
                    whereCurrency = jsonData.currency_second;

                    $('#rateBlock').hide();
                    if (fromCurrency != whereCurrency) {
                        $('#rateBlock').show();
                    }
                    $.mt.reloadAmount();
                }
            },
            error: function (data) {
                console.log('Err currency price');
            }
        });
    },
    reloadAmount: function (keyCode = 1) {
        let amount = parseFloat($('#mttransactions-transaction_amount').val()).toFixed(8);
        var val = $('#mttransactions-withdrawal-transaction_type').val();
       // var val = $('#mttransactions-transaction_type, #mttransactions-deposit-transaction, #mttransactions-transaction_currency').val();
        if (val === '3' || val === '5') {
            amount = parseFloat($('#mttransactions-transaction_amount').val()).toFixed(8);
        }
        if (isNaN(amount))
        {
            amount = 0;
        }
        if ($.mt.action == '')
        {
            $.mt.action = 'deposit';
        }

        let new_amount;

        switch ($.mt.action) {
            case 'deposit':
            case 'transfer':
                new_amount = amount * $.mt.rate;
                break;
            case 'withdrawal':
                console.log(val);
                new_amount = ($.mt.rate < 2 && val !== '5') ? amount / $.mt.rateInvers : amount * $.mt.rate;
                break;
        }
        
        let curr_type = $("#mttransactions-transaction_currency").val();

        if(!isNaN(new_amount) && new_amount != 0 && keyCode != 9 && curr_type == 1)
        {
            $('#mttransactions-transaction_amount_credited').val(new_amount);
        } else if (!isNaN(new_amount) && new_amount != 0 && keyCode != 9 && curr_type == 6) {
            $('#mttransactions-transaction_amount_credited').val(new_amount.toFixed(2));
        }
        else if(!isNaN(new_amount) && new_amount != 0 && keyCode != 9 && ((curr_type == 5 || curr_type == 11)) || (val === '5')){
            new_amount = amount * $.mt.rate;
            $('#mttransactions-transaction_amount_credited').val(new_amount.toFixed(8));
        }
        else {
            $('#mttransactions-transaction_amount_credited').val(new_amount.toFixed(2));
        }
    },
    reloadAmountInvers: function (keyCode) {
        let amount = parseFloat($('#mttransactions-transaction_amount_credited').val()).toFixed(2);
        let new_amount;
        new_amount = amount / $.mt.rate;

        if (!isNaN(new_amount) && new_amount != 0 && keyCode != 9) {
            var val = $('#mttransactions-transaction_type, #mttransactions-deposit-transaction').val();
            if (val === '3' || val === '5') {
                $('#mttransactions-transaction_amount').val(new_amount.toFixed(8));
            } else {
                $('#mttransactions-transaction_amount').val(new_amount.toFixed(3));
            }
        }
    },
    getTransactionType: function () {
        $.mt.urlIn = ($.mt.urlIn == '') ? $.mt.url : $.mt.urlIn;
        let url = $.mt.urlIn;
        let type = $('#mttransactions-transaction_action').find(':selected').val();

        $('#rateBlock').hide();
        $('#depositBlock').hide();
        $('#withdrawalBlock').hide();
        $('#transferBlock').hide();
        $('#confirmBlock').hide();

        $('#mttransactions-transaction_amount').val('');
        $('#mttransactions-transaction_amount_credited').val('');
        $('#amount_to').text('USD');

        switch (type) {
            case 'deposit':
                $('#depositBlock').show();
                $('#confirmBlock').show();
                $.mt.addOptions('mttransactions-deposit-account_id');
                $.mt.action = 'deposit';
                $.mt.url = url + 'currency-price-deposit';
                break;
            case 'withdrawal':
                $('#withdrawalBlock').show();
                $('#confirmBlock').show();
                $.mt.addOptions('mttransactions-withdrawal-account_id');
                $.mt.action = 'withdrawal';
                $.mt.url = url + 'currency-price-charge';
                break;
            case 'transfer':
                $('#transferBlock').show();
                $.mt.addOptions('mttransactions-transfer-account_id');
                $.mt.addOptions('mttransactions-second_account_id');
                $.mt.action = 'transfer';
                $.mt.url = url + 'currency-price-transfer';
                break;
        }
    },
    addOptions: function (selectID) {

        let banks = $('#mttransactions-contact_id').find(':selected').data('banks');

        if(selectID){
            let newOptions = $('#mttransactions-contact_id').find(':selected').data('accounts');
            $('#' + selectID).children('option:not(:first)').remove();

            $.each(newOptions, function (key, value) {
                $('#' + selectID).append($('<option></option>').attr('value', value).text(value));
            });
        }

        $('#mttransactions-transaction_details-banks_list').children().remove();
        $.each(banks, function (key, value) {
            $('#mttransactions-transaction_details-banks_list').append($('<option></option>').attr('value', key).text(value['account_card_number']));
        });

        $('#mttransactions-transaction_details-banks_list').detach('change');
        $('#mttransactions-transaction_details-banks_list').on('change', function (){

            $('#mttransactions-transaction_details-owners_name').val('');
            $('#mttransactions-transaction_details-bank_name').val('');
            $('#mttransactions-transaction_details-account_card_number').val('');
            $('#mttransactions-transaction_details-iban').val('')
            $('#mttransactions-transaction_details-swift').val('')
            $('#mttransactions-transaction_details-bank_address').val('')
            $('#mttransactions-transaction_details-bank_correspondent').val('')
            $('#mttransactions-transaction_details-address').val('')

            if(banks === undefined){
                var banks = $('#mttransactions-contact_id').find(':selected').data('banks');
            }
            var val  = $(this).val();

            if(banks !== undefined && banks[val] !== undefined){
                var benifName = banks[val]['owners_name'];
                var bankName = banks[val]['bank_name'];
                var bankAccountNumber = banks[val]['account_card_number'];;
                var iban = banks[val]['iban'];
                var swiftCode = banks[val]['swift'];
                var bankAddress = banks[val]['bank_address'];
                var branch = banks[val]['bank_correspondent'];
                var redidentalAddress = banks[val]['address'];

                $('#mttransactions-transaction_details-owners_name').val(benifName);
                $('#mttransactions-transaction_details-bank_name').val(bankName);
                $('#mttransactions-transaction_details-account_card_number').val(bankAccountNumber);
                $('#mttransactions-transaction_details-iban').val(iban)
                $('#mttransactions-transaction_details-swift').val(swiftCode)
                $('#mttransactions-transaction_details-bank_address').val(bankAddress)
                $('#mttransactions-transaction_details-bank_correspondent').val(branch)
                $('#mttransactions-transaction_details-address').val(redidentalAddress)
            }

        })
        $('#mttransactions-transaction_details-banks_list').trigger('change');
    }
}

$('#mttransactions-transaction_amount').keyup(function (e) {
    $('#mttransactions-transaction_amount').val($(this).val().replace(',', '.'));
    $('#mttransactions-transaction_amount').val($(this).val().replace(/(\s)|([^0-9.])/g, ''));
    $.mt.reloadAmount(e.keyCode);
});

$('#mttransactions-transaction_amount_credited').keyup(function (e) {
    $('#mttransactions-transaction_amount_credited').val($(this).val().replace(',', '.'));
    $('#mttransactions-transaction_amount_credited').val($(this).val().replace(/(\s)|([^0-9.])/g, ''));
    $.mt.reloadAmountInvers(e.keyCode);
});

$('#mttransactions-transaction_details-webmoney').keyup(function (e) {
    $('#mttransactions-transaction_details-webmoney').val($(this).val().replace(/(\s)|([a-z])|([А-Яа-я])/g, ''));
});

$('#mttransactions-details').keyup(function (e) {
    $('#mttransactions-details').val($(this).val().replace(',', '.'));
    // $('#mttransactions-details').val($(this).val().replace(/(\s)|([^0-9.])/g, ''));
    $.mt.reloadAmount(e.keyCode);
});


function letterNameCount() {
    const fixLengthName = 20;
    const fixMinWidth = 1440;
    const names = document.querySelectorAll('.full_name a');

    if (!names) return;
    if (document.documentElement.clientWidth < fixMinWidth) {
        names.forEach((e) => {
            if (e.innerHTML.length > fixLengthName) {
                e.innerHTML = e.innerHTML.substr(0, fixLengthName);
                e.innerHTML += '...';
            }
        })
    }
    window.addEventListener("resize", function () {
        letterNameCount()
    })

}

letterNameCount();


$(".open_cf").click( function (e) {
    $('#bank-modal').css('display', 'flex')
})

$('.close_cf').click( function (e) {
    $("#bank-modal").css('display', 'none')
})

const passwordChangeRequestBtn = document.querySelector('#passChangeRequest');

if (passwordChangeRequestBtn) {
    passwordChangeRequestBtn.addEventListener('click', () => {
        $('#passwordChangeRequest').modal('show');
    });
}