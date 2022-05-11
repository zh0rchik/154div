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
    ach_changeImage(false);
}

function ach_changeNext() {
    ach_currentPictureIndex < ach_picturesCount ? ach_currentPictureIndex++ : ach_currentPictureIndex = 1;
    ach_changeImage(true);
}

function ach_changeImage(direction) {
    animate("mus_ach_image", direction, `/images/galleries/achievements/${ach_currentPictureIndex}.jpg`);
}


function animate(id, direction, path) {
    document.getElementById(id).style.animation = direction ? "g_anim 2500ms linear 1" : "g_anim_rev 2500ms linear 1";
    setTimeout(() => {
        document.getElementById(id).src = path;
    }, 2500);
    setTimeout(() => {
        document.getElementById(id).style.animation = direction ? "out_g_anim 2500ms linear 1" : "out_g_anim_rev 2500ms linear 1";
    }, 2500);
}

/*let ach_currentPictureIndex = 4;
let ach_picturesCount = 5;

function ach_changePrev() {
    ach_currentPictureIndex > 1 ? ach_currentPictureIndex-- : ach_currentPictureIndex = ach_picturesCount;
    ach_changeImage();
}

function ach_changeNext() {
    ach_currentPictureIndex < ach_picturesCount ? ach_currentPictureIndex++ : ach_currentPictureIndex = 1;
    ach_changeImage();
}

function ach_changeImage(){
    document.getElementById("mus_ach_image").src = `/images/galleries/achievements/${ach_currentPictureIndex}.jpg`;
}*/




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
