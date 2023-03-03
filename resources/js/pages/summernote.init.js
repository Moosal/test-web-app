/*
Author       : Dreamguys
Template Name: SmartHR- Bootstrap Admin Template
Version      : 3.6
*/
$(document).ready(function() {
    // Summernote
    
    if($('.summernote').length > 0) {
        $('.summernote').summernote({
            height: 200,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: false                 // set focus to editable area after initializing summernote
        });
    }
});