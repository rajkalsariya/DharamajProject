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
        var $jobPostListDataTable = $("#jobPostListDataTable").DataTable({
            ajax: {
                url: "/fetchJobPost",
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
                    data: "jobtype",
                    name: "jobtype",
                    title: "Job Type",
                },
                {
                    data: null,
                    render: function (data, type, row, meta) {
                        if (data.photo) {
                            return '<img src="/' + data.photo + '" width="50"/>';
                        }
                    },
                    name: "photo",
                    title: "Photo",
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
$("#addJobPost").click(function (e) {
    e.preventDefault();
    var formData = new FormData();
    formData.append("title", $("#title").val());
    formData.append("jobtype", $("#jobtype").val());
    formData.append("contactno", $("#contactno").val());
    formData.append("emailid", $("#emailid").val());
    formData.append("city", $("#city").val());
    formData.append("country", $("#country").val());
    formData.append("jobdetails", $("#jobdetails").val());
    formData.append("description", $("#description").val());
    formData.append("jpdt", $("#jpdt").val());
    formData.append("photo", $('#photo')[0].files[0]);

    $.ajax({
        url: "/addJobPost",
        type: "POST",
        enctype: "multipart/form-data",
        contentType: 'application/json',
        data: formData,
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            $('#jobPostListDataTable').DataTable().ajax.reload();
            $("#reset").click();
            if (data) {
                new PNotify({
                    title: "Success!",
                    text: "Job Post Inserted Successfully.",
                    type: "success",
                });
            }
        },
        error: function (error) {
            $("#titleError").text(
                error.responseJSON.errors.title
            );
            $("#jobtypeError").text(
                error.responseJSON.errors.jobtype
            );
            $("#contactnoError").text(
                error.responseJSON.errors.contactno
            );
            $("#emailidError").text(
                error.responseJSON.errors.emailid
            );
            $("#cityError").text(
                error.responseJSON.errors.city
            );
            $("#countryError").text(
                error.responseJSON.errors.country
            );
            $("#photoError").text(
                error.responseJSON.errors.photo
            );
            $("#jpdtError").text(
                error.responseJSON.errors.jpdt
            );
            $("#jobdetailsError").text(
                error.responseJSON.errors.jobdetails
            );
            $("#descriptionError").text(
                error.responseJSON.errors.description
            );
        },
    });
});
/////////////////////////// End Add Job Find Method ///////////////////

/////////////////////////// Edit Job Find Method ///////////////////

function editBTN(id) {
    $("#editBTN").click()
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "/editJobPost/" + id,
        success: function (data) {
            $("#jobPostID").val(data.id);
            $("#title").val(data.title);
            $("#jobtype").val(data.jobtype);
            $("#contactno").val(data.contactno);
            $("#emailid").val(data.emailid);
            $("#city").val(data.city);
            $("#country").val(data.country);
            $("#jpdt").val(data.jpdt);
            $("#jobdetails").summernote("code", data.jobdetails);
            $("#description").summernote("code", data.description);
            $("#showImage").attr("src", "/" + data.photo).addClass('d-block');
            $("#oldImg").val(data.photo);
        },
    });
}

/////////////////////////// End Edit Job Post Method ///////////////////

/////////////////////////// Update Job Post Method ///////////////////

$("#updateJobPost").click(function (e) {
    e.preventDefault();
    var formData = new FormData();
    var id = $("#jobPostID").val();
    formData.append("title", $("#title").val());
    formData.append("jobtype", $("#jobtype").val());
    formData.append("contactno", $("#contactno").val());
    formData.append("emailid", $("#emailid").val());
    formData.append("city", $("#city").val());
    formData.append("country", $("#country").val());
    formData.append("jobdetails", $("#jobdetails").val());
    formData.append("description", $("#description").val());
    formData.append("jpdt", $("#jpdt").val());
    formData.append("photo", $('#photo')[0].files[0]);

    $.ajax({
        url: "/updateJobPost/" + id,
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
            $('#jobPostListDataTable').DataTable().ajax.reload();
            $("#reset").click();
            if (data) {
                new PNotify({
                    title: "Success!",
                    text: "Job Post Updated Successfully.",
                    type: "success",
                });
            }
        },
        error: function (error) {
            $("#titleError").text(
                error.responseJSON.errors.title
            );
            $("#jobtypeError").text(
                error.responseJSON.errors.jobtype
            );
            $("#contactnoError").text(
                error.responseJSON.errors.contactno
            );
            $("#emailidError").text(
                error.responseJSON.errors.emailid
            );
            $("#cityError").text(
                error.responseJSON.errors.city
            );
            $("#countryError").text(
                error.responseJSON.errors.country
            );
            $("#photoError").text(
                error.responseJSON.errors.photo
            );
            $("#jpdtError").text(
                error.responseJSON.errors.jpdt
            );
            $("#jobdetailsError").text(
                error.responseJSON.errors.jobdetails
            );
            $("#descriptionError").text(
                error.responseJSON.errors.description
            );
        },
    });
});

/////////////////////////// End Update Job Post Method ///////////////////

/////////////////////////// Delete Job Post Method ///////////////////

function deleteBTN(id) {
    $("#modelBTN").click();
    $(document).on("click", ".modal-delete", function (e) {
        e.preventDefault();
        $.magnificPopup.close();
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "/deleteJobPost/" + id,
            success: function (data) {
                $('#jobPostListDataTable').DataTable().ajax.reload();
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

/////////////////////////// End Delete Job Post Method ///////////////////

