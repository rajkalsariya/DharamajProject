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
        var $matrimonyDataTable = $("#matrimonyDataTable").DataTable({
            ajax: {
                url: "/fetchMatrimony",
                type: "GET",
                datatype: "json",
                "dataSrc": "",
            },
            columns: [
                {
                    data: "name",
                    name: "name",
                    title: "Name",
                },                
                {
                    data: null,
                    render: function (data, type, row, meta) {
                        if (data.photourl == null) {
                            return `<span>Image not selected</span>`
                        } else {
                            return '<img src="/' + data.photourl + '" width="50"/>';
                        }
                    },
                    name: "photourl",
                    title: "Photo",
                },
                {
                    data: "bdt",
                    name: "bdt",
                    title: "Birthdate",
                },
                {
                    data: "occupation",
                    name: "occupation",
                    title: "Occupation",
                },
                {
                    targets: 2,
                    data: null,
                    render: function (data, type, row, meta) {
                        return data.district + ', ' + data.state
                    },
                    name: "district",
                    title: "Address",
                },
                {
                    data: "maritalstatus",
                    name: "maritalstatus",
                    title: "Maritalstatus",
                },
                {
                    data: null,
                    render: function (data, type, row, meta) {
                        if (data.biourl ) {
                            return '<a href="javascript:void(0)" onclick="pdfView('+ data.id +')">View</a>';
                        }
                    },
                    name: "biourl",
                    title: "Bio",
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
$("#addMatrimony").click(function (e) {
    e.preventDefault();
    var formData = new FormData();
    
    formData.append("name", $("#name").val());
    formData.append("bdt", $("#bdt").val());
    formData.append("sex", $(".sex:checked").val());
    formData.append("district", $("#district").val());
    formData.append("state", $("#state").val());
    formData.append("maritalstatus", $("#maritalstatus").val());
    formData.append("occupation", $("#occupation").val());
    formData.append("photourl", $("#photourl")[0].files[0]);
    formData.append("biourl", $("#biourl")[0].files[0]);

    $.ajax({
        url: "/addMatrimony",
        type: "POST",
        enctype: "multipart/form-data",
        contentType: 'application/json',
        data: formData,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            $('#matrimonyDataTable').DataTable().ajax.reload();
            $("#reset").click();
            if (data) {
                new PNotify({
                    title: "Success!",
                    text: "Matrimony Inserted Successfully.",
                    type: "success",
                });
            }
        },
        error: function (error) {
            $("#nameError").text(
                error.responseJSON.errors.name
            );
            $("#bdtError").text(
                error.responseJSON.errors.bdt
            );
            $("#sexError").text(
                error.responseJSON.errors.sex
            );
            $("#districtError").text(
                error.responseJSON.errors.district
            );
            $("#stateError").text(
                error.responseJSON.errors.state
            );
            $("#maritalstatusError").text(
                error.responseJSON.errors.maritalstatus
            );
            $("#occupationError").text(
                error.responseJSON.errors.occupation
            );
            $("#photourlError").text(
                error.responseJSON.errors.photourl
            );
            $("#biourlError").text(
                error.responseJSON.errors.biourl
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
            $('#matrimonyDataTable').DataTable().ajax.reload();
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
                $('#matrimonyDataTable').DataTable().ajax.reload();
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
    $('.logo').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showLogo').attr('src', e.target.result).addClass('d-block');
        }
        reader.readAsDataURL(e.target.files['0']);
    });
    $("#logoRemove").click(function() {
        $('#showLogo').attr('src', '').addClass('d-none');
    })
});

$(document).ready(function() {
    $('.photo').change(function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showPhoto').attr('src', e.target.result).addClass('d-block');
        }
        reader.readAsDataURL(e.target.files['0']);
    });
    $("#photoRemove").click(function() {
        $('#showPhoto').attr('src', '').addClass('d-none');
    })
});

$("#reset").click(function () {    
    $("#name").val("");
    $("#bdt").val("");
    $("#sex").val("");
    $("#district").val("");
    $("#state").val("");
    $("#maritalstatus").val("");
    $("#occupation").val("");
    $("#showbiourl").attr("src", "");
    $("#showphotourl").attr("src", "");

    $("#nameError").text("");
    $("#bdtError").text("");
    $("#sexError").text("");
    $("#districtError").text("");
    $("#stateError").text("");
    $("#maritalstatusError").text("");
    $("#occupationError").text("");
    $("#photourlError").text("");
    $("#biourlError").text("");
});