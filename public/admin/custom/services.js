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
        var $servicesDataTable = $("#servicesDataTable").DataTable({
            ajax: {
                url: "/fetchServices",
                type: "GET",
                datatype: "json",
                "dataSrc": "",
            },
            columns: [
                {
                    data: null,
                    render: function (data, type, row, meta) {
                        if (data.logo == null) {
                            return `<span>Image not selected</span>`
                        } else {
                            return '<img src="/' + data.logo + '" width="50"/>';
                        }
                    },
                    name: "logo",
                    title: "Logo",
                },
                {
                    data: "title",
                    name: "title",
                    title: "Title",
                },
                {
                    data: "established",
                    name: "established",
                    title: "Established",
                },
                {
                    data: null,
                    render: function (data, type, row, meta) {
                        return data.contact1 + ' / ' + data.contact2
                    },
                    name: "contact1",
                    title: "Contact",
                },
                {
                    data: "email",
                    name: "email",
                    title: "Email",
                },
                {
                    data: "cname",
                    name: "cname",
                    title: "Categories",
                },
                {

                    data: null,
                    render: function (data, type, row, meta) {
                        return data.adder1 + ', ' + data.adder2 + ', ' + data.city + ', ' + data.pincode
                    },
                    name: "adder1",
                    title: "Address",
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
$("#addServices").click(function (e) {
    e.preventDefault();
    var formData = new FormData();
    formData.append("title", $("#title").val());
    formData.append("cid", $("#cid").val());
    formData.append("established", $("#established").val());
    formData.append("email", $("#email").val());
    formData.append("contact1", $("#contact1").val());
    formData.append("contact2", $("#contact2").val());
    formData.append("adder1", $("#adder1").val());
    formData.append("adder2", $("#adder2").val());
    formData.append("city", $("#city").val());
    formData.append("pincode", $("#pincode").val());
    formData.append("website", $("#website").val());
    formData.append("description", $("#description").val());
    formData.append("logo", $('#logo')[0].files[0]);
    formData.append("photourl", $('#photourl')[0].files[0]);

    $.ajax({
        url: "/addServices",
        type: "POST",
        enctype: "multipart/form-data",
        contentType: 'application/json',
        data: formData,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            $('#servicesDataTable').DataTable().ajax.reload();
            $("#reset").click();
            if (data) {
                new PNotify({
                    title: "Success!",
                    text: "Service Inserted Successfully.",
                    type: "success",
                });
            }
        },
        error: function (error) {
            $("#titleError").text(
                error.responseJSON.errors.title
            );
            $("#establishedError").text(
                error.responseJSON.errors.established
            );
            $("#emailError").text(
                error.responseJSON.errors.email
            );
            $("#contact1Error").text(
                error.responseJSON.errors.contact1
            );
            $("#contact2Error").text(
                error.responseJSON.errors.contact2
            );
            $("#adder1Error").text(
                error.responseJSON.errors.adder1
            );
            $("#adder2Error").text(
                error.responseJSON.errors.adder2
            );
            $("#cityError").text(
                error.responseJSON.errors.city
            );
            $("#pincodeError").text(
                error.responseJSON.errors.pincode
            );
            $("#websiteError").text(
                error.responseJSON.errors.website
            );
            $("#logoError").text(
                error.responseJSON.errors.logo
            );
        },
    });
});
/////////////////////////// End Add Advertisement Method ///////////////////


/////////////////////////// Edit Services Method ///////////////////

function editBTN(id) {
    $("#editBTN").click()
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "/editServices/" + id,
        success: function (data) {
            $("#sID").val(data.id);
            $("#title").val(data.title);
            $("#cid").val(data.cid).trigger("change");
            $("#established").val(data.established);
            $("#email").val(data.email);
            $("#contact1").val(data.contact1);
            $("#contact2").val(data.contact2);
            $("#adder1").val(data.adder1);
            $("#adder2").val(data.adder2);
            $("#city").val(data.city);
            $("#pincode").val(data.pincode);
            $("#website").val(data.website);
            $("#showLogo").attr("src", '/' + data.logo).addClass('d-block');
            $("#showPhoto").attr("src", '/' + data.photourl).addClass('d-block');
            $("#oldLogo").val(data.logo);
            $("#oldPhoto").val(data.photourl);
            $("#description").summernote("code", data.description);
        },
    });
}

/////////////////////////// End Edit Services Method ///////////////////


/////////////////////////// Update Services Method ///////////////////

$("#updateServices").click(function (e) {
    e.preventDefault();
    var formData = new FormData();
    var id = $("#sID").val();
    formData.append("title", $("#title").val());
    formData.append("cid", $("#cid").val());
    formData.append("established", $("#established").val());
    formData.append("email", $("#email").val());
    formData.append("contact1", $("#contact1").val());
    formData.append("contact2", $("#contact2").val());
    formData.append("adder1", $("#adder1").val());
    formData.append("adder2", $("#adder2").val());
    formData.append("city", $("#city").val());
    formData.append("pincode", $("#pincode").val());
    formData.append("website", $("#website").val());
    formData.append("description", $("#description").val());
    formData.append("logo", $('#logo')[0].files[0]);
    formData.append("photourl", $('#photourl')[0].files[0]);

    $.ajax({
        url: "/updateServices/" + id,
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
            $('#servicesDataTable').DataTable().ajax.reload();
            $("#reset").click();
            if (data) {
                new PNotify({
                    title: "Success!",
                    text: "Services Updated Successfully.",
                    type: "success",
                });
            }
        },
        error: function (error) {
            $("#titleError").text(
                error.responseJSON.errors.title
            );
            $("#establishedError").text(
                error.responseJSON.errors.established
            );
            $("#emailError").text(
                error.responseJSON.errors.email
            );
            $("#contact1Error").text(
                error.responseJSON.errors.contact1
            );
            $("#contact2Error").text(
                error.responseJSON.errors.contact2
            );
            $("#adder1Error").text(
                error.responseJSON.errors.adder1
            );
            $("#adder2Error").text(
                error.responseJSON.errors.adder2
            );
            $("#cityError").text(
                error.responseJSON.errors.city
            );
            $("#pincodeError").text(
                error.responseJSON.errors.pincode
            );
            $("#websiteError").text(
                error.responseJSON.errors.website
            );
        },
    });
});

/////////////////////////// End Update Services Method ///////////////////

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
    $("#title").val("");
    $("#cid").val("").trigger("change");
    $("#established").val("");
    $("#contact1").val("");
    $("#contact").val("");
    $("#adder1").val("");
    $("#adder2").val("");
    $("#city").val("");
    $("#pincode").val("");
    $("#website").val("");
    $("#imageurl").val("");
    $("#description").val("").summernote("code", 'Start typing...');
    $("#showLogo").attr("src", "");
    $("#showPhoto").attr("src", "");

    $("#titleError").text("");
    $("#establishedError").text("");
    $("#emailError").text("");
    $("#contact1Error").text("");
    $("#contact2Error").text("");
    $("#adder1Error").text("");
    $("#adder2Error").text("");
    $("#cityError").text("");
    $("#pincodeError").text("");
    $("#websiteError").text("");
    $("#logoError").text("");
    $("#descriptionError").text("");
});