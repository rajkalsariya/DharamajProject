$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

/////////////////////////// Start Fetch Categories Method ///////////////////
// DataTable
(function ($) {
    // DataTable Config
    var datatableInit = function () {
        var $CategoryDataTable = $("#CategoryDataTable").DataTable({
            ajax: {
                url: "/admin/fetchCategories",
                type: "GET",
                datatype: "json",
                "dataSrc": "",
            },
            columns: [
                {
                    data: "pname",
                    name: "pname",
                    title: "Parent Categories",
                },
                {
                    data: "cname",
                    name: "cname",
                    title: "Sub Categories",
                },
                {
                    data: null,
                    render: function (data, type, row, meta) {
                        if (data.icons == null) {
                            return `<span>Image not selected</span>`
                        } else {
                            return '<img src="/' + data.icons + '" width="50"/>';
                        }
                    },
                    name: "icons",
                    title: "Image",
                },
                {
                    data: "ads",
                    name: "ads",
                    title: "Total Post",
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
    ///////////////////////////  End Fetch Categories Method ///////////////////
}.apply(this, [jQuery]));


/////////////////////////// Start Add Categories Method ///////////////////
$("#addCategories").click(function (e) {
    e.preventDefault();
    var formData = new FormData();
    formData.append("cname", $("#cname").val());
    formData.append("pid", $("#pid").val());
    formData.append("icons", $('#icons')[0].files[0]);

    $.ajax({
        url: "/admin/addCategories",
        type: "POST",
        enctype: "multipart/form-data",
        contentType: 'application/json',
        data: formData,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            $('#CategoryDataTable').DataTable().ajax.reload();
            $('#pid').trigger("relaod");
            $("#reset").click();
            if (data) {
                new PNotify({
                    title: "Success!",
                    text: "Categories Inserted Successfully.",
                    type: "success",
                });
            }
        },
        error: function (error) {
            $("#categoriesNameError").text(
                error.responseJSON.errors.cname
            );
        },
    });
});
/////////////////////////// End Add Categories Method ///////////////////


/////////////////////////// Edit Categories Method ///////////////////

function editBTN(id) {
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "/admin/editCategories/" + id,
        success: function (data) {
            // table categories title hide/show
            $("#mainTitle").hide();
            $("#updateMainTitle").addClass("d-block");

            // label title hide/show
            $("#cateTitle").hide();
            $("#updateCateTitle").addClass("d-inline-block");

            // label sub categories title hide/show
            $("#cateSubTitle").hide();
            $("#updateCateSubTitle").addClass("d-inline-block");

            // submit btn hide/show
            $("#addCategories").hide();
            $("#updateCategories").addClass("d-inline-block");

            $("#categoriesNameError").text("");

            $("#cId").val(data.id);
            data.pid == 0 ? '' : $("#pid").val(data.pid).trigger("change");
            data.cname == null ? '' : $("#cname").val(data.cname);
            data.icons == null ? '' : $("#showImage").attr("src", '/' + data.icons).addClass('d-block');
            data.icons == null ? '' : $("#oldImg").val(data.icons);
        },
    });
}

/////////////////////////// End Edit Categories Method ///////////////////

/////////////////////////// Update Categories Method ///////////////////

$("#updateCategories").click(function (e) {
    e.preventDefault();
    var formData = new FormData();
    var id = $("#cId").val();
    formData.append("cname", $("#cname").val());
    formData.append("pid", $("#pid").val());
    formData.append("icons", $('#icons')[0].files[0]);

    $.ajax({
        url: "/admin/updateCategories/" + id,
        type: "POST",
        enctype: "multipart/form-data",
        contentType: 'application/json',
        data: formData,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            $('#CategoryDataTable').DataTable().ajax.reload();
            $("#reset").click();
            if (data) {
                new PNotify({
                    title: "Success!",
                    text: "Categories Updated Successfully.",
                    type: "success",
                });
            }
        },
        error: function (error) {
            $("#categoriesNameError").text(
                error.responseJSON.errors.cname
            );
        },
    });
});

/////////////////////////// End Update Categories Method ///////////////////

/////////////////////////// Existed Categories Method ///////////////////

function checkCname() {
    var cname = $("#cname").val()
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "/admin/checkCname/" + cname,
        success: function (data) {
            if (data > 0) {
                $("#categoriesNameError").html('Categories already exist.');
            }
            else {
                $("#categoriesNameError").html("");
            }
        }
    })
}

/////////////////////////// End Existed Categories Method ///////////////////

/////////////////////////// Delete Categories Method ///////////////////

function deleteBTN(id) {
    $("#modelBTN").click();
    $(document).on("click", ".modal-delete", function (e) {
        e.preventDefault();
        $.magnificPopup.close();
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/admin/deleteCategories/" + id,
            success: function (data) {
                $('#CategoryDataTable').DataTable().ajax.reload();
                if (data) {
                    new PNotify({
                        title: "Success!",
                        text: "Categories Deleted Successfully.",
                        type: "success",
                    });
                }
            },
        });
    });
}

/////////////////////////// End Delete Categories Method ///////////////////

/////////////////////////// All Input Field Blank ///////////////////

$("#reset").click(function () {
    // table categories title hide/show
    $("#mainTitle").show();
    $("#updateMainTitle").removeClass("d-block");

    // label title hide/show
    $("#cateTitle").show();
    $("#updateCateTitle").removeClass("d-inline-block");

    // label sub categories title hide/show
    $("#cateSubTitle").show();
    $("#updateCateSubTitle").removeClass("d-inline-block");

    // submit btn hide/show
    $("#addCategories").show();
    $("#updateCategories").removeClass("d-inline-block");

    $("#categoriesNameError").text("");
    $("#cprentNameError").text("");
    $("#showImage").attr('src', '');
    $("#pid").val('').trigger("change")
});

/////////////////////////// All Input Field Blank ///////////////////


