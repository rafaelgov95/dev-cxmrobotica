



function adjustFrame(frame){
    var frmTemp;
    if (document.all) {
        var w = frame.document.body.scrollWidth;
        var h = frame.document.body.scrollHeight;

        if(frame.document.body.scrollWidth > frame.document.body.offsetWidth) {
            document.all[frame.name].height = h + 30;
        }
        else {
            document.all[frame.name].height = h;
        }
    }
    else if (document.getElementById) {

        var w = frame.document.width;
        var h = frame.document.height;

        if(frame.document.body.scrollWidth > frame.document.body.offsetWidth) {
            document.getElementById(frame.name).height = h;
        }
        else {
            document.getElementById(frame.name).height = h;
        }
    }
    return false;
}  