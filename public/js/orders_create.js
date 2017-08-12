var filesName = [];

$("#fileInput").change(function () {

    var file = this.files[0];
    var formData = new FormData();
    formData.append('file', file);

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '/storeFile',
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        data: formData,
        xhr: function () {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener('progress', function (e) {
                var progress = e.loaded / e.total * 100;
                $('#progress').css('width', progress + "%");
            }, false);
            return xhr;
        },
        success: function (data) {
            $('#progress').css('width', 0);
            $('#files').append(file.name + '<br>');
            filesName.push(file.name);
        }
    });
});

$('form').submit(function (e) {

    e.preventDefault();
    $(this).find(':submit').attr('disabled','disabled');
    var formData = new FormData(this);
    formData.append('files', JSON.stringify(filesName));
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: '/orders',
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        data: formData,
        success:function (url) {
            window.location = url;
        }
    });
});



