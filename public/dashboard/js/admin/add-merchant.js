/**
 * Created by Mobarok Hossen on 9/18/2017.
 */


$(document).ready(function () {
    var rowNum = 0;
    var $pickup_Address = $('#merchant-address');


    $('#blank-add').on('click', function () {

        $("#sboxit-15").selectBoxIt({
            showFirstOption: false
        }).on('open', function()
        {
            // Adding Custom Scrollbar
            $(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
        });

        $("#sboxit-18").selectBoxIt({
            showFirstOption: false
        }).on('open', function()
        {
            // Adding Custom Scrollbar
            $(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
        });

        rowNum++;
        $pickup_Address.find('.merchant-address')
            .append(
                '<div class="row col-md-12">' +
                    '<div class="panel panel-default">'+
                         '<div class="panel-heading">'+
                            '<div class="panel-title">Alternative Pickup Details</div>'+
                        '</div>'+
                    '</div>'+
                    '<div class="col-md-6">' +
                        '<div class="form-group">' +
                            '<label class="control-label">Pickup Address 2 Line 1</label>' +
                                '<input type="text" class="form-control" name="name" placeholder="" id="i_' + rowNum + '"/>' +
                        '</div>' +
                        '<div class="form-group">' +
                            '<label class="control-label">Pickup Address 2 Line 2</label>' +
                            '<input type="text" class="form-control" name="name" placeholder="" id="i_' + rowNum + '"/>' +
                        '</div>'+
                        '<div class="form-group">' +
                            '<label class="control-label">City</label>'+
                                '<select class="form-control" id="sboxit-15">'+
                                    '<option>Select your city</option>'+
                                    '<option value="al">Uttara</option>'+
                                    '<option value="au">Gulshan</option>'+
                                    '<option value="bd">Banani</option>'+
                                    '<option value="br">Mirpur</option>'+
                                    '<option value="ca">Danmondi</option>'+
                                    '<option value="cn">Old Dhaka</option>'+
                                '</select>' +
                        '</div>'+
                        '<div class="form-group"> ' +
                            '<label class="control-label">Nearest TikTok Hub</label>'+
                                '<select class="form-control" id="sboxit-18">'+
                                    '<option>Select your city</option>'+
                                    '<option value="al">Uttara</option>'+
                                    '<option value="au">Gulshan</option>'+
                                    '<option value="bd">Banani</option>'+
                                    '<option value="br">Mirpur</option>'+
                                    '<option value="ca">Danmondi</option>'+
                                    '<option value="cn">Old Dhaka</option>'+
                                '</select>' +
                        '</div>' +
                    '</div>'+
                    '<div class="col-md-6">'+
                        '<div class="panel-body no-padding">'+
                        '<div id="normal" style="height: 385px; width: 100%"></div></div>' +
                    '</div>' +
                '</div>'
            );

    });
});

