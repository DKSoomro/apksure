$(document).ready(function() {
    //     jQuery.validator.setDefaults({
    //   debug: true,
    //   success: "valid"
    // });

    // $('.reqerrors').validate();
    // $('.add_products_form').validate();
    // $(".reqerrors").validate({
    //     onkeyup: function(element) {
    //         this.element(element);
    //     },
    //     rules: {
    //         progprice: {
    //             required: true,
    //             digits: true
    //         },
    //         prosprice: {
    //             digits: true
    //         }
    //     },

    //     messages: {
    //         progprice: "Enter number of Only",
    //         prosprice: "Enter number of Only"
    //     }

    // });

    //categories 
    // $('.simplevalidate').validate();
    // // GET category
    // $(".catget #getinput").focusout(function(e) {
    //     t = $(this);
    //     p = $(this).closest('.catget');
    //     ajax_url = base_url + '/admin/matchCategory';
    //     value = $(this).val();

    //     $.ajax({
    //         type: "POST",
    //         url: ajax_url,
    //         data: { 'getinput': value },
    //         dataType: "json",
    //         beforeSend: function() {
    //             p.find('.btn').attr('disabled', true);
    //             p.find('.btn').html('<i class="fa fa-spin fa-spinner"></i>');
    //         },
    //         success: function(result) {
    //             if (result) {
    //                 p.find('.btn').text('Category Already Added ');
    //                 t.val('')
    //                 $(".catget #getinput").focus();
    //             } else {
    //                 setTimeout(function() {
    //                     p.find('.btn').attr('disabled', false);
    //                     p.find('.btn').text('Add Category');
    //                 }, 1000);
    //             }

    //         }
    //     });

    // });
    // GET Brands
    // $(".brandsge #getinput").keyup(function() {
    //     p = $(this).closest('.brandsge');
    //     ajax_url = base_url + '/admin/matchBrands';
    //     value = $(this).val();

    //     $.ajax({
    //         type: "POST",
    //         url: ajax_url,
    //         data: { 'getinput': value },
    //         dataType: "json",
    //         beforeSend: function() {
    //             p.find('.btn').attr('disabled', true);
    //             p.find('.btn').html('<i class="fa fa-spin fa-spinner"></i>');
    //         },
    //         success: function(result) {
    //             // console.log(result);
    //             if (result) {
    //                 p.find('.btn').text('Brands Already Added ');
    //             } else {

    //                 p.find('.btn').attr('disabled', false);
    //                 p.find('.btn').text('Add Brands');
    //             }

    //         }
    //     });

    // });
    // GET Store
    // $(".stocat #getinput").keyup(function() {
    //     p = $(this).closest('.stocat');
    //     ajax_url = base_url + '/admin/matchStores';
    //     value = $(this).val();

    //     $.ajax({
    //         type: "POST",
    //         url: ajax_url,
    //         data: { 'getinput': value },
    //         dataType: "json",
    //         beforeSend: function() {
    //             p.find('.btn').attr('disabled', true);
    //             p.find('.btn').html('<i class="fa fa-spin fa-spinner"></i>');
    //         },
    //         success: function(result) {
    //             // console.log(result);
    //             if (result) {
    //                 p.find('.btn').text('Stores Already Added ');
    //             } else {

    //                 p.find('.btn').attr('disabled', false);
    //                 p.find('.btn').text('Add Store');
    //             }

    //         }
    //     });
    // });

    // edit button

    // $('.editt').on('click', function(e) {
    //     e.preventDefault()
    //     $(this).closest('tr').find('.st_name input,.st_url input,.st_desc textarea').removeAttr('readonly');
    //     t = $(this);
    //     id = t.data('id');
    //     setTimeout(function() {
    //         t.html('<span data-id="' + id + '" class="update-btn btn btn-info btn-block updatee">Update</span>');
    //         t.removeClass('editt');
    //     }, 500);


    // });

    // // Get Product Details
    // $(".prodetail .modelpop").on('click', function() {
    //     pro_id = $(this).data('id');
    //     // console.log(pro_id);
    //     ajax_url = base_url + '/admin/prodetails';
    //     $.ajax({
    //         type: "POST",
    //         url: ajax_url,
    //         data: { 'id': pro_id },
    //         dataType: "html",
    //         success: function(result) {
    //             $('.modelget').html(result);
    //             $('.modelget').find('#prodctview').modal('show');
    //         },
    //         error: function(request, status, error) {
    //             console.log(request.responseText);
    //         }
    //     });
    // });

    // $(document).on('click', '.strmain .delt', function() {
    //     del_content($(this), '/admin/delStore');

    // })

    //     $(document).on('click','.deltbr',function() {
    //     del_content($(this), '/admin/delBrands');

    // })

    // $(document).on('click', '.catemain .delt', function() {
    //     del_content($(this), '/admin/delcat');

    // })


    // $(document).on('click', '.prodetail .delt', function() {
    //     del_content($(this), '/admin/delProd');

    // })
    // $(document).on('click', '.page_cont .delt', function() {
    //     del_content($(this), '/admin/deltpagesdata');

    // })



    // // product type switch
    // $('.addpro .pro_type input[type=radio]:checked').val() == 'compersion' ? $('.prod_compp').removeClass('d-none') : $('.prod_compp').addClass('d-none');
    // $('.addpro .pro_type input[type=radio]').on('change', function() {
    //     if ($(this).is(':checked')) {
    //         v = $(this).val();
    //         if (v == 'compersion') {
    //             $('.prod_compp').removeClass('d-none');

    //         } else {
    //             $('.prod_compp').addClass('d-none');
    //         }
    //     }

    // })

    //for featured

    $(document).on('change', '.collection_featured', function(e) {
        e.preventDefault(); //prevent default action 
        t = $(this);
        id = t = $(this).data('id');
        value = t = $(this).data('value');
        ajax_url = base_url + '/admin/setCollectionFeatured';

        $.ajax({
            url: ajax_url,
            method: "post",
            data: { i: id, v: value },
            success: function(result) {
                console.log(result);
                // odj = JSON.parse(result);
                // if (odj.status) {
                //     t.find('#add_btn').html('Added');
                //     t.find('#add_btn').attr('disabled', true);
                //     t.find('#add_btn').prop('type', 'button');
                // }
                return false;
            }

        });
    });



    //for fetch ajax

    $(document).on('submit', '.fetch_form', function(e) {
        e.preventDefault(); //prevent default action 
        t = $(this);
        ajax_url = base_url + '/admin/dataApifetch';
        data = $(this).serialize()
        $.ajax({
            url: ajax_url,
            method: "post",
            data: data,
            beforeSend: function() {
                t.find('#add_btn').html('<i class="fa fa-spinner fa-spin"></i>');
            },
            success: function(result) {

                odj = JSON.parse(result);
                if (odj.status) {
                    t.find('#add_btn').html('Added');
                    t.find('#add_btn').attr('disabled', true);
                    t.find('#add_btn').prop('type', 'button');
                }
                return false;
            }

        });
    });

    //  For loading
    $("#btnFetch").click(function() {
        // disable button
        $(this).prop("disabled", true);
        // add spinner to button
        // $(this).html(
        //     '<i class="fa fa-circle-o-notch fa-spin"></i>'
        // );
        // for (var i = 0; i < 36; i++) {
        //     if ($('#fetch_form_' + i).find('#add_btn').attr('type') == "submit") {
        //         $('#fetch_form_' + i).find('#add_btn').html('<i class="fa fa-spinner fa-spin"></i>');
        //         $('#fetch_form_' + i).submit();

        //     }

        // }

        $('.fetch_form').each(function() {
            if ($(this).find('#add_btn').attr('type') == "submit") {
                // $(this).find('#add_btn').html('<i class="fa fa-spinner fa-spin"></i>');
                $(this).submit()

            }
        })
    });
    // $(document).ajaxComplete(function(re) {
    //     $('.fetch_form').each(function() {
    //         t = $(this);
    //         t.find('#add_btn').html('Added');
    //         t.find('#add_btn').attr('disabled', true);
    //         t.find('#add_btn').prop('type', 'button');
    //     })
    // });


    /*Tinymce editor*/
    if ($("#tinyMceExample").length) {
        tinymce.init({
            selector: '#tinyMceExample',
            height: 500,
            theme: 'silver',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
            ],
            toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
            image_advtab: true,
            templates: [{
                    title: 'Test template 1',
                    content: 'Test 1'
                },
                {
                    title: 'Test template 2',
                    content: 'Test 2'
                }
            ],
            content_css: []
        });
    }

});
// $(document).on('click', '.strmain .updatee', function() {
//     edit_content($(this), '/admin/editStore');
// })
// $(document).on('change', '.catemain .st_featured', function() {
//     url = '/admin/setFeaturedCategories';
//     id = $(this).data('id');
//     val = $(this).val();
//     ajax_url = base_url + url;
//     $.ajax({
//         type: "POST",
//         url: ajax_url,
//         data: { id: id, v: val },
//         success: function(result) {
//             if (result) {
//                 alert('Updated!')
//             }
//         }
//     });

// })
// $(document).on('click', '.catemain .updatee', function() {

//     edit_content($(this), '/admin/editCategories');
// })

// $(document).on('click', '.brandmain .updatee', function() {
//     edit_content($(this), '/admin/editBrands');

// })
// $(document).on('click', '.brandmain .delt', function() {
//     del_content($(this), '/admin/delBrands');

// })

// function edit_content(elementThis, url) {
//     $this = elementThis;
//     row = $this.closest('tr');
//     st_name = row.find('.st_name input').val();
//     st_desc = '';
//     st_url = '';
//     if (row.find('.st_desc textarea').length > 0) {
//         st_desc = row.find('.st_desc textarea').val();
//     }
//     if (row.find('.st_url input').length > 0) {
//         st_url = row.find('.st_url input').val();
//     }
//     st_id = $this.data('id');
//     ajax_url = base_url + url;
//     $.ajax({
//         type: "POST",
//         url: ajax_url,
//         data: { name: st_name, desc: st_desc, urls: st_url, id: st_id },
//         success: function(result) {
//             console.log(result);
//             if (result) {
//                 setTimeout(function() {
//                     row.find('.updatee').remove();
//                     row.find('.fa-edit').addClass('edit');
//                     row.find('.st_name input,.st_url input,.st_desc textarea').prop("readonly", true);
//                     alert('Updated Data!');
//                 }, 1000);

//             }
//         }
//     });
// }

function del_content(elementThis, url) {
    $this = elementThis;
    row = $this.closest('tr');
    st_id = $this.data('id');
    console.log(st_id);
    var mesg = confirm("Are you have Deleted?");
    if (mesg == true) {
        ajax_url = base_url + url;
        $.ajax({
            type: "POST",
            url: ajax_url,
            data: { id: st_id },
            success: function(result) {
                if (result) {
                    row.append('<p class="text-center text-danger errr_msg">Record Deleted</p>');
                    setTimeout(function() { row.remove(); }, 2000);
                }
            }
        });

    }
}