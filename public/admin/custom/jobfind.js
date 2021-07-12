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
        var $jobFindListDataTable = $("#jobFindListDataTable").DataTable({
            ajax: {
                url: "/fetchJobFind",
                type: "GET",
                datatype: "json",
                'Content-Type': 'application/pdf',
                "dataSrc": "",
            },
            columns: [
                {
                    data: "name",
                    name: "name",
                    title: "Name",
                },
                {
                    data: "contactno",
                    name: "contactno",
                    title: "Contact No.",
                },
                {
                    data: "emailid",
                    name: "emailid",
                    title: "Email",
                },
                {
                    data: null,
                    render: function (data, type, row, meta) {
                        if (data.resume) {
                            return '<a href="javascript:void(0)" onclick="pdfView('+ data.id +')">View</a>';
                        }
                    },
                    name: "resume",
                    title: "Resume",
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

/////////////////////////// Start Add Job FInd Method ///////////////////
$("#addJobFind").click(function (e) {
    e.preventDefault();
    var formData = new FormData();
    formData.append("name", $("#name").val());
    formData.append("contactno", $("#contactno").val());
    formData.append("emailid", $("#emailid").val());
    formData.append("description", $("#description").val());
    formData.append("resume", $('#resume')[0].files[0]);

    $.ajax({
        url: "/addJobFind",
        type: "POST",
        enctype: "multipart/form-data",
        contentType: 'application/json',
        data: formData,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            $('#jobFindListDataTable').DataTable().ajax.reload();
            $("#reset").click();
            if (data) {
                new PNotify({
                    title: "Success!",
                    text: "Job Find Inserted Successfully.",
                    type: "success",
                });
            }
        },
        error: function (error) {
            $("#nameError").text(
                error.responseJSON.errors.name
            );
            $("#contactnoError").text(
                error.responseJSON.errors.contactno
            );
            $("#emailidError").text(
                error.responseJSON.errors.emailid
            );
            $("#resumeError").text(
                error.responseJSON.errors.resume
            );
            $("#descriptionError").text(
                error.responseJSON.errors.description
            );
        },
    });
});
/////////////////////////// End Add Job Find Method ///////////////////

/////////////////////////// Start PDF view Method ///////////////////

function pdfView(id) {
    $.ajax({
        type: "GET",
        dataType: "html",
        url: "/pdfView/" + id,
        success: function (data) {
            // var WinId = window.open('', 'newwin', 'width=400,height=500');
            // WinId.document.open();
            // WinId.document.write(data.resume);
            // WinId.document.close()
        },
    });
}

/////////////////////////// Start PDF view Method ///////////////////

/////////////////////////// Edit Job Find Method ///////////////////

function editBTN(id) {
    $("#editBTN").click()
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "/editJobFind/" + id,
        success: function (data) {
            $("#jobfindID").val(data.id);
            $("#name").val(data.name);
            $("#showImage").attr("src", data.resume).addClass('d-block');
            $("#oldImg").val(data.resume);
            $("#description").summernote("code", data.description);
            $("#contactno").val(data.contactno);
            $("#emailid").val(data.emailid);
        },
    });
}

/////////////////////////// End Edit Job Find Method ///////////////////

/////////////////////////// Update Job Find Method ///////////////////

$("#updateJobFind").click(function (e) {
    e.preventDefault();
    var formData = new FormData();
    var id = $("#jobfindID").val();
    formData.append("name", $("#name").val());
    formData.append("contactno", $("#contactno").val());
    formData.append("emailid", $("#emailid").val());
    formData.append("description", $("#description").val());
    formData.append("resume", $('#resume')[0].files[0]);

    $.ajax({
        url: "/updateJobFind/" + id,
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
            $('#jobFindListDataTable').DataTable().ajax.reload();
            $("#reset").click();
            if (data) {
                new PNotify({
                    title: "Success!",
                    text: "Job Find Updated Successfully.",
                    type: "success",
                });
            }
        },
        error: function (error) {
            $("#nameError").text(
                error.responseJSON.errors.name
            );
            $("#contactnoError").text(
                error.responseJSON.errors.contactno
            );
            $("#emailidError").text(
                error.responseJSON.errors.emailid
            );
            $("#resumeError").text(
                error.responseJSON.errors.resume
            );
            $("#descriptionError").text(
                error.responseJSON.errors.description
            );
        },
    });
});

/////////////////////////// End Update Job Find Method ///////////////////

/////////////////////////// Delete Categories Method ///////////////////

function deleteBTN(id) {
    $("#modelBTN").click();
    $(document).on("click", ".modal-delete", function (e) {
        e.preventDefault();
        $.magnificPopup.close();
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/deleteJobFind/" + id,
            success: function (data) {
                $('#jobFindListDataTable').DataTable().ajax.reload();
                if (data) {
                    new PNotify({
                        title: "Success!",
                        text: "Job Find Deleted Successfully.",
                        type: "success",
                    });
                }
            },
        });
    });
}

/////////////////////////// End Delete Categories Method ///////////////////

