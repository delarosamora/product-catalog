import $ from 'jquery'

$(() => {
    const previewFile = (input) => {
        const file = $("#image").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }

    $('#image').change(() => {previewFile(this)})
})