$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

/////////////////////////// Start Fetch Advertisement Method ///////////////////
// DataTable
(function ($) {
    // DataTable Config
    var datatableInit = function () {
        var $advertisementDataTable = $("#advertisementDataTable").DataTable({
            ajax: {
                url: "/fetchAdvertisement",
                type: "GET",
                datatype: "json",
                "dataSrc": "",
            },
            columns: [
                {
                    data: "title",
                    name: "title",
                    title: "Title",
                },
                {
                    data: "cname",
                    name: "cname",
                    title: "Categories",
                },
                {
                    targets: 2,
                    data: null,
                    render: function (data, type, row, meta) {
                        return data.startdate + ' to ' + data.enddate
                    },
                    name: "startdate",
                    title: "Date",
                },
                {
                    data: null,
                    render: function (data, type, row, meta) {
                        if (data.imageurl == null) {
                            return `<span>Image not selected</span>`
                        } else {
                            return '<img src="/' + data.imageurl + '" width="50"/>';
                        }
                    },
                    name: "imageurl",
                    title: "Image",
                },
                {
                    data: "price",
                    name: "price",
                    title: "Price",
                },
                {
                    data: "paidmode",
                    name: "paidmode",
                    title: "Paid",
                },
                {
                    data: null,
                    render: function (data, type, full, meta) {
                        var ActionColumn = '<button class="mb-1 mt-1 mr-1 btn btn-default" onclick="editBTN(' + data.id + ')"><i class="fas fa-pencil-alt"></i></button>';
                        ActionColumn += '<button class="mb-1 mt-1 mr-1 btn btn-default" onclick="deleteBTN(' + data.id + ')"><i class="fas fa-trash-alt"></i></button>';
                        return ActionColumn;
                    },
                    name: "Action",
                    title: "Action",
                },
            ],
        });
    };

    $(function () {
        datatableInit();
    });
    ///////////////////////////  End Fetch Advertisement Method ///////////////////
}.apply(this, [jQuery]));


/////////////////////////// Start Add Advertisement Method ///////////////////
$("#addAdvertisement").click(function (e) {
    e.preventDefault();
    var formData = new FormData();
    formData.append("title", $("#title").val());
    formData.append("startdate", $("#startdate").val());
    formData.append("enddate", $("#enddate").val());
    formData.append("cid", $("#cid").val());
    formData.append("redirecturl", $("#redirecturl").val());
    formData.append("price", $("#price").val());
    formData.append("paidmode", $("#paidmode").val());
    formData.append("description", $("#description").val());
    formData.append("imageurl", $('#imageurl')[0].files[0]);

    $.ajax({
        url: "/addAdvertisement",
        type: "POST",
        enctype: "multipart/form-data",
        contentType: 'application/json',
        data: formData,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            $('#advertisementDataTable').DataTable().ajax.reload();
            $("#reset").click();
            if (data) {
                new PNotify({
                    title: "Success!",
                    text: "Advertisement Inserted Successfully.",
                    type: "success",
                });
            }
        },
        error: function (error) {
            $("#titleError").text(
                error.responseJSON.errors.title
            );
            $("#startdateError").text(
                error.responseJSON.errors.startdate
            );
            $("#enddateError").text(
                error.responseJSON.errors.enddate
            );
            $("#redirecturlError").text(
                error.responseJSON.errors.redirecturl
            );
            $("#descriptionError").text(
                error.responseJSON.errors.description
            );
        },
    });
});
/////////////////////////// End Add Advertisement Method ///////////////////

/////////////////////////// Edit Advertisement Method ///////////////////

function editBTN(id) {
    $("#editBTN").click()
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "/editAdvertisement/" + id,
        success: function (data) {
            $("#aID").val(data.id);
            $("#title").val(data.title);
            $("#cid").val(data.cid).trigger("change");
            $("#showImage").attr("src", '/' + data.imageurl).addClass('d-block');
            $("#oldImg").val(data.imageurl);
            $("#description").summernote("code", data.description);
            $("#redirecturl").val(data.redirecturl);
            $("#startdate").val(data.startdate);
            $("#enddate").val(data.enddate);
            $("#price").val(data.price);
            $("#paidmode").val(data.paidmode);
        },
    });
}

/////////////////////////// End Edit Advertisement Method ///////////////////

/////////////////////////// Update Advertisement Method ///////////////////

$("#updateAdvertisement").click(function (e) {
    e.preventDefault();
    var formData = new FormData();
    var id = $("#aID").val();
    formData.append("title", $("#title").val());
    formData.append("startdate", $("#startdate").val());
    formData.append("enddate", $("#enddate").val());
    formData.append("cid", $("#cid").val());
    formData.append("redirecturl", $("#redirecturl").val());
    formData.append("price", $("#price").val());
    formData.append("paidmode", $("#paidmode").val());
    formData.append("description", $("#description").val());
    formData.append("imageurl", $('#imageurl')[0].files[0]);

    $.ajax({
        url: "/updateAdvertisement/" + id,
        type: "POST",
        enctype: "multipart/form-data",
        contentType: 'application/json',
        data: formData,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            $.magnificPopup.close();
            $('#advertisementDataTable').DataTable().ajax.reload();
            $("#reset").click();
            if (data) {
                new PNotify({
                    title: "Success!",
                    text: "Advertisement Updated Successfully.",
                    type: "success",
                });
            }
        },
        error: function (error) {
            $("#titleError").text(
                error.responseJSON.errors.title
            );
            $("#startdateError").text(
                error.responseJSON.errors.startdate
            );
            $("#enddateError").text(
                error.responseJSON.errors.enddate
            );
            $("#redirecturlError").text(
                error.responseJSON.errors.redirecturl
            );
            $("#descriptionError").text(
                error.responseJSON.errors.description
            );
        },
    });
});

/////////////////////////// End Update Advertisement Method ///////////////////

/////////////////////////// Delete Categories Method ///////////////////

function deleteBTN(id) {
    $("#modelBTN").click();
    $(document).on("click", ".modal-delete", function (e) {
        e.preventDefault();
        $.magnificPopup.close();
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/deleteAdvertisement/" + id,
            success: function (data) {
                $('#advertisementDataTable').DataTable().ajax.reload();
                if (data) {
                    new PNotify({
                        title: "Success!",
                        text: "Advertisement Deleted Successfully.",
                        type: "success",
                    });
                }
            },
        });
    });
}

/////////////////////////// End Delete Categories Method ///////////////////

////////////////////////// Select Image Show ///////////////////////////

$(document).ready(function() {
    $('.image').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage').attr('src', e.target.result).addClass('d-block');
        }
        reader.readAsDataURL(e.target.files['0']);
    });
    $("#remove").click(function(){
        $('#showImage').attr('src', '').addClass('d-none');
    })
});

$("#reset").click(function () {
    $("#showImage").attr("src", "");
    $("#title").val("");
    $("#startdate").val("");
    $("#enddate").val("");
    $("#cid").val("").trigger("change");
    $("#price").val("");
    $("#paidmode").val("");
    $("#imageurl").val("");
    $("#description").val("").summernote("code", 'Start typing...');

    $("#titleError").text("");
    $("#startdateError").text("");
    $("#enddateError").text("");
    $("#redirecturlError").text("");
    $("#descriptionError").text("");
});
////////////////////////// End Select Image Show ///////////////////////////