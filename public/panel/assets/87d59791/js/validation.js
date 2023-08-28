$('document').ready(function(){
    if(yii.validation !== undefined)
    {
        yii.validation.addMessage = function (messages, message, value) {
            if(message !== "")
            {
                messages.push(toastr["error"](message.replace(/\{value\}/g, value)));
            }
        };
        yii.validation.file = function (attribute, messages, options) {
            let files = getUploadedFiles(attribute, messages, options);
            $.each(files, function (i, file) {
                validateFile(file, messages, options);
            });
        };
    }
});

function getUploadedFiles(attribute, messages, options)
{
    // Skip validation if File API is not available
    if (typeof File === "undefined") {
        return [];
    }

    let files = $(attribute.input, attribute.$form).get(0).files;
    if (!files) {
        messages.push(toastr["error"](options.message));
        return [];
    }

    if (files.length === 0) {
        if (!options.skipOnEmpty) {
            messages.push(toastr["error"](options.uploadRequired));
        }

        return [];
    }

    if (options.maxFiles && options.maxFiles < files.length) {
        messages.push(toastr["error"](options.tooMany));
        return [];
    }

    return files;
}

validateFile = function(file, messages, options) {
    if (options.extensions && options.extensions.length > 0) {
        var index = file.name.lastIndexOf('.');
        var ext = !~index ? '' : file.name.substr(index + 1, file.name.length).toLowerCase();

        if (!~options.extensions.indexOf(ext)) {
            messages.push(toastr["error"](options.wrongExtension.replace(/\{file\}/g, file.name)));
        }
    }

    if (options.mimeTypes && options.mimeTypes.length > 0) {
        if (!yii.validation.validateMimeType(options.mimeTypes, file.type)) {
            messages.push(toastr["error"](options.wrongMimeType.replace(/\{file\}/g, file.name)));
        }
    }

    if (options.maxSize && options.maxSize < file.size) {
        messages.push(toastr["error"](options.tooBig.replace(/\{file\}/g, file.name)));
    }

    if (options.minSize && options.minSize > file.size) {
        messages.push(toastr["error"](options.tooSmall.replace(/\{file\}/g, file.name)));
    }
}

$('body').on('afterValidateAttribute', 'form', function(event, attr, msg) {
    if(msg.length) {
        toastr["error"](msg)
    }
});