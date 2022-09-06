let evt_currentPictureIndex = 1;
let evt_picturesCount = 5;

function evt_changePrev() {
    evt_currentPictureIndex > 1 ? evt_currentPictureIndex-- : evt_currentPictureIndex = evt_picturesCount;
    evt_changeImage();
}

function evt_changeNext() {
    evt_currentPictureIndex < evt_picturesCount ? evt_currentPictureIndex++ : evt_currentPictureIndex = 1;
    evt_changeImage();
}

function evt_changeImage(){
    let image = `/images/galleries/museum/${evt_currentPictureIndex}.jpg`;
    $('#mus_evt_image').fadeOut("slow", function(){
        $('#mus_evt_image').attr("src", image);
        $('#mus_evt_image').fadeIn("slow");
    });
}


let ach_currentPictureIndex = 1;
let ach_picturesCount = 15;

function ach_changePrev() {
    ach_currentPictureIndex > 1 ? ach_currentPictureIndex-- : ach_currentPictureIndex = ach_picturesCount;
    ach_changeImage();
}

function ach_changeNext() {
    ach_currentPictureIndex < ach_picturesCount ? ach_currentPictureIndex++ : ach_currentPictureIndex = 1;
    ach_changeImage();
}

function ach_changeImage(){
    let image = `/images/galleries/achievements/${ach_currentPictureIndex}.jpg`;
    $('#mus_ach_image').fadeOut("slow", function(){
        $('#mus_ach_image').attr("src", image);
        $('#mus_ach_image').fadeIn("slow");
    });
}

let exh_currentPictureIndex = 1;
let exh_picturesCount = 5;

function exh_changePrev() {
    exh_currentPictureIndex > 1 ? exh_currentPictureIndex-- : exh_currentPictureIndex = exh_picturesCount;
    exh_changeImage();
}

function exh_changeNext() {
    exh_currentPictureIndex < exh_picturesCount ? exh_currentPictureIndex++ : exh_currentPictureIndex = 1;
    exh_changeImage();
}

function exh_changeImage(){
    document.getElementById("exh_image").src = `/images/galleries/activities/${exh_currentPictureIndex}.jpg`;
}




let src_currentPictureIndex = 1;
let src_picturesCount = 15;

function src_changePrev() {
    src_currentPictureIndex > 1 ? src_currentPictureIndex-- : src_currentPictureIndex = src_picturesCount;
    src_changeImage();
}

function src_changeNext() {
    src_currentPictureIndex < src_picturesCount ? src_currentPictureIndex++ : src_currentPictureIndex = 1;
    src_changeImage();
}

function src_changeImage(){
    document.getElementById("src_image").src = `/images/galleries/sources/${src_currentPictureIndex}.jpg`;
}
