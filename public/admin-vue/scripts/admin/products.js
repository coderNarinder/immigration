$(function () {
    $loader = $("body").data("loader");

    jQuery("form[name=editCategory]").validate({
        rules: {
            poll_type_id: {
                required: true,
            },
            name: {
                required: true,
            },
 
            price: {
                required: true,
                number: true,
            },
            discounted_price: {
                required: true,
                number: true,
            },

            prize: {
                required: true,
                number: true,
            },

            parent_location: {
                required: true,
            }, 
            start_date: {
                required: true,
            },

            end_date: {
                required: true,
            },
        },
    });

    jQuery("form[name=addCategory]").validate({
        rules: {
          poll_type_id: {
            required: true,
        },
        name: {
            required: true,
        },

        image: {
            required: true,
        },

        price: {
            required: true,
            number: true,
        },
        discounted_price: {
            required: true,
            number: true,
        },

        prize: {
            required: true,
            number: true,
        },

        parent_location: {
            required: true,
        }, 
        start_date: {
            required: true,
        },

        end_date: {
            required: true,
        },
        amount_distribution:{
            lessThanEqual:'#prize',
            require:true,
            number:true
        },
        draw_after:{
            require:true,
            number:true
        }
        
            //  'meta_tag':

            // {

            //   required: true

            // },

            //  'meta_description':

            // {

            //   required: true

            // },
        },
    });

    var dataTable = $("#example2").DataTable({
        processing: true,

        serverSide: true,

        pageLength: 100,

        //searching:false,

        fnDrawCallback: function (oSettings) {
            if (
                oSettings._iDisplayLength == -1 ||
                oSettings._iDisplayLength > oSettings.fnRecordsDisplay()
            ) {
                jQuery(oSettings.nTableWrapper)
                    .find(".dataTables_paginate")
                    .hide();
            } else {
                jQuery(oSettings.nTableWrapper)
                    .find(".dataTables_paginate")
                    .show();
            }

            $dataTables_filter = $("body").find(".dataTables_filter");

            $search = $dataTables_filter.find("input[type='search']");

            $search.attr("id", "searchBox");

            $search.attr("class", "form-control");

            $search
                .closest("label")
                .addClass("f-c-with-icon")
                .append('<span class="material-icons">search</span>');

            $dataTables_length = $("body").find(".dataTables_length");

            $dataTables_length.addClass("entries-count");

            $dataTables_length.find("select").addClass("form-control");
        },

        language: {
            sLengthMenu: "<div class='table-options d-flex flex-wrap'>_MENU_",

            search: "_INPUT_", // Removes the 'Search' field label

            searchPlaceholder: "Search", // Placeholder for the search box
        },

        oLanguage: {
            sProcessing:
                "<div id='loader' class='table-loader'><img src='" +
                $loader +
                "'></div>",
        },

        ajax: $("#example2").data("action"),

        //"dom":' <"search"f><"top"l>rt<"bottom"ip><"clear">',

        columns: [
            {
                data: "img_url",
                name: "img_url",
                searchable: false,
                bSortable: false,
                render: function (data, type, row) {
                    $text =
                        '<img src="' +
                        data +
                        '" class="img-thumbnails" style="width:120px">';

                    return $text;
                },
            },

            
            { data: "category", name: "category", bSortable: true },
            { data: "name", name: "name", bSortable: true },
            { data: "price", name: "price", bSortable: true },
            { data: "discounted_price", name: "discounted_price", bSortable: true },
            { data: "prize", name: "prize", bSortable: true },
            { data: "ranking_counts", name: "ranking_counts", bSortable: true },
            { data: "start_date", name: "start_date", bSortable: true },
            { data: "end_date", name: "end_date", bSortable: true },
            { data: "total_earning", name: "total_earning", bSortable: true }, 
            {
                data: "action",
                name: "action",
                searchable: false,
                bSortable: false,
            },
            // {
            //     data: "status",
            //     name: "status",
            //     searchable: false,
            //     bSortable: false,
            //     render: function (data, type, row) {
            //         $text = '<div class="checkbox switcher">';

            //         $text += '<label for="test' + data.id + '">';

            //         $text +=
            //             '<input type="checkbox" class="changeStatusToggle" id="test' +
            //             data.id +
            //             '" value="" ' +
            //             data.checked +
            //             ' data-action="' +
            //             data.url +
            //             '">';

            //         $text += "<span><small></small></span>";

            //         $text += "<small>" + data.label + "</small>";

            //         $text += "</label>";

            //         $text += "</div> ";

            //         return $text;
            //     },
            // },

          
        ],
    });

    $("body").on("change", ".changeStatusToggle", function () {
        var $this = $(this);

        $.ajax({
            url: $this.data("action"),

            method: "GET",

            dataType: "JSON",

            success: function (data) {
                if (data.status == 1) {
                    notification_msg(data.message, "success");

                    dataTable.draw();
                } else {
                    notification_msg(data.message);
                }
            },
        });
    });

 

    

    $("body").on('click','.removeRank',function(e){
        e.preventDefault();
        $(this).closest( "li" ).remove();
        rankCount();
    });

    $("body").on('click','.addMore',function(e){
       e.preventDefault();
       $text = `<li>
                    <div class="form-group d-inline-flex">
                        <input type="number" placeholder="Enter Ranking Prize Amount"  name="rankcount[]" class="rankingInputs" value=""/> 
                        <button type="button" class="btn btn-danger removeRank"><span class="material-icons">delete</span></button>
                    </div>
                    </li>`;
       $("#rankingContainer").append($text);
       rankCount();
    });
    rankCount();

    function rankCount(){ 
        $("#RankingTotal").text($("#rankingContainer li").length);
        setAvailableAmount();
    }

    function setAvailableAmount(){ 
       $amount_distribution = parseInt($('#amount_distribution').val());
       $rankingInputs = $("body").find(".rankingInputs");
       $totalprize = 0;
       if($amount_distribution > 0){
        $rankingInputs.removeAttr('disabled');
        if($amount_distribution < $totalprize){
            alert('Winner ranking should be less than :Rs.'+$amount_distribution);
        }
        $rankingInputs.each(function(){
            
            if($amount_distribution < $totalprize){
                $(this).val(0);
            } 
            if(parseInt($(this).val()) > 0){
                $totalprize += parseInt($(this).val());
            }
        });
       
        $totalprize = $amount_distribution - $totalprize;

       }else{
        $rankingInputs.attr('disabled',true);
       }
           
       $("#totalprize").text($totalprize);
    }

    $("body").on('keyup','.rankingInputs', function(){
        setAvailableAmount();
    });
    $("body").on('keyup','#amount_distribution', function(){
        setAvailableAmount();
    });

   
});
